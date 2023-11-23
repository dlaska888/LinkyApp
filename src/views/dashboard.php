<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LinkyApp - Main</title>
   <link rel="stylesheet" href="/public/css/global.css">
   <link rel="stylesheet" href="/public/css/dashboard.css">
   <script src="/public/js/dashboard.js" defer></script>
</head>

<body class="flex">
   <nav id="nav-mobile" class="flex-column hide-desktop hide-on-scroll collapse">
      <div class="nav-container flex-column">
         <div class="nav-menu flex">
            <div id="btn-mobile-menu" class="btn-nav btn-hamburger">
               <div class="bar"></div>
            </div>
            <div class="search-container flex flex-center btn-nav-collapse">
               <input type="text" name="search" class="input" placeholder="Search">
            </div>
            <div id="btn-mobile-search" class="flex flex-center btn-nav-collapse">
               <svg width="40" height="40" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M62 56H58.84L57.72 54.92C61.64 50.36 64 44.44 64 38C64 23.64 52.36 12 38 12C23.64 12 12 23.64 12 38C12 52.36 23.64 64 38 64C44.44 64 50.36 61.64 54.92 57.72L56 58.84V62L76 81.96L81.96 76L62 56ZM38 56C28.04 56 20 47.96 20 38C20 28.04 28.04 20 38 20C47.96 20 56 28.04 56 38C56 47.96 47.96 56 38 56Z"
                     fill="white" />
               </svg>
            </div>
         </div>
         <div id="nav-content" class="nav-content flex-column flex-center">
            <img class="profile-photo" src="/public/assets/svg/account.svg" alt="Your profile photo">
            <div class="profile-info text-secondary text-shadow text-center">
               <h1>Silvio Suresh</h1>
               <p>sureshsilvio@gmail.com</p>
            </div>
            <div class="line-horizontal-secondary"></div>
            <a id="btn-mobile-settings" href="#" class="page-settings btn-primary btn-nav btn-page" type="button"
               title="Settings">
               <span class="btn-primary-top">Settings</span>
            </a>
            <a id="btn-mobile-logout" href="login" class="btn-logout btn-primary btn-nav" type="button" title="Log out">
               <span class="btn-primary-top">Log out</span>
            </a>
         </div>
         <div id="nav-footer" class="footer-logo flex-column flex-center">
            <a href="index" title="LinkyApp" class="logo-text flex">
               <img src="/public/assets/svg/logo1.svg" alt="LinkyApp">
               <p>LinkyApp</p>
            </a>
         </div>
      </div>
   </nav>
   <aside id="sidebar-container" class="hide-mobile">
      <nav class="flex-column">
         <ul class="flex-column">
            <li>
               <a class="page-home btn-page btn-hover active" href="#" title="Home">
                  <svg width="30" height="30" viewBox="0 0 46 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M18 39.5001V27.0001H28V39.5001C28 40.8751 29.125 42.0001 30.5 42.0001H38C39.375 42.0001 40.5 40.8751 40.5 39.5001V22H44.75C45.9 22 46.45 20.5751 45.575 19.8251L24.675 1.00005C23.725 0.150049 22.275 0.150049 21.325 1.00005L0.425001 19.8251C-0.424999 20.5751 0.100001 22 1.25 22H5.5V39.5001C5.5 40.8751 6.625 42.0001 8 42.0001H15.5C16.875 42.0001 18 40.8751 18 39.5001Z"
                        fill="white" />
                  </svg>
               </a>
            </li>
            <li>
               <a class="page-shared btn-page btn-hover" href="#" title="Shared">
                  <svg width="30" height="30" viewBox="0 0 46 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M38 35.2C36.1 35.2 34.4 35.95 33.1 37.125L15.275 26.75C15.4 26.175 15.5 25.6 15.5 25C15.5 24.4 15.4 23.825 15.275 23.25L32.9 12.975C34.25 14.225 36.025 15 38 15C42.15 15 45.5 11.65 45.5 7.5C45.5 3.35 42.15 0 38 0C33.85 0 30.5 3.35 30.5 7.5C30.5 8.1 30.6 8.675 30.725 9.25L13.1 19.525C11.75 18.275 9.975 17.5 8 17.5C3.85 17.5 0.5 20.85 0.5 25C0.5 29.15 3.85 32.5 8 32.5C9.975 32.5 11.75 31.725 13.1 30.475L30.9 40.875C30.775 41.4 30.7 41.95 30.7 42.5C30.7 46.525 33.975 49.8 38 49.8C42.025 49.8 45.3 46.525 45.3 42.5C45.3 38.475 42.025 35.2 38 35.2Z"
                        fill="white" />
                  </svg>
               </a>
            </li>
            <li>
               <a class="page-settings btn-page btn-hover" href="#" title="Settings">
                  <svg width="30" height="30" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M43.575 27.45C43.675 26.65 43.75 25.85 43.75 25C43.75 24.15 43.675 23.35 43.575 22.55L48.85 18.425C49.325 18.05 49.45 17.375 49.15 16.825L44.15 8.175C43.85 7.625 43.175 7.425 42.625 7.625L36.4 10.125C35.1 9.125 33.7 8.3 32.175 7.675L31.225 1.05C31.15 0.45 30.625 0 30 0H20C19.375 0 18.85 0.45 18.775 1.05L17.825 7.675C16.3 8.3 14.9 9.15 13.6 10.125L7.375 7.625C6.8 7.4 6.15 7.625 5.85 8.175L0.850003 16.825C0.525003 17.375 0.675003 18.05 1.15 18.425L6.425 22.55C6.325 23.35 6.25 24.175 6.25 25C6.25 25.825 6.325 26.65 6.425 27.45L1.15 31.575C0.675003 31.95 0.550003 32.625 0.850003 33.175L5.85 41.825C6.15 42.375 6.825 42.575 7.375 42.375L13.6 39.875C14.9 40.875 16.3 41.7 17.825 42.325L18.775 48.95C18.85 49.55 19.375 50 20 50H30C30.625 50 31.15 49.55 31.225 48.95L32.175 42.325C33.7 41.7 35.1 40.85 36.4 39.875L42.625 42.375C43.2 42.6 43.85 42.375 44.15 41.825L49.15 33.175C49.45 32.625 49.325 31.95 48.85 31.575L43.575 27.45ZM25 33.75C20.175 33.75 16.25 29.825 16.25 25C16.25 20.175 20.175 16.25 25 16.25C29.825 16.25 33.75 20.175 33.75 25C33.75 29.825 29.825 33.75 25 33.75Z"
                        fill="white" />
                  </svg>
               </a>
            </li>
            <li>
               <a class="btn-logout btn-hover" href="login" title="Log out">
                  <img src="/public/assets/svg/logout.svg" alt="Log out">
               </a>
            </li>
         </ul>
         <a href="index" title="LinkyApp">
            <img src="/public/assets/svg/logo1.svg" alt="LinkyApp">
         </a>
      </nav>
   </aside>
   <main>
      <section id="page-home" class="page-links flex-column">
         <div class="search-container flex flex-center hide-mobile">
            <input type="text" name="search" class="input" placeholder="Search">
            <div id="btn-search" class="btn-menu flex flex-center">
               <svg width="40" height="40" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M62 56H58.84L57.72 54.92C61.64 50.36 64 44.44 64 38C64 23.64 52.36 12 38 12C23.64 12 12 23.64 12 38C12 52.36 23.64 64 38 64C44.44 64 50.36 61.64 54.92 57.72L56 58.84V62L76 81.96L81.96 76L62 56ZM38 56C28.04 56 20 47.96 20 38C20 28.04 28.04 20 38 20C47.96 20 56 28.04 56 38C56 47.96 47.96 56 38 56Z"
                     fill="#00BEB3" />
               </svg>
            </div>
            <div id="btn-add" class="btn-menu flex flex-center">
               <svg width="40" height="40" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M4.16669 25.0001C4.16669 13.4942 13.4941 4.16675 25 4.16675C36.506 4.16675 45.8334 13.4942 45.8334 25.0001C45.8334 36.506 36.506 45.8334 25 45.8334C13.4941 45.8334 4.16669 36.506 4.16669 25.0001Z"
                     fill="white" class="fill-grey" />
                  <path
                     d="M25.2083 4.375C13.7083 4.375 4.375 13.7083 4.375 25.2083C4.375 36.7083 13.7083 46.0417 25.2083 46.0417C36.7083 46.0417 46.0417 36.7083 46.0417 25.2083C46.0417 13.7083 36.7083 4.375 25.2083 4.375ZM33.5417 27.2917H27.2917V33.5417C27.2917 34.6875 26.3542 35.625 25.2083 35.625C24.0625 35.625 23.125 34.6875 23.125 33.5417V27.2917H16.875C15.7292 27.2917 14.7917 26.3542 14.7917 25.2083C14.7917 24.0625 15.7292 23.125 16.875 23.125H23.125V16.875C23.125 15.7292 24.0625 14.7917 25.2083 14.7917C26.3542 14.7917 27.2917 15.7292 27.2917 16.875V23.125H33.5417C34.6875 23.125 35.625 24.0625 35.625 25.2083C35.625 26.3542 34.6875 27.2917 33.5417 27.2917Z"
                     fill="#00BEB3" />
               </svg>
            </div>
         </div>
         <div class="groups-container">
            <div class="group flex-column">
               <div class="group-menu flex">
                  <div class="group-name flex flex-center">
                     <div class="btn-group-collapse">
                        <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.06488 1.13091L10.0089 8.07498L16.953 1.13091C17.651 0.432925 18.7785 0.432925 19.4765 1.13091C20.1745 1.8289 20.1745 2.95641 19.4765 3.6544L11.2617 11.8692C10.5638 12.5672 9.43624 12.5672 8.73826 11.8692L0.52349 3.6544C-0.174497 2.95641 -0.174497 1.8289 0.52349 1.13091C1.22148 0.450822 2.36689 0.432925 3.06488 1.13091Z"
                              fill="#A9A9A9" />
                        </svg>
                     </div>
                     <p class="text-tertiary text-ellipsis">No Group</p>
                  </div>
                  <div class="group-buttons flex flex-center">
                     <svg width="33" height="33" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M28.75 19.375H19.375V28.75C19.375 29.7812 18.5312 30.625 17.5 30.625C16.4688 30.625 15.625 29.7812 15.625 28.75V19.375H6.25C5.21875 19.375 4.375 18.5312 4.375 17.5C4.375 16.4688 5.21875 15.625 6.25 15.625H15.625V6.25C15.625 5.21875 16.4688 4.375 17.5 4.375C18.5312 4.375 19.375 5.21875 19.375 6.25V15.625H28.75C29.7812 15.625 30.625 16.4688 30.625 17.5C30.625 18.5312 29.7812 19.375 28.75 19.375Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="25" height="25" viewBox="0 0 46 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M38 35.2C36.1 35.2 34.4 35.95 33.1 37.125L15.275 26.75C15.4 26.175 15.5 25.6 15.5 25C15.5 24.4 15.4 23.825 15.275 23.25L32.9 12.975C34.25 14.225 36.025 15 38 15C42.15 15 45.5 11.65 45.5 7.5C45.5 3.35 42.15 0 38 0C33.85 0 30.5 3.35 30.5 7.5C30.5 8.1 30.6 8.675 30.725 9.25L13.1 19.525C11.75 18.275 9.975 17.5 8 17.5C3.85 17.5 0.5 20.85 0.5 25C0.5 29.15 3.85 32.5 8 32.5C9.975 32.5 11.75 31.725 13.1 30.475L30.9 40.875C30.775 41.4 30.7 41.95 30.7 42.5C30.7 46.525 33.975 49.8 38 49.8C42.025 49.8 45.3 46.525 45.3 42.5C45.3 38.475 42.025 35.2 38 35.2Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                           fill="#A9A9A9" />
                     </svg>
                  </div>
               </div>
               <div class="group-links flex-column">
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <div class="group flex-column">
               <div class="group-menu flex">
                  <div class="group-name flex flex-center">
                     <div class="btn-group-collapse">
                        <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.06488 1.13091L10.0089 8.07498L16.953 1.13091C17.651 0.432925 18.7785 0.432925 19.4765 1.13091C20.1745 1.8289 20.1745 2.95641 19.4765 3.6544L11.2617 11.8692C10.5638 12.5672 9.43624 12.5672 8.73826 11.8692L0.52349 3.6544C-0.174497 2.95641 -0.174497 1.8289 0.52349 1.13091C1.22148 0.450822 2.36689 0.432925 3.06488 1.13091Z"
                              fill="#A9A9A9" />
                        </svg>
                     </div>

                     <p class="text-tertiary text-ellipsis">No Group</p>
                  </div>
                  <div class="group-buttons flex flex-center">
                     <svg width="33" height="33" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M28.75 19.375H19.375V28.75C19.375 29.7812 18.5312 30.625 17.5 30.625C16.4688 30.625 15.625 29.7812 15.625 28.75V19.375H6.25C5.21875 19.375 4.375 18.5312 4.375 17.5C4.375 16.4688 5.21875 15.625 6.25 15.625H15.625V6.25C15.625 5.21875 16.4688 4.375 17.5 4.375C18.5312 4.375 19.375 5.21875 19.375 6.25V15.625H28.75C29.7812 15.625 30.625 16.4688 30.625 17.5C30.625 18.5312 29.7812 19.375 28.75 19.375Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="25" height="25" viewBox="0 0 46 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M38 35.2C36.1 35.2 34.4 35.95 33.1 37.125L15.275 26.75C15.4 26.175 15.5 25.6 15.5 25C15.5 24.4 15.4 23.825 15.275 23.25L32.9 12.975C34.25 14.225 36.025 15 38 15C42.15 15 45.5 11.65 45.5 7.5C45.5 3.35 42.15 0 38 0C33.85 0 30.5 3.35 30.5 7.5C30.5 8.1 30.6 8.675 30.725 9.25L13.1 19.525C11.75 18.275 9.975 17.5 8 17.5C3.85 17.5 0.5 20.85 0.5 25C0.5 29.15 3.85 32.5 8 32.5C9.975 32.5 11.75 31.725 13.1 30.475L30.9 40.875C30.775 41.4 30.7 41.95 30.7 42.5C30.7 46.525 33.975 49.8 38 49.8C42.025 49.8 45.3 46.525 45.3 42.5C45.3 38.475 42.025 35.2 38 35.2Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                           fill="#A9A9A9" />
                     </svg>
                  </div>
               </div>
               <div class="group-links flex-column">
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <div class="group flex-column">
               <div class="group-menu flex">
                  <div class="group-name flex flex-center">
                     <div class="btn-group-collapse">
                        <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.06488 1.13091L10.0089 8.07498L16.953 1.13091C17.651 0.432925 18.7785 0.432925 19.4765 1.13091C20.1745 1.8289 20.1745 2.95641 19.4765 3.6544L11.2617 11.8692C10.5638 12.5672 9.43624 12.5672 8.73826 11.8692L0.52349 3.6544C-0.174497 2.95641 -0.174497 1.8289 0.52349 1.13091C1.22148 0.450822 2.36689 0.432925 3.06488 1.13091Z"
                              fill="#A9A9A9" />
                        </svg>
                     </div>

                     <p class="text-tertiary text-ellipsis">No Group</p>
                  </div>
                  <div class="group-buttons flex flex-center">
                     <svg width="33" height="33" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M28.75 19.375H19.375V28.75C19.375 29.7812 18.5312 30.625 17.5 30.625C16.4688 30.625 15.625 29.7812 15.625 28.75V19.375H6.25C5.21875 19.375 4.375 18.5312 4.375 17.5C4.375 16.4688 5.21875 15.625 6.25 15.625H15.625V6.25C15.625 5.21875 16.4688 4.375 17.5 4.375C18.5312 4.375 19.375 5.21875 19.375 6.25V15.625H28.75C29.7812 15.625 30.625 16.4688 30.625 17.5C30.625 18.5312 29.7812 19.375 28.75 19.375Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="25" height="25" viewBox="0 0 46 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M38 35.2C36.1 35.2 34.4 35.95 33.1 37.125L15.275 26.75C15.4 26.175 15.5 25.6 15.5 25C15.5 24.4 15.4 23.825 15.275 23.25L32.9 12.975C34.25 14.225 36.025 15 38 15C42.15 15 45.5 11.65 45.5 7.5C45.5 3.35 42.15 0 38 0C33.85 0 30.5 3.35 30.5 7.5C30.5 8.1 30.6 8.675 30.725 9.25L13.1 19.525C11.75 18.275 9.975 17.5 8 17.5C3.85 17.5 0.5 20.85 0.5 25C0.5 29.15 3.85 32.5 8 32.5C9.975 32.5 11.75 31.725 13.1 30.475L30.9 40.875C30.775 41.4 30.7 41.95 30.7 42.5C30.7 46.525 33.975 49.8 38 49.8C42.025 49.8 45.3 46.525 45.3 42.5C45.3 38.475 42.025 35.2 38 35.2Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                           fill="#A9A9A9" />
                     </svg>
                  </div>
               </div>
               <div class="group-links flex-column">
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <div class="group flex-column">
               <div class="group-menu flex">
                  <div class="group-name flex flex-center">
                     <div class="btn-group-collapse">
                        <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.06488 1.13091L10.0089 8.07498L16.953 1.13091C17.651 0.432925 18.7785 0.432925 19.4765 1.13091C20.1745 1.8289 20.1745 2.95641 19.4765 3.6544L11.2617 11.8692C10.5638 12.5672 9.43624 12.5672 8.73826 11.8692L0.52349 3.6544C-0.174497 2.95641 -0.174497 1.8289 0.52349 1.13091C1.22148 0.450822 2.36689 0.432925 3.06488 1.13091Z"
                              fill="#A9A9A9" />
                        </svg>
                     </div>

                     <p class="text-tertiary text-ellipsis">No Group</p>
                  </div>
                  <div class="group-buttons flex flex-center">
                     <svg width="33" height="33" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M28.75 19.375H19.375V28.75C19.375 29.7812 18.5312 30.625 17.5 30.625C16.4688 30.625 15.625 29.7812 15.625 28.75V19.375H6.25C5.21875 19.375 4.375 18.5312 4.375 17.5C4.375 16.4688 5.21875 15.625 6.25 15.625H15.625V6.25C15.625 5.21875 16.4688 4.375 17.5 4.375C18.5312 4.375 19.375 5.21875 19.375 6.25V15.625H28.75C29.7812 15.625 30.625 16.4688 30.625 17.5C30.625 18.5312 29.7812 19.375 28.75 19.375Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="25" height="25" viewBox="0 0 46 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M38 35.2C36.1 35.2 34.4 35.95 33.1 37.125L15.275 26.75C15.4 26.175 15.5 25.6 15.5 25C15.5 24.4 15.4 23.825 15.275 23.25L32.9 12.975C34.25 14.225 36.025 15 38 15C42.15 15 45.5 11.65 45.5 7.5C45.5 3.35 42.15 0 38 0C33.85 0 30.5 3.35 30.5 7.5C30.5 8.1 30.6 8.675 30.725 9.25L13.1 19.525C11.75 18.275 9.975 17.5 8 17.5C3.85 17.5 0.5 20.85 0.5 25C0.5 29.15 3.85 32.5 8 32.5C9.975 32.5 11.75 31.725 13.1 30.475L30.9 40.875C30.775 41.4 30.7 41.95 30.7 42.5C30.7 46.525 33.975 49.8 38 49.8C42.025 49.8 45.3 46.525 45.3 42.5C45.3 38.475 42.025 35.2 38 35.2Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                           fill="#A9A9A9" />
                     </svg>
                  </div>
               </div>
               <div class="group-links flex-column">
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <div class="group flex-column">
               <div class="group-menu flex">
                  <div class="group-name flex flex-center">
                     <div class="btn-group-collapse">
                        <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.06488 1.13091L10.0089 8.07498L16.953 1.13091C17.651 0.432925 18.7785 0.432925 19.4765 1.13091C20.1745 1.8289 20.1745 2.95641 19.4765 3.6544L11.2617 11.8692C10.5638 12.5672 9.43624 12.5672 8.73826 11.8692L0.52349 3.6544C-0.174497 2.95641 -0.174497 1.8289 0.52349 1.13091C1.22148 0.450822 2.36689 0.432925 3.06488 1.13091Z"
                              fill="#A9A9A9" />
                        </svg>
                     </div>

                     <p class="text-tertiary text-ellipsis">No Group</p>
                  </div>
                  <div class="group-buttons flex flex-center">
                     <svg width="33" height="33" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M28.75 19.375H19.375V28.75C19.375 29.7812 18.5312 30.625 17.5 30.625C16.4688 30.625 15.625 29.7812 15.625 28.75V19.375H6.25C5.21875 19.375 4.375 18.5312 4.375 17.5C4.375 16.4688 5.21875 15.625 6.25 15.625H15.625V6.25C15.625 5.21875 16.4688 4.375 17.5 4.375C18.5312 4.375 19.375 5.21875 19.375 6.25V15.625H28.75C29.7812 15.625 30.625 16.4688 30.625 17.5C30.625 18.5312 29.7812 19.375 28.75 19.375Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="25" height="25" viewBox="0 0 46 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M38 35.2C36.1 35.2 34.4 35.95 33.1 37.125L15.275 26.75C15.4 26.175 15.5 25.6 15.5 25C15.5 24.4 15.4 23.825 15.275 23.25L32.9 12.975C34.25 14.225 36.025 15 38 15C42.15 15 45.5 11.65 45.5 7.5C45.5 3.35 42.15 0 38 0C33.85 0 30.5 3.35 30.5 7.5C30.5 8.1 30.6 8.675 30.725 9.25L13.1 19.525C11.75 18.275 9.975 17.5 8 17.5C3.85 17.5 0.5 20.85 0.5 25C0.5 29.15 3.85 32.5 8 32.5C9.975 32.5 11.75 31.725 13.1 30.475L30.9 40.875C30.775 41.4 30.7 41.95 30.7 42.5C30.7 46.525 33.975 49.8 38 49.8C42.025 49.8 45.3 46.525 45.3 42.5C45.3 38.475 42.025 35.2 38 35.2Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                           fill="#A9A9A9" />
                     </svg>
                  </div>
               </div>
               <div class="group-links flex-column">
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section id="page-shared" class="page-links flex-column hidden">
         <div class="search-container flex flex-center hide-mobile">
            <input type="text" name="search" class="input" placeholder="Search">
            <div id="btn-search" class="btn-menu flex flex-center">
               <svg width="40" height="40" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M62 56H58.84L57.72 54.92C61.64 50.36 64 44.44 64 38C64 23.64 52.36 12 38 12C23.64 12 12 23.64 12 38C12 52.36 23.64 64 38 64C44.44 64 50.36 61.64 54.92 57.72L56 58.84V62L76 81.96L81.96 76L62 56ZM38 56C28.04 56 20 47.96 20 38C20 28.04 28.04 20 38 20C47.96 20 56 28.04 56 38C56 47.96 47.96 56 38 56Z"
                     fill="#00BEB3" />
               </svg>
            </div>
            <div id="btn-add" class="btn-menu flex flex-center">
               <svg width="40" height="40" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M4.16669 25.0001C4.16669 13.4942 13.4941 4.16675 25 4.16675C36.506 4.16675 45.8334 13.4942 45.8334 25.0001C45.8334 36.506 36.506 45.8334 25 45.8334C13.4941 45.8334 4.16669 36.506 4.16669 25.0001Z"
                     fill="white" class="fill-inside" />
                  <path
                     d="M25.2083 4.375C13.7083 4.375 4.375 13.7083 4.375 25.2083C4.375 36.7083 13.7083 46.0417 25.2083 46.0417C36.7083 46.0417 46.0417 36.7083 46.0417 25.2083C46.0417 13.7083 36.7083 4.375 25.2083 4.375ZM33.5417 27.2917H27.2917V33.5417C27.2917 34.6875 26.3542 35.625 25.2083 35.625C24.0625 35.625 23.125 34.6875 23.125 33.5417V27.2917H16.875C15.7292 27.2917 14.7917 26.3542 14.7917 25.2083C14.7917 24.0625 15.7292 23.125 16.875 23.125H23.125V16.875C23.125 15.7292 24.0625 14.7917 25.2083 14.7917C26.3542 14.7917 27.2917 15.7292 27.2917 16.875V23.125H33.5417C34.6875 23.125 35.625 24.0625 35.625 25.2083C35.625 26.3542 34.6875 27.2917 33.5417 27.2917Z"
                     fill="#00BEB3" />
               </svg>
            </div>
         </div>
         <div class="groups-container">
            <div class="group flex-column">
               <div class="group-menu flex">
                  <div class="group-name flex flex-center">
                     <div class="btn-group-collapse">
                        <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.06488 1.13091L10.0089 8.07498L16.953 1.13091C17.651 0.432925 18.7785 0.432925 19.4765 1.13091C20.1745 1.8289 20.1745 2.95641 19.4765 3.6544L11.2617 11.8692C10.5638 12.5672 9.43624 12.5672 8.73826 11.8692L0.52349 3.6544C-0.174497 2.95641 -0.174497 1.8289 0.52349 1.13091C1.22148 0.450822 2.36689 0.432925 3.06488 1.13091Z"
                              fill="#A9A9A9" />
                        </svg>
                     </div>
                     <p class="text-tertiary text-ellipsis">No Group</p>
                  </div>
                  <div class="group-buttons flex flex-center">
                     <svg width="33" height="33" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M28.75 19.375H19.375V28.75C19.375 29.7812 18.5312 30.625 17.5 30.625C16.4688 30.625 15.625 29.7812 15.625 28.75V19.375H6.25C5.21875 19.375 4.375 18.5312 4.375 17.5C4.375 16.4688 5.21875 15.625 6.25 15.625H15.625V6.25C15.625 5.21875 16.4688 4.375 17.5 4.375C18.5312 4.375 19.375 5.21875 19.375 6.25V15.625H28.75C29.7812 15.625 30.625 16.4688 30.625 17.5C30.625 18.5312 29.7812 19.375 28.75 19.375Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="25" height="25" viewBox="0 0 46 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M38 35.2C36.1 35.2 34.4 35.95 33.1 37.125L15.275 26.75C15.4 26.175 15.5 25.6 15.5 25C15.5 24.4 15.4 23.825 15.275 23.25L32.9 12.975C34.25 14.225 36.025 15 38 15C42.15 15 45.5 11.65 45.5 7.5C45.5 3.35 42.15 0 38 0C33.85 0 30.5 3.35 30.5 7.5C30.5 8.1 30.6 8.675 30.725 9.25L13.1 19.525C11.75 18.275 9.975 17.5 8 17.5C3.85 17.5 0.5 20.85 0.5 25C0.5 29.15 3.85 32.5 8 32.5C9.975 32.5 11.75 31.725 13.1 30.475L30.9 40.875C30.775 41.4 30.7 41.95 30.7 42.5C30.7 46.525 33.975 49.8 38 49.8C42.025 49.8 45.3 46.525 45.3 42.5C45.3 38.475 42.025 35.2 38 35.2Z"
                           fill="#A9A9A9" />
                     </svg>
                  </div>
               </div>
               <div class="group-links flex-column">
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <div class="group flex-column">
               <div class="group-menu flex">
                  <div class="group-name flex flex-center">
                     <div class="btn-group-collapse">
                        <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.06488 1.13091L10.0089 8.07498L16.953 1.13091C17.651 0.432925 18.7785 0.432925 19.4765 1.13091C20.1745 1.8289 20.1745 2.95641 19.4765 3.6544L11.2617 11.8692C10.5638 12.5672 9.43624 12.5672 8.73826 11.8692L0.52349 3.6544C-0.174497 2.95641 -0.174497 1.8289 0.52349 1.13091C1.22148 0.450822 2.36689 0.432925 3.06488 1.13091Z"
                              fill="#A9A9A9" />
                        </svg>
                     </div>

                     <p class="text-tertiary text-ellipsis">No Group</p>
                  </div>
                  <div class="group-buttons flex flex-center">
                     <svg width="33" height="33" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M28.75 19.375H19.375V28.75C19.375 29.7812 18.5312 30.625 17.5 30.625C16.4688 30.625 15.625 29.7812 15.625 28.75V19.375H6.25C5.21875 19.375 4.375 18.5312 4.375 17.5C4.375 16.4688 5.21875 15.625 6.25 15.625H15.625V6.25C15.625 5.21875 16.4688 4.375 17.5 4.375C18.5312 4.375 19.375 5.21875 19.375 6.25V15.625H28.75C29.7812 15.625 30.625 16.4688 30.625 17.5C30.625 18.5312 29.7812 19.375 28.75 19.375Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="25" height="25" viewBox="0 0 46 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M38 35.2C36.1 35.2 34.4 35.95 33.1 37.125L15.275 26.75C15.4 26.175 15.5 25.6 15.5 25C15.5 24.4 15.4 23.825 15.275 23.25L32.9 12.975C34.25 14.225 36.025 15 38 15C42.15 15 45.5 11.65 45.5 7.5C45.5 3.35 42.15 0 38 0C33.85 0 30.5 3.35 30.5 7.5C30.5 8.1 30.6 8.675 30.725 9.25L13.1 19.525C11.75 18.275 9.975 17.5 8 17.5C3.85 17.5 0.5 20.85 0.5 25C0.5 29.15 3.85 32.5 8 32.5C9.975 32.5 11.75 31.725 13.1 30.475L30.9 40.875C30.775 41.4 30.7 41.95 30.7 42.5C30.7 46.525 33.975 49.8 38 49.8C42.025 49.8 45.3 46.525 45.3 42.5C45.3 38.475 42.025 35.2 38 35.2Z"
                           fill="#A9A9A9" />
                     </svg>

                  </div>
               </div>
               <div class="group-links flex-column">
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <div class="group flex-column">
               <div class="group-menu flex">
                  <div class="group-name flex flex-center">
                     <div class="btn-group-collapse">
                        <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.06488 1.13091L10.0089 8.07498L16.953 1.13091C17.651 0.432925 18.7785 0.432925 19.4765 1.13091C20.1745 1.8289 20.1745 2.95641 19.4765 3.6544L11.2617 11.8692C10.5638 12.5672 9.43624 12.5672 8.73826 11.8692L0.52349 3.6544C-0.174497 2.95641 -0.174497 1.8289 0.52349 1.13091C1.22148 0.450822 2.36689 0.432925 3.06488 1.13091Z"
                              fill="#A9A9A9" />
                        </svg>
                     </div>

                     <p class="text-tertiary text-ellipsis">No Group</p>
                  </div>
                  <div class="group-buttons flex flex-center">
                     <svg width="33" height="33" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M28.75 19.375H19.375V28.75C19.375 29.7812 18.5312 30.625 17.5 30.625C16.4688 30.625 15.625 29.7812 15.625 28.75V19.375H6.25C5.21875 19.375 4.375 18.5312 4.375 17.5C4.375 16.4688 5.21875 15.625 6.25 15.625H15.625V6.25C15.625 5.21875 16.4688 4.375 17.5 4.375C18.5312 4.375 19.375 5.21875 19.375 6.25V15.625H28.75C29.7812 15.625 30.625 16.4688 30.625 17.5C30.625 18.5312 29.7812 19.375 28.75 19.375Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="25" height="25" viewBox="0 0 46 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M38 35.2C36.1 35.2 34.4 35.95 33.1 37.125L15.275 26.75C15.4 26.175 15.5 25.6 15.5 25C15.5 24.4 15.4 23.825 15.275 23.25L32.9 12.975C34.25 14.225 36.025 15 38 15C42.15 15 45.5 11.65 45.5 7.5C45.5 3.35 42.15 0 38 0C33.85 0 30.5 3.35 30.5 7.5C30.5 8.1 30.6 8.675 30.725 9.25L13.1 19.525C11.75 18.275 9.975 17.5 8 17.5C3.85 17.5 0.5 20.85 0.5 25C0.5 29.15 3.85 32.5 8 32.5C9.975 32.5 11.75 31.725 13.1 30.475L30.9 40.875C30.775 41.4 30.7 41.95 30.7 42.5C30.7 46.525 33.975 49.8 38 49.8C42.025 49.8 45.3 46.525 45.3 42.5C45.3 38.475 42.025 35.2 38 35.2Z"
                           fill="#A9A9A9" />
                     </svg>

                  </div>
               </div>
               <div class="group-links flex-column">
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <div class="group flex-column">
               <div class="group-menu flex">
                  <div class="group-name flex flex-center">
                     <div class="btn-group-collapse">
                        <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.06488 1.13091L10.0089 8.07498L16.953 1.13091C17.651 0.432925 18.7785 0.432925 19.4765 1.13091C20.1745 1.8289 20.1745 2.95641 19.4765 3.6544L11.2617 11.8692C10.5638 12.5672 9.43624 12.5672 8.73826 11.8692L0.52349 3.6544C-0.174497 2.95641 -0.174497 1.8289 0.52349 1.13091C1.22148 0.450822 2.36689 0.432925 3.06488 1.13091Z"
                              fill="#A9A9A9" />
                        </svg>
                     </div>

                     <p class="text-tertiary text-ellipsis">No Group</p>
                  </div>
                  <div class="group-buttons flex flex-center">
                     <svg width="33" height="33" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M28.75 19.375H19.375V28.75C19.375 29.7812 18.5312 30.625 17.5 30.625C16.4688 30.625 15.625 29.7812 15.625 28.75V19.375H6.25C5.21875 19.375 4.375 18.5312 4.375 17.5C4.375 16.4688 5.21875 15.625 6.25 15.625H15.625V6.25C15.625 5.21875 16.4688 4.375 17.5 4.375C18.5312 4.375 19.375 5.21875 19.375 6.25V15.625H28.75C29.7812 15.625 30.625 16.4688 30.625 17.5C30.625 18.5312 29.7812 19.375 28.75 19.375Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="25" height="25" viewBox="0 0 46 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M38 35.2C36.1 35.2 34.4 35.95 33.1 37.125L15.275 26.75C15.4 26.175 15.5 25.6 15.5 25C15.5 24.4 15.4 23.825 15.275 23.25L32.9 12.975C34.25 14.225 36.025 15 38 15C42.15 15 45.5 11.65 45.5 7.5C45.5 3.35 42.15 0 38 0C33.85 0 30.5 3.35 30.5 7.5C30.5 8.1 30.6 8.675 30.725 9.25L13.1 19.525C11.75 18.275 9.975 17.5 8 17.5C3.85 17.5 0.5 20.85 0.5 25C0.5 29.15 3.85 32.5 8 32.5C9.975 32.5 11.75 31.725 13.1 30.475L30.9 40.875C30.775 41.4 30.7 41.95 30.7 42.5C30.7 46.525 33.975 49.8 38 49.8C42.025 49.8 45.3 46.525 45.3 42.5C45.3 38.475 42.025 35.2 38 35.2Z"
                           fill="#A9A9A9" />
                     </svg>

                  </div>
               </div>
               <div class="group-links flex-column">
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <div class="group flex-column">
               <div class="group-menu flex">
                  <div class="group-name flex flex-center">
                     <div class="btn-group-collapse">
                        <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.06488 1.13091L10.0089 8.07498L16.953 1.13091C17.651 0.432925 18.7785 0.432925 19.4765 1.13091C20.1745 1.8289 20.1745 2.95641 19.4765 3.6544L11.2617 11.8692C10.5638 12.5672 9.43624 12.5672 8.73826 11.8692L0.52349 3.6544C-0.174497 2.95641 -0.174497 1.8289 0.52349 1.13091C1.22148 0.450822 2.36689 0.432925 3.06488 1.13091Z"
                              fill="#A9A9A9" />
                        </svg>
                     </div>

                     <p class="text-tertiary text-ellipsis">No Group</p>
                  </div>
                  <div class="group-buttons flex flex-center">
                     <svg width="33" height="33" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M28.75 19.375H19.375V28.75C19.375 29.7812 18.5312 30.625 17.5 30.625C16.4688 30.625 15.625 29.7812 15.625 28.75V19.375H6.25C5.21875 19.375 4.375 18.5312 4.375 17.5C4.375 16.4688 5.21875 15.625 6.25 15.625H15.625V6.25C15.625 5.21875 16.4688 4.375 17.5 4.375C18.5312 4.375 19.375 5.21875 19.375 6.25V15.625H28.75C29.7812 15.625 30.625 16.4688 30.625 17.5C30.625 18.5312 29.7812 19.375 28.75 19.375Z"
                           fill="#A9A9A9" />
                     </svg>
                     <svg width="25" height="25" viewBox="0 0 46 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M38 35.2C36.1 35.2 34.4 35.95 33.1 37.125L15.275 26.75C15.4 26.175 15.5 25.6 15.5 25C15.5 24.4 15.4 23.825 15.275 23.25L32.9 12.975C34.25 14.225 36.025 15 38 15C42.15 15 45.5 11.65 45.5 7.5C45.5 3.35 42.15 0 38 0C33.85 0 30.5 3.35 30.5 7.5C30.5 8.1 30.6 8.675 30.725 9.25L13.1 19.525C11.75 18.275 9.975 17.5 8 17.5C3.85 17.5 0.5 20.85 0.5 25C0.5 29.15 3.85 32.5 8 32.5C9.975 32.5 11.75 31.725 13.1 30.475L30.9 40.875C30.775 41.4 30.7 41.95 30.7 42.5C30.7 46.525 33.975 49.8 38 49.8C42.025 49.8 45.3 46.525 45.3 42.5C45.3 38.475 42.025 35.2 38 35.2Z"
                           fill="#A9A9A9" />
                     </svg>

                  </div>
               </div>
               <div class="group-links flex-column">
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
                  <div class="link-container flex">
                     <div class="link-info flex flex-center">
                        <img src="https://www.youtube.com/favicon.ico" alt="Icon" width="32" height="32">
                        <div class="link-text flex-column">
                           <p class="text-ellipsis">HTMLTutorialforBeginners - YouTube</p>
                           <p class=" text-ellipsis">youtube.com</p>
                        </div>
                     </div>
                     <div class="link-buttons flex">
                        <svg width="30" height="30" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M3.75 22.3249V26.125C3.75 26.475 4.025 26.75 4.375 26.75H8.175C8.3375 26.75 8.5 26.6875 8.6125 26.5625L22.2625 12.925L17.575 8.23745L3.9375 21.875C3.8125 22 3.75 22.15 3.75 22.3249ZM25.8875 9.29995C26.375 8.81245 26.375 8.02495 25.8875 7.53745L22.9625 4.61245C22.475 4.12495 21.6875 4.12495 21.2 4.61245L18.9125 6.89995L23.6 11.5875L25.8875 9.29995Z"
                              fill="#00BEB3" />
                        </svg>
                        <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M8.75002 27.7083C8.75002 29.3125 10.0625 30.625 11.6667 30.625H23.3334C24.9375 30.625 26.25 29.3125 26.25 27.7083V13.125C26.25 11.5208 24.9375 10.2083 23.3334 10.2083H11.6667C10.0625 10.2083 8.75002 11.5208 8.75002 13.125V27.7083ZM26.25 5.83333H22.6042L21.5688 4.79792C21.3063 4.53542 20.9271 4.375 20.5479 4.375H14.4521C14.0729 4.375 13.6938 4.53542 13.4313 4.79792L12.3959 5.83333H8.75002C7.94794 5.83333 7.29169 6.48958 7.29169 7.29167C7.29169 8.09375 7.94794 8.75 8.75002 8.75H26.25C27.0521 8.75 27.7084 8.09375 27.7084 7.29167C27.7084 6.48958 27.0521 5.83333 26.25 5.83333Z"
                              fill="#00BEB3" />
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section id="page-settings" class="flex flex-center hidden">
         <div class="profile-container flex-column flex-center hide-mobile">
            <div class="profile-photo">
               <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M25 0C11.2 0 0 11.2 0 25C0 38.8 11.2 50 25 50C38.8 50 50 38.8 50 25C50 11.2 38.8 0 25 0ZM25 7.5C29.15 7.5 32.5 10.85 32.5 15C32.5 19.15 29.15 22.5 25 22.5C20.85 22.5 17.5 19.15 17.5 15C17.5 10.85 20.85 7.5 25 7.5ZM25 43C18.75 43 13.225 39.8 10 34.95C10.075 29.975 20 27.25 25 27.25C29.975 27.25 39.925 29.975 40 34.95C36.775 39.8 31.25 43 25 43Z"
                     fill="white" />
               </svg>
            </div>
            <div class="profile-info text-primary text-center">
               <h1>Silvio Suresh</h1>
               <p>sureshsilvio@gmail.com</p>
            </div>
         </div>
         <div class="line-vertical-primary hide-mobile"></div>
         <div class="settings-container flex-column">
            <div id="btn-change-username" class="btn-primary" title="Change Username">
               <span class="btn-primary-top">Change Username</span>
            </div>
            <div id="btn-change-password" class="btn-primary" title="Change Password">
               <span class="btn-primary-top">Change Password</span>
            </div>
            <div id="btn-resend-verification" class="btn-primary" title="Resend Verification">
               <span class="btn-primary-top">Resend Verification Email</span>
            </div>
            <div id="btn-enable-2fa" class="btn-primary" title="Enable 2FA">
               <span class="btn-primary-top">Enable 2FA</span>
            </div>
            <div id="btn-delete-account" class="btn-primary" title="Delete Account">
               <span class="btn-primary-top">Delete Account</span>
            </div>
         </div>
      </section>
   </main>

   <footer class="flex bg-secondary hide-desktop hide-on-scroll">
      <div class="footer-container flex">
         <div id="btn-mobile-home" class="page-home btn-container btn-footer btn-page active">
            <svg width="30" height="30" viewBox="0 0 46 42" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M18 39.5001V27.0001H28V39.5001C28 40.8751 29.125 42.0001 30.5 42.0001H38C39.375 42.0001 40.5 40.8751 40.5 39.5001V22H44.75C45.9 22 46.45 20.5751 45.575 19.8251L24.675 1.00005C23.725 0.150049 22.275 0.150049 21.325 1.00005L0.425001 19.8251C-0.424999 20.5751 0.100001 22 1.25 22H5.5V39.5001C5.5 40.8751 6.625 42.0001 8 42.0001H15.5C16.875 42.0001 18 40.8751 18 39.5001Z" />
            </svg>
         </div>
         <div id="btn-mobile-shared" class="page-shared btn-container btn-footer btn-page">
            <svg width="30" height="30" viewBox="0 0 46 50" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M38 35.2C36.1 35.2 34.4 35.95 33.1 37.125L15.275 26.75C15.4 26.175 15.5 25.6 15.5 25C15.5 24.4 15.4 23.825 15.275 23.25L32.9 12.975C34.25 14.225 36.025 15 38 15C42.15 15 45.5 11.65 45.5 7.5C45.5 3.35 42.15 0 38 0C33.85 0 30.5 3.35 30.5 7.5C30.5 8.1 30.6 8.675 30.725 9.25L13.1 19.525C11.75 18.275 9.975 17.5 8 17.5C3.85 17.5 0.5 20.85 0.5 25C0.5 29.15 3.85 32.5 8 32.5C9.975 32.5 11.75 31.725 13.1 30.475L30.9 40.875C30.775 41.4 30.7 41.95 30.7 42.5C30.7 46.525 33.975 49.8 38 49.8C42.025 49.8 45.3 46.525 45.3 42.5C45.3 38.475 42.025 35.2 38 35.2Z" />
            </svg>
         </div>
      </div>

   </footer>
</body>

</html>