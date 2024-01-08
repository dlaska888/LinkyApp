const MobileNavigationHandler = (function () {
    function initMobileNavigation() {
        const navButtons = document.querySelectorAll(".btn-nav");
        const menuBtn = document.querySelector("#btn-mobile-menu");
        const nav = document.querySelector("#nav-mobile");

        toggleNavOnClick(navButtons, menuBtn, nav);

        // Collapse on click
        const collapseButtons = document.querySelectorAll(".btn-nav-collapse");
        collapseNavOnClick(collapseButtons, menuBtn, nav);
    }
    
    function toggleNavOnClick(navButtons, menuBtn, nav) {
        navButtons.forEach((btn) =>
            btn.addEventListener("click", () => {
                menuBtn.classList.toggle("open");
                nav.classList.toggle("expand");
            })
        );
    }

    function collapseNavOnClick(collapseButtons, menuBtn, nav) {
        collapseButtons.forEach((btn) =>
            btn.addEventListener("click", () => {
                menuBtn.classList.remove("open");
                nav.classList.remove("expand");
            })
        );
    }

    return {
        initMobileNavigation: initMobileNavigation,
    };
}());

export default MobileNavigationHandler;