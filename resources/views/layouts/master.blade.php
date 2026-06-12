<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MyGRED | @yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template/src/assets/img/mbi_logo2.png') }}"/>
    <link href="{{ asset('template/layouts/horizontal-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/layouts/horizontal-light-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('template/layouts/horizontal-light-menu/loader.js') }}"></script>
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- /Google Fonts -->
    <link href="{{ asset('template/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('template/src/plugins/src/waves/waves.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/src/plugins/src/prism/prism.css') }}">
    
    <link href="{{ asset('template/src/assets/css/utilities/utilities.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('template/src/plugins/src/waves/waves.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/src/plugins/src/prism/prism.css') }}">
    
    <link href="{{ asset('template/src/assets/css/utilities/utilities.css') }}" rel="stylesheet" type="text/css" />
    
    <link href="{{ asset('template/layouts/horizontal-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/layouts/horizontal-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />

    
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('template/src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/src/assets/css/light/components/list-group.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/src/assets/css/light/dashboard/analytics.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/src/assets/css/light/components/timeline.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/src/assets/css/dark/dashboard/analytics.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/src/assets/css/dark/components/timeline.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link href="{{ asset('template/src/assets/css/light/components/font-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/src/assets/css/dark/components/font-icons.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/src/assets/css/light/forms/switches.css') }}">

    {{-- datatable --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('template/src/plugins/src/table/datatable/datatables.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('template/src/plugins/css/light/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/src/plugins/css/dark/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/src/assets/css/light/forms/switches.css') }}">
    {{-- end datatable --}}
    {{-- modal --}}
    <link href="{{ asset('template/src/assets/css/light/components/carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css">
    
    
    <link href="{{ asset('template/src/assets/css/dark/components/carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/src/assets/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/src/assets/css/dark/components/tabs.css') }}" rel="stylesheet" type="text/css">
    {{-- end modal --}}
</head>
<body class=" layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader"></div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('layouts.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="tc-overlay"></div>
        <div class="psidebar-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        @include('layouts.menu')
        <!--  END TOPBAR  -->
        
        
        <!--  BEGIN SIDEBAR  -->
        @include('layouts.sidebar')
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">
                    <div class="d-flex justify-content-end mb-3">
                        {{ Breadcrumbs::render() }}
                    </div>
                    @yield('content')
                </div>

            </div>
            <!--  BEGIN FOOTER  -->
            @include('layouts.footer')
            <!--  END CONTENT AREA  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN PROFILE SIDEBAR  -->
    <div class="profile-sidebar">

        <div class="profile-scroll">

            <div class="profile-close mb-3">
                <span>
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                </span>
            </div>
    
            <div class="profile-top">
    
                <div class="profile-image profile-container mb-4 mx-auto">
                    <div class="profile-border"></div>
                    <img src="{{ asset('template/src/assets/img/mbi_logo2.png') }}" alt="Profile Image"  class="p-image">
                </div>
    
                <h4 class="profile-name mb-1">{{ Auth::user()->name }}</h4>
                <p class="profile-mail mb-0 text-dark:800 dark:text-dark:200">{{ Auth::user()->email }}</p>
    
            </div>
    
            <div class="profile-content pt-4 pb-4 mt-4 mb-4">
    
                <ul class="list-unstyled mb-0">
                    <li class="hover:bg-dark:50 dark:hover:bg-dark:600">
                        <a href="{{ route('dashboard') }}" class="text-dark:800 dark:text-dark:200 fw:500 d-flex align-items-center">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="me-2 icon icon-tabler icons-tabler-outline icon-tabler-smart-home"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 8.71l-5.333 -4.148a2.666 2.666 0 0 0 -3.274 0l-5.334 4.148a2.665 2.665 0 0 0 -1.029 2.105v7.2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-7.2c0 -.823 -.38 -1.6 -1.03 -2.105" /><path d="M16 15c-2.21 1.333 -5.792 1.333 -8 0" /></svg>
                            Home
                        </a>
                    </li>
                    <li class="hover:bg-dark:50 dark:hover:bg-dark:600">
                        <a href="javascript:void(0);" class="text-dark:800 dark:text-dark:200 fw:500 d-flex align-items-center">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="me-2 icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                            Profile
                        </a>
                    </li>
                    <li class="hover:bg-dark:50 dark:hover:bg-dark:600">
                        <a href="javascript:void(0);" class="text-dark:800 dark:text-dark:200 fw:500 d-flex align-items-center">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="me-2 icon icon-tabler icons-tabler-outline icon-tabler-settings"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                            Account Settings
                        </a>
                    </li>
                </ul>
                
            </div>

        </div>

        <div class="profile-fixed">

            <form method="POST" action="{{ route('logout') }}">
                @csrf
        
                <button type="submit"
                    class="btn bg-dark text-white dark:bg-danger dark:text-white w-100">
                    Logout
                </button>
        
            </form>
        
        </div>
        
    </div>
    <!--  END PROFILE SIDEBAR  -->

    <!--  BEGIN SEARCH MODAL  -->
    <!-- Modal -->
    @stack('modal')
    <div class="modal fade search-content-modal" id="searchDialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="search-modal d-flex border-bottom-width:1 border-bottom-dark:200 border-bottom-style:dashed     dark:border-bottom-width:1 dark:border-bottom-dark:500 dark:border-bottom-style:dashed">
                        <div class="search-modal-icon me-2">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                        </div>
                        <input type="text" id="searchInput" class="form-control border-none" placeholder="Search...">
                        <span class="text-dark:500 dark:text-dark:200">[esc]</span>
                        <div class="search-modal-close ms-2" data-bs-dismiss="modal">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-dark:500 dark:text-dark:200 icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                        </div>
                    </div>

                    <div class="modal-search-container mx-auto">
            
                        <div class="search-content">
            
                            <div class="row search-row-one">
            
                                <div class="col-md-6 mb-4">
                                    <div class="search-list-content">
                                        <h6 class="text-dark:300 mb-3">Popular Searches</h6>
                                        
                                        <ul class="search-list list-unstyled">
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./index.html" class=" d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
            
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Analytics</span>
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./index2.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chart-bar-popular"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 13a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M9 9a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M15 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M4 20h14" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Sales</span>
            
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./app-mailbox.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gmail" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z"></path>
                                                            <path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z"></path>
                                                            <path d="M16 4l-4 4l-4 -4"></path>
                                                            <path d="M4 6.5l8 7.5l8 -7.5"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Mailbox</span>
            
                                                </a>
                                                
                                            </li>
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./user-list.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-list-details"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13 5h8" /><path d="M13 9h5" /><path d="M13 15h8" /><path d="M13 19h5" /><path d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">User List</span>
            
                                                </a>
                                            </li>
            
                                        </ul>
            
                                    </div>
                                </div>
            
                                <div class="col-md-6 mb-4">
                                    <div class="search-list-content">
                                        <h6 class="text-dark:300 mb-3">Applications</h6>
                                        
                                        <ul class="search-list list-unstyled">
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./app-chat.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
            
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4"></path>
                                                            <line x1="12" y1="11" x2="12" y2="11.01"></line>
                                                            <line x1="8" y1="11" x2="8" y2="11.01"></line>
                                                            <line x1="16" y1="11" x2="16" y2="11.01"></line>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Chat</span>
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./app-kanban.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <line x1="4" y1="4" x2="10" y2="4"></line>
                                                            <line x1="14" y1="4" x2="20" y2="4"></line>
                                                            <rect x="4" y="8" width="6" height="12" rx="2"></rect>
                                                            <rect x="14" y="8" width="6" height="6" rx="2"></rect>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Kanban</span>
            
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./app-notes.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notes" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <rect x="5" y="3" width="14" height="18" rx="2"></rect>
                                                            <line x1="9" y1="7" x2="15" y2="7"></line>
                                                            <line x1="9" y1="11" x2="15" y2="11"></line>
                                                            <line x1="9" y1="15" x2="13" y2="15"></line>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Notes</span>
            
                                                </a>
                                                
                                            </li>
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./app-calendar.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                                            <line x1="16" y1="3" x2="16" y2="7"></line>
                                                            <line x1="8" y1="3" x2="8" y2="7"></line>
                                                            <line x1="4" y1="11" x2="20" y2="11"></line>
                                                            <line x1="11" y1="15" x2="12" y2="15"></line>
                                                            <line x1="12" y1="15" x2="12" y2="18"></line>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Calendar</span>
            
                                                </a>
                                            </li>
            
                                        </ul>
            
                                    </div>
                                </div>
            
                                <div class="col-md-6 mb-4">
                                    <div class="search-list-content">
                                        <h6 class="text-dark:300 mb-3">User Interface</h6>
                                        
                                        <ul class="search-list list-unstyled">
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./element-typography.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
            
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-typography"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20l3 0" /><path d="M14 20l7 0" /><path d="M6.9 15l6.9 0" /><path d="M10.2 6.3l5.8 13.7" /><path d="M5 20l6 -16l2 0l7 16" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Typhography</span>
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./table-basic.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-table"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" /><path d="M3 10h18" /><path d="M10 3v18" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Tables</span>
            
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./charts-apex.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chart-pie-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3v9h9" /><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Charts</span>
            
                                                </a>
                                                
                                            </li>
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./form-wizard.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-michelin-star-green"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12.432 17.949c.863 1.544 2.589 1.976 4.13 1.112c1.54 -.865 1.972 -2.594 1.048 -4.138c-.185 -.309 -.309 -.556 -.494 -.74c.247 .06 .555 .06 .925 .06c1.726 0 2.959 -1.234 2.959 -2.963c0 -1.73 -1.233 -2.965 -3.02 -2.965c-.37 0 -.617 0 -.925 .062c.185 -.185 .308 -.432 .493 -.74c.863 -1.545 .431 -3.274 -1.048 -4.138c-1.541 -.865 -3.205 -.433 -4.13 1.111c-.185 .309 -.308 .556 -.432 .803c-.123 -.247 -.246 -.494 -.431 -.803c-.802 -1.605 -2.528 -2.038 -4.007 -1.173c-1.541 .865 -1.973 2.594 -1.048 4.137c.185 .31 .308 .556 .493 .741c-.246 -.061 -.555 -.061 -.924 -.061c-1.788 0 -3.021 1.235 -3.021 2.964c0 1.729 1.233 2.964 3.02 2.964" /><path d="M4.073 21c4.286 -2.756 5.9 -5.254 7.927 -9" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Wizards</span>
            
                                                </a>
                                            </li>
            
                                        </ul>
            
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="search-list-content">
                                        <h6 class="text-dark:300 mb-3">Pages</h6>
                                        
                                        <ul class="search-list list-unstyled">
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./user-profile.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
            
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <circle cx="12" cy="7" r="4"></circle>
                                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">User Profile</span>
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./user-list.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-list-details"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M13 5h8"></path><path d="M13 9h5"></path><path d="M13 15h8"></path><path d="M13 19h5"></path><path d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path><path d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">User List</span>
            
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./app-ecommerce-product.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-basket-bolt"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 10l-2 -6" /><path d="M7 10l2 -6" /><path d="M13 20h-5.756a3 3 0 0 1 -2.965 -2.544l-1.255 -7.152a2 2 0 0 1 1.977 -2.304h13.999a2 2 0 0 1 1.977 2.304l-.358 2.04" /><path d="M10 14a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M19 16l-2 3h4l-2 3" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Product</span>
            
                                                </a>
                                                
                                            </li>
            
                                            <li class="d-flex search-list-item mb-3 ">
                                                <a href="./user-account.html" class="d-inline-block  text-dark:600 hover:text-primary:600   dark:text-dark:200 dark:hover:text-primary:300">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-settings-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Account Settings</span>
            
                                                </a>
                                            </li>
            
                                        </ul>
            
                                    </div>
                                </div>

                            </div>

                            <div class="row search-row-two">
            
                                <div class="col-md-12">
                                    <div class="searchable-list-content">

                                        <ul class="searchable-list list-unstyled">
            
                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./index.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
            
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Analytics</span>
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./index2.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chart-bar-popular"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 13a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M9 9a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M15 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M4 20h14" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Sales</span>
            
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./app-mailbox.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gmail" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z"></path>
                                                            <path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z"></path>
                                                            <path d="M16 4l-4 4l-4 -4"></path>
                                                            <path d="M4 6.5l8 7.5l8 -7.5"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Mailbox</span>
            
                                                </a>
                                                
                                            </li>
            
                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./user-list.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-list-details"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13 5h8" /><path d="M13 9h5" /><path d="M13 15h8" /><path d="M13 19h5" /><path d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">User List</span>
            
                                                </a>
                                            </li>

                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./app-chat.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
            
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4"></path>
                                                            <line x1="12" y1="11" x2="12" y2="11.01"></line>
                                                            <line x1="8" y1="11" x2="8" y2="11.01"></line>
                                                            <line x1="16" y1="11" x2="16" y2="11.01"></line>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Chat</span>
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./app-kanban.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <line x1="4" y1="4" x2="10" y2="4"></line>
                                                            <line x1="14" y1="4" x2="20" y2="4"></line>
                                                            <rect x="4" y="8" width="6" height="12" rx="2"></rect>
                                                            <rect x="14" y="8" width="6" height="6" rx="2"></rect>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Kanban</span>
            
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./app-notes.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notes" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <rect x="5" y="3" width="14" height="18" rx="2"></rect>
                                                            <line x1="9" y1="7" x2="15" y2="7"></line>
                                                            <line x1="9" y1="11" x2="15" y2="11"></line>
                                                            <line x1="9" y1="15" x2="13" y2="15"></line>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Notes</span>
            
                                                </a>
                                                
                                            </li>
            
                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./app-calendar.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                                            <line x1="16" y1="3" x2="16" y2="7"></line>
                                                            <line x1="8" y1="3" x2="8" y2="7"></line>
                                                            <line x1="4" y1="11" x2="20" y2="11"></line>
                                                            <line x1="11" y1="15" x2="12" y2="15"></line>
                                                            <line x1="12" y1="15" x2="12" y2="18"></line>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Calendar</span>
            
                                                </a>
                                            </li>


                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./element-typography.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
            
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-typography"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20l3 0" /><path d="M14 20l7 0" /><path d="M6.9 15l6.9 0" /><path d="M10.2 6.3l5.8 13.7" /><path d="M5 20l6 -16l2 0l7 16" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Typhography</span>
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./table-basic.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-table"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" /><path d="M3 10h18" /><path d="M10 3v18" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Tables</span>
            
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./charts-apex.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chart-pie-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3v9h9" /><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Charts</span>
            
                                                </a>
                                                
                                            </li>
            
                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./form-wizard.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-michelin-star-green"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12.432 17.949c.863 1.544 2.589 1.976 4.13 1.112c1.54 -.865 1.972 -2.594 1.048 -4.138c-.185 -.309 -.309 -.556 -.494 -.74c.247 .06 .555 .06 .925 .06c1.726 0 2.959 -1.234 2.959 -2.963c0 -1.73 -1.233 -2.965 -3.02 -2.965c-.37 0 -.617 0 -.925 .062c.185 -.185 .308 -.432 .493 -.74c.863 -1.545 .431 -3.274 -1.048 -4.138c-1.541 -.865 -3.205 -.433 -4.13 1.111c-.185 .309 -.308 .556 -.432 .803c-.123 -.247 -.246 -.494 -.431 -.803c-.802 -1.605 -2.528 -2.038 -4.007 -1.173c-1.541 .865 -1.973 2.594 -1.048 4.137c.185 .31 .308 .556 .493 .741c-.246 -.061 -.555 -.061 -.924 -.061c-1.788 0 -3.021 1.235 -3.021 2.964c0 1.729 1.233 2.964 3.02 2.964" /><path d="M4.073 21c4.286 -2.756 5.9 -5.254 7.927 -9" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Wizards</span>
            
                                                </a>
                                            </li>

                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./user-profile.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
            
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <circle cx="12" cy="7" r="4"></circle>
                                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">User Profile</span>
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./user-list.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-list-details"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M13 5h8"></path><path d="M13 9h5"></path><path d="M13 15h8"></path><path d="M13 19h5"></path><path d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path><path d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">User List</span>
            
                                                </a>
                                            </li>
            
                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="app-ecommerce-product.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-basket-bolt"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 10l-2 -6" /><path d="M7 10l2 -6" /><path d="M13 20h-5.756a3 3 0 0 1 -2.965 -2.544l-1.255 -7.152a2 2 0 0 1 1.977 -2.304h13.999a2 2 0 0 1 1.977 2.304l-.358 2.04" /><path d="M10 14a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M19 16l-2 3h4l-2 3" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Product</span>
            
                                                </a>
                                                
                                            </li>
            
                                            <li class="d-flex search-list-item pb-2 pt-2 ">
                                                <a href="./user-account.html" class="d-inline-block  text-dark:600 hover:text-primary:600 bg-primary:50   hover:bg-primary:100    dark:text-dark:100 dark:hover:text-primary:50 dark:bg-dark:700   dark:hover:bg-primary:600">
                                                    <span class="me-2 search-list-icon d-inline-block">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-settings-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                                                    </span>
                                                    <span class="fw:500 d-inline-block">Account Settings</span>
            
                                                </a>
                                            </li>
            
                                        </ul>
            
                                    </div>
                                </div>

                            </div>
                            
                        </div>

                    </div>

                
                </div>
            </div>
        </div>
    </div>
    <!--  END SEARCH MODAL  -->
    

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('template/src/plugins/src/global/vendors.min.js') }}"></script>
    <script src="{{ asset('template/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('template/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('template/src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ asset('template/src/plugins/src/floating-ui/core.js') }}"></script>
    <script src="{{ asset('template/src/plugins/src/floating-ui/dom.js') }}"></script>
    <script src="{{ asset('template/layouts/horizontal-light-menu/app.js') }}"></script>
    <script src="{{ asset('template/src/assets/js/theme-customizer.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('template/src/plugins/src/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template/src/assets/js/dashboard/analytics.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('template/src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('template/src/assets/js/datatable-config.js') }}"></script>
    <script src="{{ asset('template/src/plugins/src/font-icons/feather/feather.min.js') }}"></script>
    <script>
        feather.replace();
    </script>

  @stack('scripts')
</body>
</html>