<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><!--<![endif]-->

<head>
    <!-- Meta Tags for SEO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="language" content="ID, EN">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">
    <meta name="description"
        content="Website UT School dari PT United Tractors bertujuan untuk merekomendasikan anak-anak terlatih dan berpengalaman dalam bidang Mekanik dan Operator. Lihat siswa-siswi yang memiliki skill bagus dan hire mereka melalui WhatsApp atau email. UT School website from PT United Tractors aims to recommend well-trained and experienced individuals in Mechanics and Operators. View students with excellent skills and hire them via WhatsApp or email.">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Hire Me! - UT School</title>

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="Hire Me! - UT School">
    <meta property="og:description"
        content="Website UT School dari PT United Tractors bertujuan untuk merekomendasikan anak-anak terlatih dan berpengalaman dalam bidang Mekanik dan Operator. Lihat siswa-siswi yang memiliki skill bagus dan hire mereka melalui WhatsApp atau email. UT School website from PT United Tractors aims to recommend well-trained and experienced individuals in Mechanics and Operators. View students with excellent skills and hire them via WhatsApp or email.">
    <meta property="og:image" content="{{ asset('assets/admin/img/logokecil.png') }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="UT School">

    <!-- Twitter Card Meta Tags -->
    {{-- @if (strpos($landingPage->twitter, 'com/') !== false)
        <meta name="twitter:title" content="UT School - PT United Tractors">
        <meta name="twitter:description"
            content="Website UT School dari PT United Tractors bertujuan untuk merekomendasikan anak-anak terlatih dan berpengalaman dalam bidang Mekanik dan Operator. Lihat siswa-siswi yang memiliki skill bagus dan hire mereka melalui WhatsApp atau email. UT School website from PT United Tractors aims to recommend well-trained and experienced individuals in Mechanics and Operators. View students with excellent skills and hire them via WhatsApp or email.">
        <meta name="twitter:image"
            content="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/X_logo_2023.svg/120px-X_logo_2023.svg.png">
        <meta name="twitter:site" content="{{ '@' . explode('com/', $landingPage->twitter)[1] }}">
    @endif --}}

    <!-- Canonical Link to Prevent Duplicate Content Issues -->
    <link rel="canonical" href="{{ config('app.url') }}">

    <!-- Alternate Hreflang Links for Multi-Language Sites -->
    <link rel="alternate" href="{{ config('app.url') . '/lang/en' }}" hreflang="en">
    <link rel="alternate" href="{{ config('app.url') . '/lang/id' }}" hreflang="id">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/img/logokecil.png') }}">
    <link href="https://cesium.com/downloads/cesiumjs/releases/1.83/Build/Cesium/Widgets/widgets.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/icon/apple-touch-icon-158-precomposed.png') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuItems = document.querySelectorAll('.menu-item');
            const currentHash = window.location.hash;

            menuItems.forEach(item => {
                const link = item.querySelector('a');
                if (link && link.getAttribute('href') === currentHash) {
                    item.classList.add('current-menu-item');
                } else {
                    item.classList.remove('current-menu-item');
                }
            });
        });
    </script>

</head>
<style>
    html {
        scroll-behavior: smooth
    }

    @media (max-width: 768px) {
        .indonesia {
            display: none;
        }

        .spacer {
            display: none;
        }

        #divisions-section{
            padding: 10px;
        }

        .box-2{
            margin-top: 30px !important;
        }

    }

    @media (min-width: 769px) {
        .indonesia-tablet {
            display: inline;
        }

        .btn-login {
            display: none
        }

        #divisions-section{
            padding: 0px;
        }
    }
</style>

