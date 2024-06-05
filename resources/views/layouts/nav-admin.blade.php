<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Smarthr - Bootstrap Admin Template" />
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects" />
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template" />
    <title>@yield('title', config('app.name'))</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/img/logokecil.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome/css/all.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/css/line-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/material.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/icons/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/morris/morris.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}" />
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left d-flex align-items-center">
                <a href="{{ route('get.landingpage') }}" class="logo">
                    <img src="{{ asset('assets/admin/img/logo_UTS_terang.png') }}" id="logo-PT" alt="Logo" class="w-75" />
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
            </div>


            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa-solid fa-bars"></i></a>


            <ul class="nav user-menu">

                <li>
                    <button class="btn button-icon" id="toggle-icon"><i class="fe fe-sun fs-4 text-white"></i></button>
                </li>
                <li class="nav-item dropdown has-arrow flag-nav">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                        <span>English</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            English
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            Indonesia
                        </a>
                    </div>
                </li>


                {{-- <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i class="fa-regular fa-bell"></i>
                        <span class="badge rounded-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="chat-block d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img src="assets/admin/img/profiles/avatar-02.jpg" alt="User Image" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">John Doe</span> added new
                                                    task
                                                    <span class="noti-title">Patient appointment booking</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="chat-block d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img src="assets/admin/img/profiles/avatar-03.jpg" alt="User Image" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Tarah Shropshire</span>
                                                    changed the task name
                                                    <span class="noti-title">Appointment booking with payment
                                                        gateway</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="chat-block d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img src="assets/admin/img/profiles/avatar-06.jpg" alt="User Image" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Misty Tison</span> added
                                                    <span class="noti-title">Domenic Houston</span> and
                                                    <span class="noti-title">Claire Mapes</span> to
                                                    project
                                                    <span class="noti-title">Doctor available module</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="chat-block d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img src="assets/admin/img/profiles/avatar-17.jpg" alt="User Image" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Rolland Webber</span>
                                                    completed task
                                                    <span class="noti-title">Patient and Doctor video
                                                        conferencing</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="chat-block d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img src="assets/admin/img/profiles/avatar-13.jpg" alt="User Image" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Bernardo Galaviz</span>
                                                    added new task
                                                    <span class="noti-title">Private chat module</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li> --}}

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <form action="{{ route('logout') }}" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </div>
                </li>
            </ul>

            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fa-solid fa-ellipsis-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="index.html">Logout</a>
                </div>
            </div>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul class="sidebar-vertical">
                        <li class="menu-title">
                            <span>Main</span>
                        </li>
                        <li @class(['active' => request()->routeIs('admin.dashboard')])>
                            <a href="{{ route('admin.dashboard') }}"><i class="la la-dashcube"></i>
                                <span>Dashboard</span></a>
                        </li>
                        <li class="@if (request()->routeIs('admin.hired-students.*')) active @endif submenu">
                            <a href="#"><i class="fa fa-users fs-6 text-center"></i>
                                <span>Hire Students</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li>
                                    <a @class(['active' => request()->routeIs('admin.hired-students.import.view')]) href="{{ route('admin.hired-students.import.view') }}">Upload Data</a>
                                </li>
                                <li>
                                    <a @class(['active' => request()->routeIs('admin.hired-students.upload-photo.view')]) href="{{ route('admin.hired-students.upload-photo.view') }}">Upload Photo</a>
                                </li>
                                <li>
                                    <a @class(['active' => request()->routeIs('admin.hired-students.index') || request()->routeIs('admin.hired-students.edit') || request()->routeIs('admin.hired-students.create')]) href="{{ route('admin.hired-students.index') }}">Data</a>
                                </li>
                            </ul>
                        </li>
                        <li class="@if (request()->routeIs('admin.branches.*')) active @endif submenu">
                            <a href="#"><i
                                    class="fe fe-map-pin fs-6 text-center"></i>
                                <span>Branch</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a  @class(['active' => request()->routeIs('admin.branches.import.view')]) href="{{ route('admin.branches.import.view') }}">Upload Branches</a></li>
                                <li><a  @class(['active' => request()->routeIs('admin.branches.index') || request()->routeIs('admin.branches.edit') || request()->routeIs('admin.branches.create')]) href="{{ route('admin.branches.index') }}">Data</a></li>
                            </ul>
                        </li>
                        <li @class(['active' => request()->routeIs('admin.landingPages.index')])>
                            <a href="{{ route('admin.landingPages.index') }}"><i class="la la-gear"></i>
                                <span>LandingPage</span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        @yield('content')

    </div>

    <script src="{{ asset('assets/admin/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/admin/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/admin/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/plugins/raphael/raphael.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/chart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/greedynav.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/admin/js/layout.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/theme-settings.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/admin/js/app.js') }}" type="text/javascript"></script>

    @yield('script', '')
</body>

</html>
