@include('admin.layouts.header')
<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">

                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <a class="mobile-search morphsearch-search" href="#">
                        <i class="ti-search"></i>
                    </a>
                    <a href="index.html">
                        <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo"/>
                    </a>
                    <a class="mobile-options">
                        <i class="ti-more"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                        </li>

                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <a href="#!">
                                <i class="ti-bell"></i>
                                <span class="badge bg-c-pink"></span>
                            </a>
                            <ul class="show-notification">
                                <li>
                                    <h6>Notifications</h6>
                                    <label class="label label-danger">New</label>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="d-flex align-self-center img-radius"
                                             src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">John Doe</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="d-flex align-self-center img-radius"
                                             src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">Joseph William</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="d-flex align-self-center img-radius"
                                             src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">Sara Soudein</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="user-profile header-notification">
                            <a href="#!">
                                <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                <li>
                                    <a href="#!">
                                        <i class="ti-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-user"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-email"></i> My Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-lock"></i> Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a href="auth-normal-sign-in.html">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('admin.layouts.navigation')
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <!-- card1 start -->
                                        <div class="col-md-6 col-xl-3">
                                            <div class="card widget-card-1">
                                                <div class="card-block-small">
                                                    <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                                    <span class="text-c-blue f-w-600">Use space</span>
                                                    <h4>49/50GB</h4>
                                                    <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Get more space
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card1 end -->
                                        <!-- card1 start -->
                                        <div class="col-md-6 col-xl-3">
                                            <div class="card widget-card-1">
                                                <div class="card-block-small">
                                                    <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                                                    <span class="text-c-pink f-w-600">Revenue</span>
                                                    <h4>$23,589</h4>
                                                    <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Last 24 hours
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card1 end -->
                                        <!-- card1 start -->
                                        <div class="col-md-6 col-xl-3">
                                            <div class="card widget-card-1">
                                                <div class="card-block-small">
                                                    <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                                                    <span class="text-c-green f-w-600">Fixed issue</span>
                                                    <h4>45</h4>
                                                    <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Tracked via microsoft
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card1 end -->
                                        <!-- card1 start -->
                                        <div class="col-md-6 col-xl-3">
                                            <div class="card widget-card-1">
                                                <div class="card-block-small">
                                                    <i class="icofont icofont-social-twitter bg-c-yellow card1-icon"></i>
                                                    <span class="text-c-yellow f-w-600">Followers</span>
                                                    <h4>+562</h4>
                                                    <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Just update
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card1 end -->

                                        <!-- Email Sent End -->
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                            <div id="styleSelector">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-button">
            <a href="{{ route('admin.create') }}" target="_blank"
               class="btn btn-md btn-primary">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>Add product to list
            </a>
        </div>
    </div>
</div>

<!-- Warning Section Ends -->
@include('admin.layouts.partial')
