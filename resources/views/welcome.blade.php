<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from themes247.net/html5/construction-template/demo/home-3-hero-slideshow.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 19:04:15 GMT -->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>HIRE | UTS</title>
    <meta name="description"
        content="Template built for Construction Company, Building Services, Architecture, Engineering, Cleaning Service and other Construction related services">
    <meta name="keywords"
        content=" architecture, builder, building, building company, cleaning services, construction, construction business, construction company">
    <meta name="author" content="blogwp.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/icon/favicon.png') }}">
    <link href="https://cesium.com/downloads/cesiumjs/releases/1.83/Build/Cesium/Widgets/widgets.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/icon/apple-touch-icon-158-precomposed.png') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

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
                                        <a href="#" title="Twitter"><span class="fa fa-twitter"
                                                aria-hidden="true"></span></a>
                                        <a href="#" title="Facebook"><span class="fa fa-facebook"
                                                aria-hidden="true"></span></a>
                                        <a href="#" title="Google Plus"><span class="fa fa-google-plus"
                                                aria-hidden="true"></span></a>
                                        <a href="#" title="Pinterest"><span class="fa fa-pinterest"
                                                aria-hidden="true"></span></a>
                                        <a href="#" title="Dribbble"><span class="fa fa-dribbble"
                                                aria-hidden="true"></span></a>
                                    </span>
                                </div>
                            </div><!-- /.top-bar-socials -->

                            <div class="top-bar-content">
                                <span id="top-bar-text">
                                    <i class="fa fa-phone-square"></i>{{ Config('app.admin_nohp') }}
                                    <i class="fa fa-envelope"></i>{{ Config('app.opt_email') }}
                                    <i class="fa fa-clock-o"></i>Mon-Fri: 7:30 - 16:30
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
                                        <img src="{{ asset('assets/admin/img/logo2.png') }}" width="50"
                                            style="object-fit: cover" />
                                        <span class="fw-bold text-white " style="font-size: 20px">UT SCHOOL</span>
                                    </a>
                                </div>
                            </div><!-- /#site-logo -->

                            <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                            <nav id="main-nav" class="main-nav">
                                <ul class="menu">
                                    <li class="menu-item current-menu-item"><a
                                            href="home-slider-full-screen.html">Home</a>
                                    </li>
                                    <li class="menu-item"><a href="#">Pages</a>
                                    </li>
                                    <li class="menu-item"><a href="#">Elements</a>
                                    </li>
                                    <li class="menu-item"><a href="#">Portfolio</a>
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

            <!-- Hero Background SlideShow -->
            <div id="hero-section" data-number="3" data-image-1="{{ asset('assets/img/slider/9.jpg') }}"
                data-image-2="{{ asset('assets/img/slider/8.jpg') }}"
                data-image-3="{{ asset('assets/img/slider/1.jpg') }}" data-effect="fade">
                <div class="hero-content">
                    <div class="hero-title" data-min="28px" data-max="80px">
                        <h1>UNITED TRACTORS SCHOOL</h1>
                        {{-- <h1>TRACTORS</h1>
            <h1>SCHOOL</h1> --}}
                    </div>

                    <div class="hero-text">
                        <p class="font-weight-600 letter-spacing-1px text-uppercase">choose your professional <span
                                class="text-accent-color">mechanic</span> and <span
                                class="text-accent-color">operator</span></p>
                    </div>

                    <a class="arrow-2 bounce scroll-target" href="#services-section"><span
                            class="fa fa-angle-down"></span></a><!-- change href value to ID of section you want to scroll down -->
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
                                            <div class="col-md-6">
                                                <div class="wprt-spacer" data-desktop="0" data-mobi="60"
                                                    data-smobi="60"></div>

                                                <div class="wprt-content-box style-1">
                                                    <div class="wprt-icon-box icon-effect-2 icon-left">
                                                        <div class="icon-wrap">
                                                            <span class="dd-icon icon-tools-2"></span>
                                                        </div>
                                                        <div class="content-wrap">
                                                            <h3 class="dd-title text-white font-size-19"><a
                                                                    href="#">MECHANIC</a></h3>
                                                            <div class="dd-link"><a
                                                                    href="/customer/hire-student?role=mechanic">Hire</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.col-md-4 -->

                                            <div class="col-md-6">
                                                <div class="wprt-spacer" data-desktop="0" data-mobi="30"
                                                    data-smobi="30"></div>

                                                <div class="wprt-content-box style-1">
                                                    <div class="wprt-icon-box icon-effect-2 icon-left">
                                                        <div class="icon-wrap">
                                                            <span class="dd-icon icon-backhoes"></span>
                                                        </div>
                                                        <div class="content-wrap">
                                                            <h3 class="dd-title text-white font-size-19"><a
                                                                    href="#">OPERATOR</a></h3>
                                                            {{-- <a href="" class="wprt-button small">Hire</a> --}}
                                                            <div class="dd-link"><a
                                                                    href="/customer/hire-student?role=operator">Hire</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.col-md-4 -->
                                        </div>
                                    </div>
                                </section>

                                <!-- SERVICES -->
                                {{-- <section id="services-section" class="wprt-section services-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2 class="text-center margin-bottom-10">HOW WE BUILD</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="32" data-mobi="32" data-smobi="32"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-6">
                                    <div class="wprt-image-box left clearfix">
                                        <div class="image-wrap">
                                            <img src="assets/img/services/7.jpg" alt="image" />
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Construction Manager</a></h3>
                                            <p>Nullam ornare odio eu lacus tincidunt malesuada. Sed eu vestibulum elit. Curabitur tortor mi, eleifend ornare.</p>
                                            <div class="dd-link"><a href="#">READ MORE</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="30" data-mobi="20" data-smobi="20"></div>

                                    <div class="wprt-image-box left clearfix">
                                        <div class="image-wrap">
                                            <img src="assets/img/services/9.jpg" alt="image" />
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Safety is Key</a></h3>
                                            <p>Nullam ornare odio eu lacus tincidunt malesuada. Sed eu vestibulum elit. Curabitur tortor mi, eleifend ornare.</p>
                                            <div class="dd-link"><a href="#">READ MORE</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="wprt-image-box left clearfix">
                                        <div class="image-wrap">
                                            <img src="assets/img/services/8.jpg" alt="image" />
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Design bind Build</a></h3>
                                            <p>Nullam ornare odio eu lacus tincidunt malesuada. Sed eu vestibulum elit. Curabitur tortor mi, eleifend ornare.</p>
                                            <div class="dd-link"><a href="#">READ MORE</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="30" data-mobi="20" data-smobi="20"></div>

                                    <div class="wprt-image-box left clearfix">
                                        <div class="image-wrap">
                                            <img src="assets/img/services/10.jpg" alt="image" />
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Sustainable Construction</a></h3>
                                            <p>Nullam ornare odio eu lacus tincidunt malesuada. Sed eu vestibulum elit. Curabitur tortor mi, eleifend ornare.</p>
                                            <div class="dd-link"><a href="#">READ MORE</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section> --}}

                                <!-- WORKS -->
                                {{-- <section class="wprt-section works parallax">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>

                                    <h2 class="text-center text-white margin-bottom-10">FEATURED PROJECTS</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="43" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->

                        <div class="wprt-project" data-layout="grid" data-column="4" data-column2="3" data-column3="2" data-column4="1" data-gaph="10" data-gapv="10">
                            <div id="project-filter">
                                <div data-filter="*" class="cbp-filter-item">
                                    <span>All</span>
                                </div>
                                <div data-filter=".architecture" class="cbp-filter-item">
                                    <span>Architecture</span>
                                </div>
                                <div data-filter=".building" class="cbp-filter-item">
                                    <span>Building</span>
                                </div>
                                <div data-filter=".garden" class="cbp-filter-item">
                                    <span>Garden</span>
                                </div>
                                <div data-filter=".interior" class="cbp-filter-item">
                                    <span>Interior</span>
                                </div>
                                <div data-filter=".office" class="cbp-filter-item">
                                    <span>Office</span>
                                </div>
                                <div data-filter=".workspace" class="cbp-filter-item">
                                    <span>Workspace</span>
                                </div>
                            </div><!-- /#project-filter -->

                            <div id="projects" class="cbp">
                                <div class="cbp-item architecture interior workspace">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-sadie">
                                                <img src="assets/img/projects/1r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/1-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item building office workspace">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-honey">
                                                <img src="assets/img/projects/2r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail-2.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/2-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item architecture garden interior">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-oscar">
                                                <img src="assets/img/projects/3r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail-3.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/3-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item building interior workspace">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-zoe">
                                                <img src="assets/img/projects/4r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail-1.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/4-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item garden office workspace">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-oscar">
                                                <img src="assets/img/projects/5r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail-2.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/5-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item architecture garden office">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-zoe">
                                                <img src="assets/img/projects/6r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail-3.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/6-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item building">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-sadie">
                                                <img src="assets/img/projects/7r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail-1.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/7-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item garden office workspace">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-honey">
                                                <img src="assets/img/projects/8r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail-2.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/8-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->
                            </div><!-- /#projects -->
                        </div><!--/.wprt-project -->

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="60" data-mobi="40" data-smobi="40"></div>

                                    <div class="text-center"><a href="#" class="wprt-button rounded-3px">ALL PROJECTS</a></div>

                                    <div class="wprt-spacer" data-desktop="60" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section> --}}

                                <!-- OFFER -->
                                {{-- <section id="features" class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2 class="text-center margin-bottom-10">WHAT WE OFFER</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-4">
                                    <div class="wprt-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-45">
                                            <span class="dd-icon icon-o-paint-roller"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Prepair Services</a></h3>
                                            <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                            <div class="dd-link dark"><a href="#">READ MORE</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="45" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-o-electricity"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Electrical Systems</a></h3>
                                            <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                            <div class="dd-link dark"><a href="#">READ MORE</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="wprt-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-o-drawing-1"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Architectural Design</a></h3>
                                            <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                            <div class="dd-link dark"><a href="#">READ MORE</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="45" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-o-roof"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Metal Roofing</a></h3>
                                            <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                            <div class="dd-link dark"><a href="#">READ MORE</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="wprt-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-o-tiles"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Green Building</a></h3>
                                            <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                            <div class="dd-link dark"><a href="#">READ MORE</a></div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="45" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-o-parquet"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Laminate Flooring</a></h3>
                                            <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                            <div class="dd-link dark"><a href="#">READ MORE</a></div>
                                        </div>
                                    </div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="50"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section> --}}

                                <!-- Promotion -->
                                {{-- <section class="wprt-section promotion">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="wprt-spacer" data-desktop="8" data-mobi="8" data-smobi="8"></div>
                                    <h2 class="text-white text-center-mobile font-size-20 margin-bottom-0">Are you looking for the best construction company in California?</h2>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-8 -->

                                <div class="col-md-4">
                                    <div class="text-right text-center-mobile"><a href="#" class="wprt-button white rounded-3px">CONTACT US NOW</a></div>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="15" data-smobi="15"></div>
                                </div><!-- /.col-md-4 -->

                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section> --}}

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
                                                    <div class="number" data-speed="5000" data-to="13691"
                                                        data-in-viewport="yes">13691</div>
                                                    <div
                                                        class="wprt-lines style-2 custom-1 margin-top-10 margin-bottom-10">
                                                        <div class="line-1"></div>
                                                    </div>
                                                    <div class="text">MANPOWER CHANNELLED</div>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="0" data-mobi="30"
                                                    data-smobi="30"></div>
                                            </div><!-- /.col-md-3 -->
                                            <div class="col-md-4">
                                                <div class="wprt-counter text-center white-type has-plus">
                                                    <div class="number" data-speed="5000" data-to="336"
                                                        data-in-viewport="yes">336</div>
                                                    <div
                                                        class="wprt-lines style-2 custom-1 margin-top-10 margin-bottom-10">
                                                        <div class="line-1"></div>
                                                    </div>
                                                    <div class="text">BRANCHS</div>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="0" data-mobi="30"
                                                    data-smobi="30"></div>
                                            </div><!-- /.col-md-3 -->
                                            <div class="col-md-4">
                                                <div class="wprt-counter text-center white-type has-plus">
                                                    <div class="number" data-speed="5000" data-to="1725"
                                                        data-in-viewport="yes">1725</div>
                                                    <div
                                                        class="wprt-lines style-2 custom-1 margin-top-10 margin-bottom-10">
                                                        <div class="line-1"></div>
                                                    </div>
                                                    <div class="text">SATISFIED CLIENTS</div>
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

                                <!-- TESTIMONIALS -->
                                {{-- <section class="wprt-section testiminials">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="50"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-6">
                                    <h2>OUR PARTNERS</h2>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                    <div class="wprt-partner-grid has-outline col-3 gutter-10">
                                        <div class="partner-wrap clearfix">
                                            <div class="partner-row clearfix">
                                                <div class="partner-item">
                                                    <div class="inner-item">
                                                        <a target="_blank" href="#"><img src="assets/img/partners/1.png" alt="image" /></a>
                                                    </div>
                                                </div><!-- /.partner-item -->

                                                <div class="partner-item">
                                                    <div class="inner-item">
                                                        <a target="_blank" href="#"><img src="assets/img/partners/2.png" alt="image" /></a>
                                                    </div>
                                                </div><!-- /.partner-item -->

                                                <div class="partner-item">
                                                    <div class="inner-item">
                                                        <a target="_blank" href="#"><img src="assets/img/partners/3.png" alt="image" /></a>
                                                    </div>
                                                </div><!-- /.partner-item -->
                                            </div>

                                            <div class="partner-row clearfix">
                                                <div class="partner-item">
                                                    <div class="inner-item">
                                                        <a target="_blank" href="#"><img src="assets/img/partners/4.png" alt="image" /></a>
                                                    </div>
                                                </div><!-- /.partner-item -->

                                                <div class="partner-item">
                                                    <div class="inner-item">
                                                        <a target="_blank" href="#"><img src="assets/img/partners/5.png" alt="image" /></a>
                                                    </div>
                                                </div><!-- /.partner-item -->

                                                <div class="partner-item">
                                                    <div class="inner-item">
                                                        <a target="_blank" href="#"><img src="assets/img/partners/6.png" alt="image" /></a>
                                                    </div>
                                                </div><!-- /.partner-item -->
                                            </div>
                                        </div><!-- /.partner-wrap -->
                                    </div><!-- /.wprt-partner-grid -->

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <h2>TESTIMONIALS</h2>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                    <div class="wprt-testimonials has-outline arrow-style-2 has-arrows arrow60 arrow-light" data-layout="slider" data-column="1" data-column2="1" data-column3="1" data-column4="1" data-gaph="0" data-gapv="0">
                                        <div id="testimonials-wrap" class="cbp">
                                            <div class="cbp-item">
                                                <div class="customer clearfix">
                                                    <div class="inner">
                                                        <div class="image"><img src="assets/img/testimonials/1.jpg" alt="image" /></div>
                                                        <h4 class="name">DON PAULSON</h4>
                                                        <div class="position">Architectural Co.</div>
                                                        <blockquote class="whisper">Your efficient planning, scheduling, management, and supervision resulted in timely completion and a quality facility...Particularly refreshing was the spirit of cooperation demonstrated by your firm which served to minimize costly delays and contract modifications.</blockquote>
                                                    </div>
                                                </div>
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item">
                                                <div class="customer clearfix">
                                                    <div class="inner">
                                                        <div class="image"><img src="assets/img/testimonials/2.jpg" alt="image" /></div>
                                                        <h4 class="name">DON PAULSON</h4>
                                                        <div class="position">Architectural Co.</div>
                                                        <blockquote class="whisper">Your efficient planning, scheduling, management, and supervision resulted in timely completion and a quality facility...Particularly refreshing was the spirit of cooperation demonstrated by your firm which served to minimize costly delays and contract modifications.</blockquote>
                                                    </div>
                                                </div>
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item">
                                                <div class="customer clearfix">
                                                    <div class="inner">
                                                        <div class="image"><img src="assets/img/testimonials/3.jpg" alt="image" /></div>
                                                        <h4 class="name">DON PAULSON</h4>
                                                        <div class="position">Architectural Co.</div>
                                                        <blockquote class="whisper">Your efficient planning, scheduling, management, and supervision resulted in timely completion and a quality facility...Particularly refreshing was the spirit of cooperation demonstrated by your firm which served to minimize costly delays and contract modifications.</blockquote>
                                                    </div>
                                                </div>
                                            </div><!-- /.cbp-item -->
                                        </div><!-- /#service-wrap -->
                                    </div><!-- /.wprt-service -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section> --}}
                            </div><!-- /.page-content -->
                        </div>
                    </div>
                </div>
            </div>
            <div id="cesiumContainer" style="width: 100%; height: 500px; display: block;"></div>

            <!-- Footer -->
            <footer id="footer">
                <div id="footer-widgets" class="container style-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="widget widget_text">
                                <h2 class="widget-title"><span>ABOUT US</span></h2>
                                <div class="textwidget">
                                    <img src="{{ asset('assets/admin/img/logo.png') }}" width="100"
                                        height="30" alt="image" class="margin-top-5 margin-bottom-25" />
                                    <p>Building isn’t just a job. At the Construction Company, it is our passion. With
                                        every project we undertake, we set the bar high and provide the best people in
                                        the industry, with a true love of what we do to make our Customers’ vision a
                                        reality.</p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
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
                        </div>

                        <div class="col-md-4">
                            <div class="widget widget_information">
                                <h2 class="widget-title"><span>CONTACT INFO</span></h2>
                                <ul class="style-2">
                                    <li class="address clearfix">
                                        <span class="hl">Address:</span>
                                        <span class="text">Jatinegara, Jl. Raya Bekasi KM.22, RT.7/RW.1, Cakung Bar.,
                                            Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13930</span>
                                    </li>
                                    <li class="phone clearfix">
                                        <span class="hl">Phone:</span>
                                        <span class="text">{{ Config('app.admin_nohp') }}</span>
                                    </li>
                                    <li class="email clearfix">
                                        <span class="hl">E-mail:</span>
                                        <span class="text">{{ Config('app.opt_email') }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget widget_spacer">
                                <div class="wprt-spacer clearfix" data-desktop="10" data-mobi="10" data-smobi="10">
                                </div>
                            </div>

                            <div class="widget widget_socials">
                                <div class="socials">
                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-dribbble"></i></a>
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
                            <div id="copyright">CONSTRUCTION TEMPLATE &copy; DESIGN BY BLOGWP.
                            </div><!-- /#copyright -->
                        </div><!-- /.bottom-bar-content -->

                        <div class="bottom-bar-menu">
                            <ul class="bottom-nav">
                                <li><a href="#/">HISTORY</a></li>
                                <li><a href="#/">FAQ</a></li>
                                <li><a href="#/">EVENTS</a></li>
                            </ul>
                        </div><!-- /.bottom-bar-menu -->
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
        Cesium.Ion.defaultAccessToken =
            "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJkZWQ0MTM1Yy03ZjVmLTQxZWItYTQ1NC0yYmM3ZDQ2ZTBjNTUiLCJpZCI6MjE5NTk0LCJpYXQiOjE3MTc0MDMxMzB9.z7-KgL09KT4PHuWN08Z2PNOcYGU4sT_s89FjUrarKAQ";

        // Inisialisasi tampilan CesiumJS
        var viewer = new Cesium.Viewer('cesiumContainer', {
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

        async function loadTileset() {
            try {
                const resource = await Cesium.IonResource.fromAssetId(2275207);
                const tileset = new Cesium.Cesium3DTileset({
                    url: resource
                });
                viewer.scene.primitives.add(tileset);

                // Tambahkan marker setelah tileset dimuat
                var pinBuilder = new Cesium.PinBuilder();
                viewer.entities.add({
                    name: 'Marker',
                    position: Cesium.Cartesian3.fromDegrees(106.93242431518361, -6.186088025422655),
                    billboard: {
                        image: pinBuilder.fromColor(Cesium.Color.RED, 48).toDataURL(),
                        verticalOrigin: Cesium.VerticalOrigin.BOTTOM
                    }
                });

                viewer.entities.add({
                    name: 'Jepang',
                    position: Cesium.Cartesian3.fromDegrees(139.87993405013398, 35.632811166900645),
                    billboard: {
                        image: pinBuilder.fromColor(Cesium.Color.RED, 48).toDataURL(),
                        verticalOrigin: Cesium.VerticalOrigin.BOTTOM
                    }
                });

                viewer.camera.setView({
                    destination: Cesium.Cartesian3.fromDegrees(139.87993405013398, 35.632811166900645, 20000000),
                    orientation: {
                        heading: 0,
                        pitch: Cesium.Math.toRadians(-90),
                        roll: 0
                    }
                });

                 // Mulai animasi berputar
                 var startTime = Cesium.JulianDate.now();
                viewer.scene.preRender.addEventListener(function(scene, time) {
                    var currentTime = Cesium.JulianDate.now();
                    var elapsedTime = Cesium.JulianDate.secondsDifference(currentTime, startTime);
                    var rotationSpeed = 0.1; // Kecepatan rotasi dalam radian per detik
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
