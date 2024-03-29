import LinkModule from "./LinkModule.js";
import ButtonModule from "../ButtonModule.js";
import AddLinkForm from "../forms/AddLinkForm.js";
import ModalModule from "../ModalModule.js";
import DeleteGroupForm from "../forms/DeleteGroupForm.js";
import ApiClient from "../../ApiClient.js";
import NotificationService from "../../NotificationService.js";
import IconModule from "../IconModule.js";
import KebabMenuModule from "../KebabMenuModule.js";
import GroupSharesModule from "./GroupSharesModule.js";

const GroupModule = (function () {
    async function render(group) {
        const {id, name, shared, editable, links, userId} = group;

        let groupElement = document.createElement("div");
        groupElement.innerHTML = `
            <div id=${id} class="group flex-column">
                <div class="group-menu flex"> 
                    <div class="group-info flex">
                        <p class="group-name text-tertiary text-ellipsis">${name}</p>
                        <p class="dot-separator text-tertiary"></p>
                        <p class="owner-name text-tertiary text-ellipsis"></p>
                        <div class="img-container flex flex-center"></div>
                    </div>
                    <div class="group-buttons flex flex-center"></div>
                </div>
                <div class="group-links flex-column">
                    ${links.length === 0 ? `<p class="link-placeholder text-center">Add links by clicking on three dots</p>` : ''}
                </div>
            </div>`
        groupElement = groupElement.firstElementChild;

        groupElement.querySelector(".group-info")
            .prepend(await ButtonModule.render("collapse", collapseGroup, "btn-group-collapse"));

        const groupLinks = groupElement.querySelector(".group-links");
        for (const link of links) {
            groupLinks.appendChild(await LinkModule.render(link, editable));
        }

        // Group buttons

        const groupBtns = groupElement.querySelector(".group-buttons");
        const groupOptions = [];

        if (editable) {
            groupOptions.push({optionTitle: "Add", optionIcon: "add", callback: () => addLinkForm(group)});
            groupOptions.push({optionTitle: "Edit", optionIcon: "edit", callback: () => startGroupEdit(group.id)});

            groupBtns.appendChild(await ButtonModule.render('done',
                () => endGroupEdit(group.id, false), "done-btn hidden"));

            groupBtns.appendChild(await ButtonModule.render('cancel',
                () => endGroupEdit(group.id, true), "cancel-btn hidden"));
        }

        groupOptions.push({optionTitle: "Share", optionIcon: "share", callback: () => groupSharesForm(group)});

        if (shared) {
            const ownerData = await fetchUserDataById(userId);
            groupElement.querySelector(".owner-name").textContent = ownerData.userName;
            groupElement.querySelector(".dot-separator").textContent = "•";

            const pictureContainer = groupElement.querySelector(".img-container");
            const ownerImg = document.createElement("img");

            ownerImg.src = `/account/public/${userId}/profile-picture`;
            ownerImg.height = 30;
            ownerImg.width = 30;

            ownerImg.onerror = async () => {
                pictureContainer.innerHTML = await IconModule.render("account");
            }

            pictureContainer.appendChild(ownerImg);

        } else {
            groupOptions.push({optionTitle: "Delete", optionIcon: "delete", callback: () => deleteGroupForm(group)});
        }

        groupElement.querySelector(".group-buttons").appendChild(await KebabMenuModule.render(groupOptions));

        return groupElement;
    }

    function updateState(groupId) {
        ApiClient.fetchData(`/link-group/${groupId}`)
            .then(async response => {
                if (response.success) {
                    const groupElement = document.querySelector(`[id="${groupId}"]`);
                    if (groupElement) {
                        groupElement.replaceWith(await GroupModule.render(response.data));
                    } else {
                        console.error(`Group with id ${groupId} not found`);
                    }
                }
            });
    }

    function removeElement(groupId) {
        const groupElement = document.querySelector(`[id="${groupId}"]`);
        if (groupElement) {
            groupElement.remove();
        } else {
            console.error(`Group with id ${groupId} to delete not found`);
        }
    }

    function collapseGroup(e) {
        const btn = e.currentTarget;
        const links = btn.closest(".group").querySelector(".group-links");
        links.classList.toggle("collapse");
        btn.classList.toggle("active");
    }

    async function addLinkForm(group) {
        document.body.appendChild(await ModalModule.render(await AddLinkForm.render(group)));
    }

    async function groupSharesForm(group) {
        document.body.appendChild(await ModalModule.render(await GroupSharesModule.render(group), false));
    }

    async function startGroupEdit(groupId) {
        const groupEl = document.querySelector(`[id="${groupId}"]`);

        groupEl.classList.add("group-edit");
        groupEl.addEventListener("dragover", handleLinkDrop);
        groupEl.addEventListener("touchmove", handleLinkDrop, {passive: false});

        const groupNameEl = groupEl.querySelector(".group-name");
        const groupNameInput = document.createElement("input");
        groupNameInput.className = "group-name input";
        groupNameInput.value = groupNameInput.placeholder = groupNameEl.innerText;
        groupNameEl.replaceWith(groupNameInput);

        const groupLinkIds = getGroupLinksIds(groupId);
        for (const groupLinkId of groupLinkIds) {
            LinkModule.startLinkEdit(groupLinkId);
        }
    }

    async function endGroupEdit(groupId, cancelled) {
        const groupEl = document.querySelector(`[id="${groupId}"]`);

        groupEl.classList.remove("group-edit");
        groupEl.removeEventListener("dragover", handleLinkDrop);
        groupEl.removeEventListener("touchmove", handleLinkDrop, {passive: false});

        const groupLinkIds = getGroupLinksIds(groupId);
        for (const groupLinkId of groupLinkIds) {
            LinkModule.endLinkEdit(groupLinkId);
        }

        if (!cancelled) {
            const body = {
                linksOrder: groupLinkIds,
                name: groupEl.querySelector(".group-name").value
            }

            try {
                const response = await ApiClient.fetchData(`/link-group/${groupId}`, {
                    method: "PUT",
                    body: JSON.stringify(body),
                });

                if (response.success) {
                    NotificationService.notify("Group edited!", "okay");
                } else {
                    NotificationService.notify(response.message, "error", response.data);
                }
            } catch (error) {
                console.error("Error submitting form:", error);
                NotificationService.notify("An error occurred while submitting the form", "error");
            }
        }

        updateState(groupId);
    }

    function getGroupLinksIds(groupId) {
        return Array
            .from(document
                .querySelector(`[id="${groupId}"]`)
                .querySelectorAll(".link-container"))
            .map(el => el.getAttribute("id"));
    }

    function handleLinkDrop(e) {
        e.preventDefault();

        const dragging = document.querySelector('.dragging');
        const container = dragging.closest(".group-links");
        const afterElement = getDragAfterElement(container, e.clientY || e.touches[0].clientY); // touches for mobile

        if (afterElement == null) {
            container.appendChild(dragging);
        } else {
            container.insertBefore(dragging, afterElement);
        }

        // Check if the dragged element is near the top or bottom edge of the container
        const containerRect = container.getBoundingClientRect();
        const draggableRect = dragging.getBoundingClientRect();

        if (draggableRect.top < containerRect.top) {
            container.scrollTop -= containerRect.top - draggableRect.top;
        } else if (draggableRect.bottom > containerRect.bottom) {
            container.scrollTop += draggableRect.bottom - containerRect.bottom;
        }
    }

    function getDragAfterElement(container, y) {
        const draggableElements = [...container.children];

        return draggableElements.reduce((closest, child) => {
            const box = child.getBoundingClientRect();
            const offset = y - box.top - box.height / 2;
            if (offset < 0 && offset > closest.offset) {
                return {offset: offset, element: child};
            } else {
                return closest;
            }
        }, {offset: Number.NEGATIVE_INFINITY}).element;
    }

    async function deleteGroupForm(group) {
        document.body.appendChild(await ModalModule.render(await DeleteGroupForm.render(group)));
    }

    function fetchUserDataById(userId) {
        return ApiClient.fetchData(`/account/public/${userId}`)
            .then(result => {
                if (result.success) return result.data;
                NotificationService.notify(result.message || "Could not get user data", "error")
            })
    }

    return {
        render: render,
        updateState: updateState,
        removeElement: removeElement,
    };
})();

export default GroupModule;