<body class="front-page no-sidebar site-layout-full-width header-style-5 menu-has-search menu-has-cart header-sticky">

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <div id="site-header-wrap">
                <!-- Top Bar -->
                <div id="top-bar" class="style-2">
                    <div id="top-bar-inner" class="container">
                        <div class="top-bar-inner-wrap">

                            <div class="top-bar-socials">
                                <div class="inner">
                                    <span class="icons">
                                        <a href="{{ $landingPage->twitter }}" title="Twitter"><span
                                                class="fa fa-twitter" aria-hidden="true"></span></a>
                                        <a href="{{ $landingPage->facebook }}" title="Facebook"><span
                                                class="fa fa-facebook" aria-hidden="true"></span></a>
                                        <a href="{{ $landingPage->youtube }}" title="Youtube"><span
                                                class="fa fa-youtube" aria-hidden="true"></span></a>
                                        <a href="{{ $landingPage->tiktok }}" title="Tiktok">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20"
                                                height="20" viewBox="0,0,300,150" style="fill:#FFFFFF;">
                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                    font-weight="none" font-size="none" text-anchor="none"
                                                    style="mix-blend-mode: normal">
                                                    <g transform="scale(4,4)">
                                                        <path
                                                            d="M48,8h-32c-4.418,0 -8,3.582 -8,8v32c0,4.418 3.582,8 8,8h32c4.418,0 8,-3.582 8,-8v-32c0,-4.418 -3.582,-8 -8,-8zM50,27c-3.964,0 -6.885,-1.09 -9,-2.695v14.195c0,6.341 -5.159,11.5 -11.5,11.5c-6.341,0 -11.5,-5.159 -11.5,-11.5c0,-6.341 5.159,-11.5 11.5,-11.5h2v5h-2c-3.584,0 -6.5,2.916 -6.5,6.5c0,3.584 2.916,6.5 6.5,6.5c3.584,0 6.5,-2.916 6.5,-6.5v-24.5h5c0.018,1.323 0.533,8 9,8z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                        <a href="{{ $landingPage->instagram }}" title="Instagram"><span
                                                class="fa fa-instagram" aria-hidden="true"></span></a>
                                    </span>
                                </div>
                            </div><!-- /.top-bar-socials -->

                            <div class="top-bar-content">
                                <span id="top-bar-text">
                                    <i class="fa fa-phone-square indonesia"></i>
                                    <span class="indonesia">
                                        {{ $operator->no_telp }}
                                    </span>
                                    <i class="fa fa-envelope indonesia"></i>
                                    <span class="indonesia">
                                        {{ $operator->customer_email }}
                                    </span>

                                    <i
                                        class="fa fa-clock-o"></i>{{ $landingPage->operational_start_day }}-{{ $landingPage->operational_end_day }}:
                                    {{ \Carbon\Carbon::parse($landingPage->operational_start_time)->format('H:i') }} -
                                    {{ \Carbon\Carbon::parse($landingPage->operational_end_time)->format('H:i') }}
                                    {{-- <span></span> --}}
                                    <a class="d-flex" href="{{ route('get.changeLanguage', 'id') }}">
                                        <img width="25" height="25"
                                            src="https://img.icons8.com/color/48/indonesia-circular.png"
                                            alt="indonesia-circular" />
                                        <span class="indonesia">
                                            Indonesia
                                        </span>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('get.changeLanguage', 'en') }}">
                                        <img width="25" height="25"
                                            src="https://img.icons8.com/color/48/great-britain-circular.png"
                                            alt="great-britain-circular" />
                                        <span class="indonesia">
                                            English
                                        </span>
                                    </a>
                                </span><!-- /#top-bar-text -->
                            </div><!-- /.top-bar-content -->


                        </div>

                    </div>
                </div><!-- /#top-bar -->

                <!-- Header -->
                <header id="site-header" class="header-front-page style-5">
                    <div id="site-header-inner" class="container">
                        <div class="wrap-inner flex justify-content-between">
                            <div id="site-logo" class="clearfix">
                                <div id="site-logo-inner">
                                    <a href="#" title="Construction" rel="home" class="main-logo">
                                        <img src="{{ asset('assets/admin/img/logo_UTS_terang.png') }}" width="150"
                                            style="object-fit: cover" alt="home image" />
                                        {{-- <span class="fw-bold text-white " style="font-size: 20px">UT SCHOOL</span> --}}
                                    </a>
                                </div>
                            </div><!-- /#site-logo -->

                            <div class="mobile-button"><span></span></div><!-- //mobile menu button -->
                            <nav id="main-nav" class="main-nav">
                                <ul class="menu">
                                    <li class="menu-item"><a href="#hero-section">{{ __('Home') }}</a>
                                    </li>
                                    <li class="menu-item"><a href="#about">{{ __('About') }}</a>
                                    </li>
                                    {{-- <li class="menu-item"><a href="#maps">{{ __('Map') }}</a>
                                    </li> --}}
                                    <li style="padding: 10px;display: flex;justify-content: end;"
                                        class="menu-item btn-login p-2">
                                        <button href="/login" class="btn btn-warning p-3 btn-login">
                                            Login
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                            <div class="nav-top-cart-wrapper">
                                <a href="/login" class="wprt-button small">
                                    Login
                                </a>
                            </div>

                        </div>
                    </div><!-- /#site-header-inner -->
                </header><!-- /#site-header -->
            </div><!-- /#site-header-wrap -->
            {{-- @dd($home) --}}

            <!-- Hero Background SlideShow -->
            <div id="hero-section" data-number="3"
                data-image-1="{{ asset($landingPage->hero_section_image_1 ?? 'assets/img/hero/hero1.jpg') }}"
                data-image-2="{{ asset($landingPage->hero_section_image_2 ?? 'assets/img/hero/hero2.png') }}"
                data-image-3="{{ asset($landingPage->hero_section_image_3 ?? 'assets/img/hero/hero3.jpg') }}"
                data-effect="fade">
                <div class="hero-content">
                    <div class="hero-title" data-min="28px" data-max="80px">
                        {{-- <h1>UT SCHOOL</h1> --}}
                        {{-- <h1>TRACTORS</h1>
            <h1>SCHOOL</h1> --}}
                    </div>

                    {{-- <div class="hero-text">
                        <p style="font-size: 30px" class="font-weight-600 letter-spacing-1px text-uppercase">{{__('CHOOSE YOUR PROFESSIONAL')}}<span
                                class="text-accent-color">{{__('MECHANIC')}}</span> {{__('AND')}} <span
                                class="text-accent-color">{{__('OPERATOR')}}</span></p>
                    </div> --}}

                    {{-- <a class="arrow-2 bounce scroll-target" href="#services-section"><span
                            class="fa fa-angle-down"></span></a><!-- change href value to ID of section you want to scroll down --> --}}
                </div><!-- /.hero-content -->
            </div>

            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">

                                <!-- DIVISION -->
                                <section id="divisions-section" class="wprt-section divisions">
                                    <div class="container">
                                        <div class="row ">
                                            <div onclick="window.location.href = '/customer/hire-student?role=mechanic'" class="col-md-6 " style="cursor: pointer">
                                                {{-- <a href="/customer/hire-student"> --}}
                                                <div id="" class="wprt-spacer spacer " data-desktop="0"
                                                    data-mobi="60" data-smobi="60">
                                                </div>

                                                <div class="wprt-content-box style-1">
                                                    <p class="text-white" style="font-weight: 700; margin: -8px">
                                                        {{ __('CHOOSE YOUR PROFESSIONAL') }}</p>
                                                    <div class="wprt-icon-box icon-effect-2 icon-left">
                                                        <div class="icon-wrap">
                                                            <span class="dd-icon icon-tools-2"></span>
                                                        </div>
                                                        <div class="content-wrap">
                                                            <h3 class="dd-title text-white font-size-19"><a
                                                                    href="#">{{ __('ROLE_MECHANIC') }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- </a> --}}
                                            </div><!-- /.col-md-4 -->

                                            <div onclick="window.location.href = '/customer/hire-student?role=operator'" class="col-md-6" style="cursor: pointer">

                                                <div id="" class="wprt-spacer spacer" data-desktop="0" data-mobi="30"
                                                    data-smobi="30"></div>
                                                <div class="wprt-content-box style-1 box-2">
                                                    <p class="text-white" style="font-weight: 700; margin: -8px">
                                                        {{ __('CHOOSE YOUR PROFESSIONAL') }}</p>
                                                    <div class="wprt-icon-box icon-effect-2 icon-left">
                                                        <div class="icon-wrap">
                                                            <span class="dd-icon icon-backhoes"></span>
                                                        </div>
                                                        <div class="content-wrap">
                                                            <h3 class="dd-title text-white font-size-19"><a
                                                                    href="#">{{ __('ROLE_OPERATOR') }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.col-md-4 -->
                                        </div>
                                    </div>
                                </section>


                                <!-- FACTS -->
                                <section class="wprt-section facts-3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="wprt-spacer" data-desktop="110" data-mobi="80"
                                                    data-smobi="60"></div>
                                            </div><!-- /.col-md-12 -->
                                            <div class="col-md-4">
                                                <div class="wprt-counter text-center white-type has-plus">
                                                    <div class="number" data-speed="5000"
                                                        data-to="{{ $landingPage->manpower_channelled }}"
                                                        data-in-viewport="yes">{{ $landingPage->manpower_channelled }}
                                                    </div>
                                                    <div
                                                        class="wprt-lines style-2 custom-1 margin-top-10 margin-bottom-10">
                                                        <div class="line-1"></div>
                                                    </div>
                                                    <div class="text">{{ __('MANPOWER CHANNELLED') }}</div>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="0" data-mobi="30"
                                                    data-smobi="30"></div>
                                            </div><!-- /.col-md-3 -->
                                            <div class="col-md-4">
                                                <div class="wprt-counter text-center white-type has-plus">
                                                    <div class="number" data-speed="5000"
                                                        data-to="{{ $landingPage->total_branch }}"
                                                        data-in-viewport="yes">{{ $landingPage->total_branch }}</div>
                                                    <div
                                                        class="wprt-lines style-2 custom-1 margin-top-10 margin-bottom-10">
                                                        <div class="line-1"></div>
                                                    </div>
                                                    <div class="text">{{ __('BRANCHS') }}</div>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="0" data-mobi="30"
                                                    data-smobi="30"></div>
                                            </div><!-- /.col-md-3 -->
                                            <div class="col-md-4">
                                                <div class="wprt-counter text-center white-type has-plus">
                                                    <div class="number" data-speed="5000"
                                                        data-to="{{ $landingPage->client }}" data-in-viewport="yes">
                                                        {{ $landingPage->client }}</div>
                                                    <div
                                                        class="wprt-lines style-2 custom-1 margin-top-10 margin-bottom-10">
                                                        <div class="line-1"></div>
                                                    </div>
                                                    <div class="text">{{ __('SATISFIED CLIENTS') }}</div>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="0" data-mobi="30"
                                                    data-smobi="30"></div>
                                            </div><!-- /.col-md-3 -->
                                            <div class="col-md-12">
                                                <div class="wprt-spacer" data-desktop="110" data-mobi="80"
                                                    data-smobi="60"></div>
                                            </div><!-- /.col-md-12 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </section>


                            </div><!-- /.page-content -->
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div id="maps" style="width: 100%; height: 500px; display: block;"></div> --}}

            <!-- Footer -->
            <footer id="footer">
                <div id="footer-widgets" class="container style-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget widget_text">
                                <h2 id="about" class="widget-title"><span
                                        class="text-uppercase">{{ __('AboutUs') }}</span></h2>
                                <div class="textwidget">
                                    <img src="{{ asset('assets/admin/img/logo_UTS_terang.png') }}" width="140"
                                        height="30" alt="image" class="margin-top-5 margin-bottom-25" />
                                    <p>{{ __('ABOUT_US') }}</p>

                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-4">
                            <div class="widget widget_links">
                                <h2 class="widget-title"><span>COMPANY LINKS</span></h2>
                                <ul class="wprt-links clearfix col2">
                                    <li class="style-2"><a href="#">History</a></li>
                                    <li class="style-2"><a href="#">Services</a></li>
                                    <li class="style-2"><a href="#">Team & Awards</a></li>
                                    <li class="style-2"><a href="#">Delivery Methods</a></li>
                                    <li class="style-2"><a href="#">Community</a></li>
                                    <li class="style-2"><a href="#">Safety</a></li>
                                    <li class="style-2"><a href="#">News & Events</a></li>
                                    <li class="style-2"><a href="#">Sustainability</a></li>
                                    <li class="style-2"><a href="#">FAQ</a></li>
                                    <li class="style-2"><a href="#">Portfolio</a></li>
                                    <li class="style-2"><a href="#">Contact Us</a></li>
                                    <li class="style-2"><a href="#">Shop</a></li>
                                </ul>
                            </div>
                        </div> --}}

                        <div class="col-md-6">
                            <div class="widget widget_information">
                                <h2 class="widget-title"><span>{{ __('CONTACT INFO') }}</span></h2>
                                <ul class="style-2">
                                    <li class="address clearfix">
                                        <span class="hl">Address:</span>
                                        <span class="text">Jl. Raya Bekasi KM. 22
                                            Jakarta Timur 13910, Indonesia</span>
                                    </li>
                                    {{-- <li class="address clearfix">
                                        <span class="hl">Call Center: </span>
                                        <span class="text">08111084800</span>
                                    </li> --}}
                                    <li class="phone clearfix">
                                        <span class="hl">Phone:</span>
                                        <span class="text">{{ $operator->no_telp }}</span>
                                    </li>
                                    <li class="email clearfix">
                                        <span class="hl">Email:</span>
                                        <span class="text">{{ $operator->customer_email }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget widget_spacer">
                                <div class="wprt-spacer clearfix" data-desktop="10" data-mobi="10" data-smobi="10">
                                </div>
                            </div>

                            <div class="widget widget_socials">
                                <div class="socials">
                                    <a target="_blank" href="{{ $landingPage->twitter }}"><i
                                            class="fa fa-twitter"></i></a>
                                    <a target="_blank" href="{{ $landingPage->facebook }}"><i
                                            class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="{{ $landingPage->youtube }}"><i
                                            class="fa fa-youtube"></i></a>
                                    <a target="_blank" href="{{ $landingPage->instagram }}"><i
                                            class="fa fa-instagram"></i></a>
                                    <a target="_blank" href="{{ $landingPage->tiktok }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20"
                                            height="20" viewBox="0,0,300,150" style="fill:#FFFFFF;">
                                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <g transform="scale(4,4)">
                                                    <path
                                                        d="M48,8h-32c-4.418,0 -8,3.582 -8,8v32c0,4.418 3.582,8 8,8h32c4.418,0 8,-3.582 8,-8v-32c0,-4.418 -3.582,-8 -8,-8zM50,27c-3.964,0 -6.885,-1.09 -9,-2.695v14.195c0,6.341 -5.159,11.5 -11.5,11.5c-6.341,0 -11.5,-5.159 -11.5,-11.5c0,-6.341 5.159,-11.5 11.5,-11.5h2v5h-2c-3.584,0 -6.5,2.916 -6.5,6.5c0,3.584 2.916,6.5 6.5,6.5c3.584,0 6.5,-2.916 6.5,-6.5v-24.5h5c0.018,1.323 0.533,8 9,8z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Bottom -->
            <div id="bottom" class="clearfix style-1">
                <div id="bottom-bar-inner" class="wprt-container">
                    <div class="bottom-bar-inner-wrap">

                        <div class="bottom-bar-content">
                            <div id="copyright">COPYRIGHT BY &copy; UT SCHOOL.
                            </div><!-- /#copyright -->
                        </div><!-- /.bottom-bar-content -->
                    </div>
                </div>
            </div>
        </div><!-- /#page -->
    </div><!-- /#wrapper -->

    <a id="scroll-top"></a>

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/animsition.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/fitText.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/flexslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vegas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/cube.portfolio.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cesium.com/downloads/cesiumjs/releases/1.83/Build/Cesium/Cesium.js"></script>
    <script>
        function changeLanguage() {
            var selectedLanguage = document.getElementById("language-select").value;
            window.location.href = "{{ route('get.changeLanguage', ':lang') }}".replace(':lang', selectedLanguage);
        }

        Cesium.Ion.defaultAccessToken =
            "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJkZWQ0MTM1Yy03ZjVmLTQxZWItYTQ1NC0yYmM3ZDQ2ZTBjNTUiLCJpZCI6MjE5NTk0LCJpYXQiOjE3MTc0MDMxMzB9.z7-KgL09KT4PHuWN08Z2PNOcYGU4sT_s89FjUrarKAQ";

        // Inisialisasi tampilan CesiumJS
        var viewer = new Cesium.Viewer('maps', {
            animation: false,
            baseLayerPicker: false,
            fullscreenButton: false,
            geocoder: false,
            homeButton: false,
            infoBox: false,
            sceneModePicker: false,
            selectionIndicator: false,
            timeline: false,
            navigationHelpButton: false,
            navigationInstructionsInitiallyVisible: false,
            skyBox: false,
            skyAtmosphere: new Cesium.SkyAtmosphere()
        });

        async function handleCreatePin(viewer, pinBuilder) {
            $.ajax({
                method: "GET",
                url: "{{ route('customer.getData') }}",
                success: function(data) {

                    for (let key in data) {
                        if (data.hasOwnProperty(
                                key
                            )) { // Memastikan properti berasal dari dataek itu sendiri, bukan dari prototipe
                            console.log(`${key}: ${data[key]}`);
                            let coordinate = data[key].coordinate.split(",")

                            viewer.entities.add({
                                name: data[key].name,
                                position: Cesium.Cartesian3.fromDegrees(coordinate[1], coordinate[
                                    0]),
                                billboard: {
                                    image: pinBuilder.fromColor(Cesium.Color.RED, 48).toDataURL(),
                                    verticalOrigin: Cesium.VerticalOrigin.BOTTOM
                                }
                            });
                        }
                    }

                }
            })
        }

        async function loadTileset() {
            try {
                const resource = await Cesium.IonResource.fromAssetId(2275207);
                const tileset = new Cesium.Cesium3DTileset({
                    url: resource
                });
                viewer.scene.primitives.add(tileset);

                // Tambahkan marker setelah tileset dimuat





                viewer.camera.setView({
                    destination: Cesium.Cartesian3.fromDegrees(106.93242431518361, -6.186088025422655,
                        20000000),
                    orientation: {
                        heading: 0,
                        pitch: Cesium.Math.toRadians(-90),
                        roll: 0
                    }
                });

                var pinBuilder = new Cesium.PinBuilder();
                handleCreatePin(viewer, pinBuilder)
                // Mulai animasi berputar
                var startTime = Cesium.JulianDate.now();
                viewer.scene.preRender.addEventListener(function(scene, time) {
                    var currentTime = Cesium.JulianDate.now();
                    var elapsedTime = Cesium.JulianDate.secondsDifference(currentTime, startTime);
                    var rotationSpeed = 0.01; // Kecepatan rotasi dalam radian per detik
                    var heading = elapsedTime * rotationSpeed;
                    viewer.scene.camera.setView({
                        destination: viewer.camera.position,
                        orientation: {
                            heading: heading,
                            pitch: viewer.camera.pitch,
                            roll: viewer.camera.roll
                        }
                    });
                });
            } catch (error) {
                console.log(error);
            }
        }

        loadTileset();
    </script>

</body>

<!-- Mirrored from themes247.net/html5/construction-template/demo/home-3-hero-slideshow.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 19:04:41 GMT -->

</html>
