@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <div class="row layout-top-spacing">

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-stat-card-one">
                <div class="widget-content d-flex align-items-center justify-content-between">

                    <div class="s_o-weekly-sales w-100">
                        <div class="s_o-weekly-sales-top d-flex justify-content-end align-items-center">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="me-1 text-success:900 dark:text-success:400 icon icon-tabler icons-tabler-outline icon-tabler-trending-up"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                            <h5 class="mb-0 fw-semibold text-success:900 dark:text-success:400">+2.6%</h5>
                        </div>

                        <div class="c_l-icon mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success:800 dark:text-success:400 icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M17 17h-11v-14h-2"></path><path d="M6 5l14 1l-1 7h-13"></path></svg>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <div class="s_o-content">
                                <h6 class="mb-2  text-success:900 dark:text-dark:200 fw-semibold">Weekly sales</h6>
                                <h2 class="mb-0  text-success:1000 dark:text-dark:300">855k</h2>
                            </div>
                            <div id="weekly_sales_stat"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-stat-card-one">
                <div class="widget-content d-flex align-items-center justify-content-between">

                    <div class="s_o-new-users w-100">
                        <div class="s_o-new-users-top d-flex justify-content-end align-items-center">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="me-1 text-secondary:900 dark:text-secondary:400 icon icon-tabler icons-tabler-outline icon-tabler-trending-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7l6 6l4 -4l8 8" /><path d="M21 10l0 7l-7 0" /></svg>
                            <h5 class="mb-0 fw-semibold text-secondary:900 dark:text-secondary:400">-0.1%</h5>
                        </div>

                        <div class="c_l-icon mb-4">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-secondary:800 dark:text-secondary:400 icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <div class="s_o-content">
                                <h6 class="mb-2  text-secondary:900 dark:text-dark:200 fw-semibold">New users</h6>
                                <h2 class="mb-0  text-secondary:1000 dark:text-dark:300">1.35m</h2>
                            </div>
                            <div id="new_users_stat"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-stat-card-one">
                <div class="widget-content d-flex align-items-center justify-content-between">

                    <div class="s_o-purchase-orders w-100">
                        <div class="s_o-purchase-orders-top d-flex justify-content-end align-items-center">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="me-1 text-warning:900 dark:text-warning:400 icon icon-tabler icons-tabler-outline icon-tabler-trending-up"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                            <h5 class="mb-0 fw-semibold text-warning:900 dark:text-warning:400">+2.8%</h5>
                        </div>

                        <div class="c_l-icon mb-4">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-warning:800 dark:text-warning:400 icon icon-tabler icons-tabler-outline icon-tabler-receipt"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" /></svg>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <div class="s_o-content">
                                <h6 class="mb-2  text-warning:900 dark:text-dark:200 fw-semibold">Purchase orders</h6>
                                <h2 class="mb-0  text-warning:1000 dark:text-dark:300">1.72m</h2>
                            </div>
                            <div id="purchase_orders_stat"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-stat-card-one">
                <div class="widget-content d-flex align-items-center justify-content-between">

                    <div class="s_o-messages w-100">
                        <div class="s_o-messages-top d-flex justify-content-end align-items-center">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="me-1 text-danger:900 dark:text-danger:400 icon icon-tabler icons-tabler-outline icon-tabler-trending-up"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                            <h5 class="mb-0 fw-semibold text-danger:900 dark:text-danger:400">+3.6%</h5>
                        </div>

                        <div class="c_l-icon mb-4">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-danger:800 dark:text-danger:400 icon icon-tabler icons-tabler-outline icon-tabler-message"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <div class="s_o-content">
                                <h6 class="mb-2  text-danger:900 dark:text-dark:200 fw-semibold">Messages</h6>
                                <h2 class="mb-0  text-danger:1000 dark:text-dark:300">234</h2>
                            </div>
                            <div id="messages_stat"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-yearly-sales">

                <div class="widget-heading d-flex justify-content-between">
                    <div class="header-content">
                        <h5 class="text-dark:800 dark:text-white mb-1">Website visits</h5>
                        <p class="text-dark:800 dark:text-dark:200">(+35%) than last year</p>
                    </div>

                    <div class="task-action">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="renvenue" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                            </a>
                            <div class="dropdown-menu left" aria-labelledby="renvenue" style="will-change: transform;">
                                <a class="dropdown-item" href="javascript:void(0);">2026</a>
                                <a class="dropdown-item" href="javascript:void(0);">2025</a>
                                <a class="dropdown-item" href="javascript:void(0);">2023</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget-content">
                    
                    <div id="website_visits"></div>
                </div>

            </div>
        </div>

        <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <div class="widget-heading d-flex justify-content-between">
                    <div class="header-content">
                        <h5 class="text-dark:800 dark:text-white mb-1">Current visits</h5>
                        <p class="text-dark:800 dark:text-dark:200">(+25%) in Mens</p>
                    </div>
                </div>

                <div class="widget-content">
                    <div id="current_visits"></div>

                    <div class="apex_chart_label-current-visits  mt-4 pt-3">
                        
                        <div class="d-flex justify-content-around">

                            <div class="acl-current-visits-content mb-0">

                                <div class="acl-current-visit-content-series d-flex align-items-center">
                                    <span class="acl-current-visit-marker bg-primary:400 dark:bg-primary:400"></span>
                                    <p class="mb-0"><span class="acl-current-visit-value text-dark:600 dark:text-dark:200">America</span></p>
                                </div>
                                
                            </div>

                            <div class="acl-current-visits-content mb-0">

                                <div class="acl-current-visit-content-series d-flex align-items-center">
                                    <span class="acl-current-visit-marker bg-success:400 dark:bg-success:400"></span>
                                    <p class="mb-0"><span class="acl-current-visit-value text-dark:600 dark:text-dark:200">Asia</span></p>
                                </div>

                            </div>

                            <div class="acl-current-visits-content mb-0">

                                <div class="acl-current-visit-content-series d-flex align-items-center">
                                    <span class="acl-current-visit-marker bg-warning:400 dark:bg-warning:400"></span>
                                    <p class="mb-0"><span class="acl-current-visit-value text-dark:600 dark:text-dark:200">Europe</span></p>
                                </div>

                            </div>

                            <div class="acl-current-visits-content mb-0">

                                <div class="acl-current-visit-content-series d-flex align-items-center">
                                    <span class="acl-current-visit-marker bg-danger:400 dark:bg-danger:400"></span>
                                    <p class="mb-0"><span class="acl-current-visit-value text-dark:600 dark:text-dark:200">Africa</span></p>
                                </div>

                            </div>

                        </div>
                        

                    </div>
                    
                </div>

            </div>
        </div>

        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-list-one">

                <div class="widget-heading">
                    <h5 class="text-dark:800 dark:text-white mb-1">Sales by Country</h5>
                    <p class="text-dark:800 dark:text-dark:200">Monthly Sales Overview</p>
                </div>

                <div class="widget-content">

                    <div class="c_l-sales-by-country mt-4">
                        
                        <div class="c_l-sales-by-country-item d-flex justify-content-between mb-4">
                            <div class="d-flex">
                                <div class="c_l-img me-2">
                                    <img src="../src/assets/img/1x1/us.svg" class="flag-width" alt="flag">
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-0">$9,781k</h4>
                                    <p class="mb-0">United States</p>
                                </div>
                            </div>
                            <div class="align-self-center">
                                <span class="text-success:500 dark:text-success:400">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="me-0 icon icon-tabler icons-tabler-outline icon-tabler-chevron-up"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 15l6 -6l6 6" /></svg>
                                    +35.8%
                                </span>
                            </div>
                        </div>

                        <div class="c_l-sales-by-country-item d-flex justify-content-between mb-4">
                            <div class="d-flex">
                                <div class="c_l-img me-2">
                                    <img src="../src/assets/img/1x1/de.svg" class="flag-width" alt="flag">
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-0">$3,555k</h4>
                                    <p class="mb-0">Germany</p>
                                </div>
                            </div>
                            <div class="align-self-center">
                                <span class="text-danger:500 dark:text-danger:400">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
                                    -15.6%
                                </span>
                            </div>
                        </div>

                        <div class="c_l-sales-by-country-item d-flex justify-content-between mb-4">
                            <div class="d-flex">
                                <div class="c_l-img me-2">
                                    <img src="../src/assets/img/1x1/fr.svg" class="flag-width" alt="flag">
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-0">$795k</h4>
                                    <p class="mb-0">France</p>
                                </div>
                            </div>
                            <div class="align-self-center">
                                <span class="text-success:500 dark:text-success:400">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="me-0 icon icon-tabler icons-tabler-outline icon-tabler-chevron-up"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 15l6 -6l6 6" /></svg>
                                    +22%
                                </span>
                            </div>
                        </div>


                        <div class="c_l-sales-by-country-item d-flex justify-content-between mb-4">
                            <div class="d-flex">
                                <div class="c_l-img me-2">
                                    <img src="../src/assets/img/1x1/ca.svg" class="flag-width" alt="flag">
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-0">565k</h4>
                                    <p class="mb-0">Canada</p>
                                </div>
                            </div>
                            <div class="align-self-center">
                                <span class="text-success:500 dark:text-success:400">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="me-0 icon icon-tabler icons-tabler-outline icon-tabler-chevron-up"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 15l6 -6l6 6" /></svg>
                                    +45.7%
                                </span>
                            </div>
                        </div>


                        <div class="c_l-sales-by-country-item d-flex justify-content-between mb-4">
                            <div class="d-flex">
                                <div class="c_l-img me-2">
                                    <img src="../src/assets/img/1x1/sv.svg" class="flag-width" alt="flag">
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-0">$10,965</h4>
                                    <p class="mb-0">El Salvador</p>
                                </div>
                            </div>
                            <div class="align-self-center">
                                <span class="text-danger:500 dark:text-danger:400">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
                                    -22.4%
                                </span>
                            </div>
                        </div>

                        <div class="c_l-sales-by-country-item d-flex justify-content-between mb-4">
                            <div class="d-flex">
                                <div class="c_l-img me-2">
                                    <img src="../src/assets/img/1x1/in.svg" class="flag-width" alt="flag">
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-0">$3,559</h4>
                                    <p class="mb-0">India</p>
                                </div>
                            </div>
                            <div class="align-self-center">
                                <span class="text-danger:500 dark:text-danger:400">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
                                    -15.9%
                                </span>
                            </div>
                        </div>

                        <div class="c_l-sales-by-country-item d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="c_l-img me-2">
                                    <img src="{{ asset('template/src/assets/img/1x1/br.svg') }}" class="flag-width" alt="flag">
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-0">$955</h4>
                                    <p class="mb-0">Brazil</p>
                                </div>
                            </div>
                            <div class="align-self-center">
                                <span class="text-success:500 dark:text-success:400">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="me-0 icon icon-tabler icons-tabler-outline icon-tabler-chevron-up"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 15l6 -6l6 6" /></svg>
                                    +44.7%
                                </span>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>

            </div>
        </div>

        <div class="col-xl-4 col-lg-7 col-md-7 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-list-two">

                <div class="widget-heading">
                    <h5 class="text-dark:800 dark:text-white mb-1">Total Earning</h5>
                </div>
                
                <div class="widget-content">
                    <div class="c_l-total-earning-stats">
                        <p class="text-dark:800 dark:text-dark:200 fw-semibold mb-0">87%
                            <span class="text-success:600 fw-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-0 icon icon-tabler icons-tabler-outline icon-tabler-chevron-up"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 15l6 -6l6 6"></path></svg>
                                25.8%
                            </span>
                        </p>
                    </div>
                    <div id="total_earning"></div>

                    <div class="c_l-total-earning-list justify-content-around">
                        
                        <div class="d-flex justify-content-between c_l-total-earning-item mb-3">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-primary:500">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-primary:100 icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-up"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M16 9l-4 -4" /><path d="M8 9l4 -4" /></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-0">Total Revenue</h4>
                                    <p class="mb-0">Client Payment</p>
                                </div>
                            </div>
                            <div class="align-self-center">
                                <span class="text-success:500 dark:text-success:100 fw-medium">+$50,397</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between c_l-total-earning-item">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-primary:100 dark:bg-dark:600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary:500 dark:text-primary:300 icon icon-tabler icons-tabler-outline icon-tabler-grain"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4.5 9.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path><path d="M9.5 4.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path><path d="M9.5 14.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path><path d="M4.5 19.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path><path d="M14.5 9.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path><path d="M19.5 4.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path><path d="M14.5 19.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path><path d="M19.5 14.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-0">Total Returns</h4>
                                    <p class="mb-0">Refund</p>
                                </div>
                            </div>
                            <div class="align-self-center">
                                <span class="text-danger:500 dark:text-danger:100 fw-medium">+$2,570</span>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>

            </div>
        </div>

        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-card-list-one">

                <div class="widget-heading">
                    <h5 class="text-dark:800 dark:text-white mb-1">Monthly Campaign State</h5>
                    <p class="text-dark:800 dark:text-dark:200">7.86k Social Visiters</p>
                </div>

                <div class="widget-content">

                    <div class="c_l-monthly-camp-state-list mt-4 pt-2">
                        
                        <div class="d-flex justify-content-between c_l-monthly-camp-state-item mb-4">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-warning:100 dark:bg-warning:600">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-warning:500 dark:text-warning:100 icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-1">Emails</h4>
                                    <p class="mb-0">19,156</p>
                                </div>
                            </div>
                            <span class="align-self-center fw-medium text-success:500 dark:text-success:100">0.6%</span>
                        </div>
                        
                        <div class="d-flex justify-content-between c_l-monthly-camp-state-item mb-4">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-primary:100 dark:bg-primary:600">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-primary:500 dark:text-primary:100 icon icon-tabler icons-tabler-outline icon-tabler-link"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 15l6 -6" /><path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" /><path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" /></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-1">Opened</h4>
                                    <p class="mb-0">12,601</p>
                                </div>
                            </div>
                            <span class="align-self-center fw-medium text-success:400 dark:text-success:300">2.5%</span>
                        </div>

                        <div class="d-flex justify-content-between c_l-monthly-camp-state-item mb-4">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-success:100 dark:bg-success:600">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-success:500 dark:text-success:100 icon icon-tabler icons-tabler-outline icon-tabler-click"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12l3 0" /><path d="M12 3l0 3" /><path d="M7.8 7.8l-2.2 -2.2" /><path d="M16.2 7.8l2.2 -2.2" /><path d="M7.8 16.2l-2.2 2.2" /><path d="M12 12l9 3l-4 2l-2 4l-3 -9" /></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-1">Clicked</h4>
                                    <p class="mb-0">1,579</p>
                                </div>
                            </div>
                            <span class="align-self-center fw-medium text-danger:500 dark:text-danger:100">1.5%</span>
                        </div>

                        <div class="d-flex justify-content-between c_l-monthly-camp-state-item mb-4">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-secondary:100 dark:bg-secondary:600">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-secondary:500 dark:text-secondary:100 icon icon-tabler icons-tabler-outline icon-tabler-user-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M16 19h6" /><path d="M19 16v6" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4" /></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-1">Subscribe</h4>
                                    <p class="mb-0">556</p>
                                </div>
                            </div>
                            <span class="align-self-center fw-medium text-success:600 dark:text-success:400">9.2%</span>
                        </div>
                        
                        <div class="d-flex justify-content-between c_l-monthly-camp-state-item mb-4">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-dark:100 dark:bg-dark:600">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-dark:500 dark:text-dark:100 icon icon-tabler icons-tabler-outline icon-tabler-script"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 20h-11a3 3 0 0 1 0 -6h11a3 3 0 0 0 0 6h1a3 3 0 0 0 3 -3v-11a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v8" /></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-1">Complaints</h4>
                                    <p class="mb-0">30</p>
                                </div>
                            </div>
                            <span class="align-self-center fw-medium text-danger:600 dark:text-danger:400">1.9%</span>
                        </div>

                        <div class="d-flex justify-content-between c_l-monthly-camp-state-item">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-danger:100 dark:bg-danger:600">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-danger:500 dark:text-danger:100 icon icon-tabler icons-tabler-outline icon-tabler-user-minus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4c.348 0 .686 .045 1.009 .128" /><path d="M16 19h6" /></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-1">Unsubscribe</h4>
                                    <p class="mb-0">120</p>
                                </div>
                            </div>
                            <span class="align-self-center fw-medium text-danger:600 dark:text-danger:400">1.1%</span>
                        </div>
                        
                    </div>

                </div>

            </div>
        </div>

        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-card-list-one">

                <div class="widget-heading">
                    <h5 class="text-dark:800 dark:text-white mb-1">Source Visits</h5>
                    <p class="text-dark:800 dark:text-dark:200">38.4k Visitors</p>
                </div>

                <div class="widget-content">

                    <div class="c_l-source-visits-list mt-4 pt-2">
                        
                        <div class="d-flex justify-content-between c_l-source-visits-item mb-4">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-primary:100 dark:bg-primary:600">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-primary:500 dark:text-primary:100 icon icon-tabler icons-tabler-outline icon-tabler-cloud-computing"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.657 16c-2.572 0 -4.657 -2.007 -4.657 -4.483c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.913 0 3.464 1.56 3.464 3.486c0 1.927 -1.551 3.487 -3.465 3.487h-11.878" /><path d="M12 16v5" /><path d="M16 16v4a1 1 0 0 0 1 1h4" /><path d="M8 16v4a1 1 0 0 1 -1 1h-4" /></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-1">Social Network</h4>
                                    <p class="mb-0">40.5k</p>
                                </div>
                            </div>
                            <span class="align-self-center fw-medium text-success:400 dark:text-success:300">2.5%</span>
                        </div>

                        <div class="d-flex justify-content-between c_l-source-visits-item mb-4">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-success:100 dark:bg-success:600">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-success:500 dark:text-success:100 icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-1">Email Newsletter</h4>
                                    <p class="mb-0">789</p>
                                </div>
                            </div>
                            <span class="align-self-center fw-medium text-danger:500 dark:text-danger:100">1.5%</span>
                        </div>

                        <div class="d-flex justify-content-between c_l-source-visits-item mb-4">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-warning:100 dark:bg-warning:600">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-warning:500 dark:text-warning:100 icon icon-tabler icons-tabler-outline icon-tabler-direction-sign"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3.32 12.774l7.906 7.905c.427 .428 1.12 .428 1.548 0l7.905 -7.905a1.095 1.095 0 0 0 0 -1.548l-7.905 -7.905a1.095 1.095 0 0 0 -1.548 0l-7.905 7.905a1.095 1.095 0 0 0 0 1.548z" /><path d="M8 12h7.5" /><path d="M12 8.5l3.5 3.5l-3.5 3.5" /></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-1">Direct Source</h4>
                                    <p class="mb-0">2.1k</p>
                                </div>
                            </div>
                            <span class="align-self-center fw-medium text-success:500 dark:text-success:100">0.6%</span>
                        </div>

                        <div class="d-flex justify-content-between c_l-source-visits-item mb-4">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-secondary:100 dark:bg-secondary:600">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-secondary:500 dark:text-secondary:100 icon icon-tabler icons-tabler-outline icon-tabler-external-link"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" /><path d="M11 13l9 -9" /><path d="M15 4h5v5" /></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-1">Referrals</h4>
                                    <p class="mb-0">223</p>
                                </div>
                            </div>
                            <span class="align-self-center fw-medium text-success:600 dark:text-success:400">9.2%</span>
                        </div>

                        <div class="d-flex justify-content-between c_l-source-visits-item mb-4">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-danger:100 dark:bg-danger:600">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-danger:500 dark:text-danger:100 icon icon-tabler icons-tabler-outline icon-tabler-carambola"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17.286 21.09q -1.69 .001 -5.288 -2.615q -3.596 2.617 -5.288 2.616q -2.726 0 -.495 -6.8q -9.389 -6.775 2.135 -6.775h.076q 1.785 -5.516 3.574 -5.516q 1.785 0 3.574 5.516h.076q 11.525 0 2.133 6.774q 2.23 6.802 -.497 6.8" /></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-1">Other</h4>
                                    <p class="mb-0">14.5k</p>
                                </div>
                            </div>
                            <span class="align-self-center fw-medium text-danger:600 dark:text-danger:400">1.1%</span>
                        </div>

                        <div class="d-flex justify-content-between c_l-source-visits-item">
                            <div class="d-flex">
                                <div class="c_l-icon me-2 bg-dark:100 dark:bg-dark:600">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-dark:500 dark:text-dark:100 icon icon-tabler icons-tabler-outline icon-tabler-badge-ad"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M14 9v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" /><path d="M7 15v-4.5a1.5 1.5 0 0 1 3 0v4.5" /><path d="M7 13h3" /></svg>
                                </div>
                                <div class="align-self-center">
                                    <h4 class="mb-1">ADVT</h4>
                                    <p class="mb-0">2.23k</p>
                                </div>
                            </div>
                            <span class="align-self-center fw-medium text-danger:600 dark:text-danger:400">1.9%</span>
                        </div>
                        
                    </div>
                    
                </div>

            </div>
        </div>
        
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-stats-progress-one">

                <div class="widget-heading mb-2 pb-1">
                    <h5 class="text-dark:800 dark:text-white mb-1">Project List</h5>
                    <p class="text-dark:800 dark:text-dark:200">What Impacts Product Performance?</p>
                </div>

                <div class="widget-content">
                    
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Project</th>
                                    <th scope="col">Leader</th>
                                    <th scope="col" class="text-center">Team</th>
                                    <th scope="col" class="text-left">Progress</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <span class="avatar-title rounded-circle bg-info:100 text-info:500 dark:bg-info:500 dark:text-info:100">AG</span>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 dark:text-dark:200">Website SEO</h6>
                                                <span>10 May 2026</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Shaun Park</p>
                                        <span class="text-success">Management</span>
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="avatar--group ms-2 me-0">
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-12.png" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-2.png" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-14.png" class="rounded-circle" />
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="progress br-30 bg-dark:100 dark:bg-dark:500">
                                                    <div class="progress-bar bg-primary:600 dark:bg-primary:600" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <p class="mb-0">73%</p>
                                        </div>
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <span class="avatar-icon rounded-circle bg-success:100 dark:bg-success:500"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-success dark:text-white icon icon-tabler icons-tabler-outline icon-tabler-world"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M3.6 9h16.8" /><path d="M3.6 15h16.8" /><path d="M11.5 3a17 17 0 0 0 0 18" /><path d="M12.5 3a17 17 0 0 1 0 18" /></svg></span>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 dark:text-dark:200">Social Banners</h6>
                                                <span>03 Jan 2026</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Alma Clarke</p>
                                        <span class="text-secondary">Programmer</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="avatar--group ms-2 me-0">
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-7.png" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-34.png" class="rounded-circle" />
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="progress br-30 bg-dark:100 dark:bg-dark:500">
                                                    <div class="progress-bar bg-success:600 dark:bg-success:600" role="progressbar" style="width: 96%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <p class="mb-0">96%</p>
                                        </div>
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <span class="avatar-title rounded-circle bg-secondary:100 text-secondary:500  dark:bg-secondary:500 dark:text-white">LD</span>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 dark:text-dark:200">Logo Designs</h6>
                                                <span>12 Aug 2026</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Vincent Carpenter</p>
                                        <span class="text-danger">Management</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="avatar--group ms-2 me-0">
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-38.png" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-18.png" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm translateY-axis">
                                                <span class="avatar-title rounded-circle bg-primary:500 text-white">+2</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="progress br-30 bg-dark:100 dark:bg-dark:500">
                                                    <div class="progress-bar bg-info:600 dark:bg-info:600" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <p class="mb-0">48%</p>
                                        </div>
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <span class="avatar-icon rounded-circle bg-danger:100 dark:bg-danger:500"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-danger dark:text-white icon icon-tabler icons-tabler-outline icon-tabler-brand-sketch"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3.262 10.878l8 8.789c.4 .44 1.091 .44 1.491 0l8 -8.79c.313 -.344 .349 -.859 .087 -1.243l-3.537 -5.194a1 1 0 0 0 -.823 -.436h-8.926a1 1 0 0 0 -.823 .436l-3.54 5.192c-.263 .385 -.227 .901 .087 1.246z" /></svg></span>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 dark:text-dark:200">IOS App Design</h6>
                                                <span>19 Apr 2026</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Xavier</p>
                                        <span class="text-info">Graphic</span>
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="avatar--group ms-2 me-0">
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-35.png" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-15.png" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm translateY-axis">
                                                <span class="avatar-title rounded-circle bg-primary:500 text-white">+5</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="progress br-30 bg-dark:100 dark:bg-dark:500">
                                                    <div class="progress-bar bg-warning:600 dark:bg-warning:600" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <p class="mb-0">85%</p>
                                        </div>
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <span class="avatar-icon rounded-circle bg-warning:100 dark:bg-warning:500"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="text-warning dark:text-white icon icon-tabler icons-tabler-outline icon-tabler-brand-figma"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M6 3m0 3a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v0a3 3 0 0 1 -3 3h-6a3 3 0 0 1 -3 -3z" /><path d="M9 9a3 3 0 0 0 0 6h3m-3 0a3 3 0 1 0 3 3v-15" /></svg></span>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 dark:text-dark:200">Figma Dashboards</h6>
                                                <span>19 Apr 2026</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Xavier</p>
                                        <span class="text-info">Graphic</span>
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="avatar--group ms-2 me-0">
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-35.png" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-15.png" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm translateY-axis">
                                                <span class="avatar-title rounded-circle bg-primary:500 text-white">+5</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="progress br-30 bg-dark:100 dark:bg-dark:500">
                                                    <div class="progress-bar bg-danger:600 dark:bg-danger:600" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <p class="mb-0">85%</p>
                                        </div>
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <span class="avatar-title rounded-circle  bg-primary:100 text-primary:500  dark:bg-primary:500 dark:text-white">SP</span>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 dark:text-dark:200">Website SEO</h6>
                                                <span>10 May 2026</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Shaun Park</p>
                                        <span class="text-success">Management</span>
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="avatar--group ms-2 me-0">
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-12.png" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-2.png" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm translateY-axis">
                                                <img alt="avatar" src="../src/assets/img/profile/profile-14.png" class="rounded-circle" />
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="progress br-30 bg-dark:100 dark:bg-dark:500">
                                                    <div class="progress-bar bg-secondary:600 dark:bg-secondary:600" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <p class="mb-0">73%</p>
                                        </div>
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                            
                            </tbody>
                        </table>
                    </div>

                    
                </div>

            </div>
        </div>

        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-listing-badges-one">

                <div class="widget-heading">
                    <h5 class="text-dark:800 dark:text-white mb-1">Order timeline</h5>
                </div>

                <div class="widget-content">
                    <!-- Timeline -->
                    <div class="timeline">

                        <!-- Item -->
                        <div class="d-flex gap-3 timeline-content-container">
                            <!-- Dot -->
                            <div class="position-relative timeline-progress">
                                <div class="position-relative z-1 d-flex justify-content-center align-items-center">
                                    <div class="rounded-circle bg-dark:300 dark:bg-dark:500"></div>
                                </div>
                            </div>
                            <!-- End Dot -->

                            <!-- Right Content -->
                            <div class="timeline-content timeline-right-content flex-grow-1 pt-1 pb-3">
                                <h3 class="d-flex text-dark dark:text-dark:200 align-items-center">
                                    New order received no. <a href="javascript:void(0);" class="text-primary:500 dark:text-primary:400 mx-1">#2166</a>
                                </h3>
                                <p class="mt-1 small text-dark:600 dark:text-dark:400">
                                    04 Feb 2026 | 10:46 AM
                                </p>

                            </div>
                            <!-- End Right Content -->
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="d-flex gap-3 timeline-content-container">
                            <!-- Dot -->
                            <div class="position-relative timeline-progress">
                                <div class="position-relative z-1 d-flex justify-content-center align-items-center">
                                    <div class="rounded-circle bg-dark:300 dark:bg-dark:500"></div>
                                </div>
                            </div>
                            <!-- End Dot -->

                            <!-- Right Content -->
                            <div class="timeline-content timeline-right-content flex-grow-1 pt-1 pb-3">
                                <h3 class="d-flex text-dark dark:text-dark:200 align-items-center">
                                    <a href="javascript:void(0);" class="text-success:500 dark:text-success:400 mx-1">12</a> Invoices have been paid
                                </h3>
                                <p class="mt-1 small text-dark:600 dark:text-dark:400">
                                    03 Feb 2026 | 09:46 AM
                                </p>
                            </div>
                            <!-- End Right Content -->
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="d-flex gap-3 timeline-content-container">
                            <!-- Dot -->
                            <div class="position-relative timeline-progress">
                                <div class="position-relative z-1 d-flex justify-content-center align-items-center">
                                    <div class="rounded-circle bg-dark:300 dark:bg-dark:500"></div>
                                </div>
                            </div>
                            <!-- End Dot -->

                            <!-- Right Content -->
                            <div class="timeline-content timeline-right-content flex-grow-1 pt-1 pb-3">
                                <h3 class="d-flex text-dark dark:text-dark:200 align-items-center">
                                    Order <a href="javascript:void(0);" class="text-danger:500 dark:text-danger:400 mx-1">#37745</a> from September processed
                                </h3>
                                <p class="mt-1 small text-dark:600 dark:text-dark:400">
                                    02 Feb 2026 | 08:46 AM
                                </p>

                            </div>
                            <!-- End Right Content -->
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="d-flex gap-3 timeline-content-container">
                            <!-- Dot -->
                            <div class="position-relative timeline-progress">
                                <div class="position-relative z-1 d-flex justify-content-center align-items-center">
                                    <div class="rounded-circle bg-dark:300 dark:bg-dark:500"></div>
                                </div>
                            </div>
                            <!-- End Dot -->

                            <!-- Right Content -->
                            <div class="timeline-content timeline-right-content flex-grow-1 pt-1 pb-3">
                                <h3 class="d-flex text-dark dark:text-dark:200 align-items-center">
                                    Refund issued for order <a href="javascript:void(0);" class="text-warning:500 dark:text-warning:400 mx-1">#8921</a>
                                </h3>
                                <p class="mt-1 small text-dark:600 dark:text-dark:400">
                                    31 Jan 2026 | 6:30 PM
                                </p>

                            </div>
                            <!-- End Right Content -->
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="d-flex gap-3 timeline-content-container">
                            <!-- Dot -->
                            <div class="position-relative timeline-progress">
                                <div class="position-relative z-1 d-flex justify-content-center align-items-center">
                                    <div class="rounded-circle bg-dark:300 dark:bg-dark:500"></div>
                                </div>
                            </div>
                            <!-- End Dot -->

                            <!-- Right Content -->
                            <div class="timeline-content timeline-right-content flex-grow-1 pt-1 pb-3">
                                <h3 class="d-flex text-dark dark:text-dark:200 align-items-center">
                                    Shipment delayed for order <a href="javascript:void(0);" class="text-secondary:500 dark:text-secondary:400 mx-1">#7564</a>
                                </h3>
                                <p class="mt-1 small text-dark:600 dark:text-dark:400">
                                    30 Jan 2026 | 04:20 PM
                                </p>

                            </div>
                            <!-- End Right Content -->
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="d-flex gap-3 timeline-content-container">
                            <!-- Dot -->
                            <div class="position-relative timeline-progress">
                                <div class="position-relative z-1 d-flex justify-content-center align-items-center">
                                    <div class="rounded-circle bg-dark:300 dark:bg-dark:500"></div>
                                </div>
                            </div>
                            <!-- End Dot -->

                            <!-- Right Content -->
                            <div class="timeline-content timeline-right-content flex-grow-1 pt-1 pb-3">
                                <h3 class="d-flex text-dark dark:text-dark:200 align-items-center">
                                    Order <a href="javascript:void(0);" class="text-primary:500 dark:text-primary:400 mx-1">#A7894</a> successfully delivered
                                </h3>
                                <p class="mt-1 small text-dark:600 dark:text-dark:400">
                                    29 Jan 2026 | 03:15 PM
                                </p>

                            </div>
                            <!-- End Right Content -->
                        </div>
                        <!-- End Item -->

                    </div>
                    <!-- End Timeline -->
                    
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-list-three">

                <div class="widget-heading">
                    <h5 class="text-dark:800 dark:text-white mb-1">Support Tickets Overview</h5>
                </div>

                <div class="widget-content">
                    
                    <div class="c_l-support-tickets-chart chart-container">
                        <div id="ticketsChart"></div>
                    </div>

                    <div class="c_l-support-tickets-list mt-5">

                        <div class="c_l-support-tickets-item mb-3">

                            <div class="d-flex justify-content-between align-items-center">
                                <p class="fw:500 mb-0">Total Tickets</p>
                                <span class="badge bg-primary:100 text-primary:700 dark:bg-primary:600 dark:text-primary:100" id="totalTickets">0</span>
                            </div>

                        </div>

                        <div class="c_l-support-tickets-item mb-3">
                            
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="fw:500 mb-0">Open Tickets</p>
                                <span class="badge bg-danger:100 text-danger:700 dark:bg-danger:600 dark:text-danger:100" id="openTickets">0</span>
                            </div>

                        </div>

                        <div class="c_l-support-tickets-item mb-3">

                            <div class="d-flex justify-content-between align-items-center">
                                <p class="fw:500 mb-0">In Progress</p>
                                <span class="badge bg-warning:100 text-warning:700 dark:bg-warning:600 dark:text-warning:100" id="inProgressTickets">0</span>
                            </div>

                        </div>

                        <div class="c_l-support-tickets-item">

                            <div class="d-flex justify-content-between align-items-center">
                                <p class="fw:500 mb-0">Resolved</p>
                                <span class="badge bg-success:100 text-success:700 dark:bg-success:600 dark:text-success:100" id="resolvedTickets">0</span>
                            </div>

                        </div>

                    </div>
                    
                </div>

            </div>
        </div>
        
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-list-group-one p-0">

                <div class="widget-heading pb-0">
                    <h5 class="text-dark:800 dark:text-white mb-1">News</h5>
                </div>

                <div class="widget-content">
                    
                    <div class="l_g-news-list-scroll">
                        <div class="l_g-news-list">

                            <div class="l_g-news-item d-flex justify-content-between mb-3 pb-3">
                                <div class="d-flex align-items-center">
                                    <div class="l_g-img me-3">
                                        <img src="{{ asset('template/src/assets/img/dashboard/analytics/i-1.jpg') }}" alt="news-1" class="img-fluid">
                                    </div>
                                    <div class="l_g-content">
                                        <h6 class="fw-semibold mb-1">Tech Giant Unveils AI-Powered Chipset</h6>
                                        <p class="mb-0 fw-medium">5 minutes</p>
                                    </div>
                                </div>
                            </div>

                            <div class="l_g-news-item d-flex justify-content-between mb-3 pb-3">
                                <div class="d-flex align-items-center">
                                    <div class="l_g-img me-3">
                                        <img src="{{ asset('template/src/assets/img/dashboard/analytics/i-2.jpg') }}" alt="news-2" class="img-fluid">
                                    </div>
                                    <div class="l_g-content">
                                        <h6 class="fw-semibold mb-1">Breakthrough in Battery Technology</h6>
                                        <p class="mb-0 fw-medium">a day</p>
                                    </div>
                                </div>
                            </div>

                            <div class="l_g-news-item d-flex justify-content-between mb-3 pb-3">
                                <div class="d-flex align-items-center">
                                    <div class="l_g-img me-3">
                                        <img src="{{ asset('template/src/assets/img/dashboard/analytics/i-3.jpg') }}" alt="news-3" class="img-fluid">
                                    </div>
                                    <div class="l_g-content">
                                        <h6 class="fw-semibold mb-1">Humanoid Robot Performs Surgery Successfully</h6>
                                        <p class="mb-0 fw-medium">2 days</p>
                                    </div>
                                </div>
                            </div>

                            <div class="l_g-news-item d-flex justify-content-between mb-3 pb-3">
                                <div class="d-flex align-items-center">
                                    <div class="l_g-img me-3">
                                        <img src="{{ asset('template/src/assets/img/dashboard/analytics/i-6.jpg') }}" alt="news-4" class="img-fluid">
                                    </div>
                                    <div class="l_g-content">
                                        <h6 class="fw-semibold mb-1">Next-Gen Quantum Computer Launched</h6>
                                        <p class="mb-0 fw-medium">4 days</p>
                                    </div>
                                </div>
                            </div>

                            <div class="l_g-news-item d-flex justify-content-between mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="l_g-img me-3">
                                        <img src="{{ asset('template/src/assets/img/dashboard/analytics/i-7.jpg') }}" alt="news-5" class="img-fluid">
                                    </div>
                                    <div class="l_g-content">
                                        <h6 class="fw-semibold mb-1">Satellite Internet Expansion Announced</h6>
                                        <p class="mb-0 fw-medium">6 days</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    

                    <div class="l_g-news-bottom text-end">
                        <button class="btn btn-flat-dark btn-sm">
                            View All <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
                        </button>
                    </div>
                    
                </div>

            </div>
        </div>
        
    </div>
@endsection