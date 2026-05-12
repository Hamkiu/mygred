<div class="header-container">
    <header class="header navbar container-xxl">

        <ul class="header-item theme-brand text-center">
            <li class="theme-logo">
                <a href="https://designreset.com/cork-admin/">
                    <!-- <img src="../src/assets/img/logo2.svg" class="navbar-logo" alt="logo"> -->
                    <img src="{{ asset('template/src/assets/img/mbi_logo2.png') }}" class="navbar-logo navbar-logo-light" alt="logo-light">
                    <img src="{{ asset('template/src/assets/img/mbi_logo2.png') }}" class="navbar-logo navbar-logo-dark" alt="logo-dark">
                </a>
            </li>
            <li class="theme-text">
                <a href="https://designreset.com/cork-admin/" class="nav-link"> MyGred</a>
            </li>
            <li class="align-self-center ms-md-0 ms-2 me-md-3 me-2 d-xl-none d-block">
                <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg> -->
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
                </a>
            </li>
        </ul>

        <ul class="header-item ms-md-auto action-area">

            <li class="h-item theme-toggle-item">
                <a href="javascript:void(0);" class="h-link theme-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moon dark-mode" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun-high light-mode" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14.828 14.828a4 4 0 1 0 -5.656 -5.656a4 4 0 0 0 5.656 5.656z"></path>
                        <path d="M6.343 17.657l-1.414 1.414"></path>
                        <path d="M6.343 6.343l-1.414 -1.414"></path>
                        <path d="M17.657 6.343l1.414 -1.414"></path>
                        <path d="M17.657 17.657l1.414 1.414"></path>
                        <path d="M4 12h-2"></path>
                        <path d="M12 4v-2"></path>
                        <path d="M20 12h2"></path>
                        <path d="M12 20v2"></path>
                    </svg>
                </a>
            </li>

            <li class="h-item dropdown user-profile-dropdown">
                <a href="javascript:void(0);" class="h-link dropdown-toggle user" id="userProfileDropdown">
                    <div class="avatar-container">
                        <div class="avatar avatar-sm avatar-indicators avatar-online">
                            <img alt="avatar" src="{{ asset('template/src/assets/img/mbi_logo2.png') }}" class="rounded-circle">
                        </div>
                    </div>
                </a>
            </li>

        </ul>

    </header>
</div>