<!doctype html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>ما هو Backlink؟ — الروابط الخارجية وأهميتها في السيو</title>
    <meta name="description"
        content="شرح مبسط ومفصل للـ Backlinks (الروابط الخارجية)، أنواعها، فوائدها، وكيفية الحصول عليها بأمان لتحسين ترتيب موقعك في محركات البحث." />
    <!-- Open Graph (مفيد عند المشاركة) -->
    <meta property="og:title" content="ما هو Backlink؟ — الروابط الخارجية وأهميتها في السيو" />
    <meta property="og:description"
        content="شرح مبسط ومفصل للـ Backlinks، أنواعها، فوائدها، وكيفية الحصول عليها بأمان." />
    <meta property="og:type" content="article" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('website') }}/assets/images/favicon.ico">

    <!-- Css -->
    <link href="{{ asset('website') }}/assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <link href="{{ asset('website') }}/assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('website') }}/assets/css/bootstrap-dark-yellow.min.css" id="bootstrap-style" class="theme-opt"
        rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('website') }}/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('website') }}/assets/css/all.min.css" type="text/css" rel="stylesheet">
    <link href="{{ asset('website') }}/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
    <!-- Style Css-->
    <link href="{{ asset('website') }}/assets/css/style-dark-yellow.min.css" id="color-opt" class="theme-opt"
        rel="stylesheet" type="text/css">
</head>

<body>


    <!-- Navbar Start -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="index.html">
                <img src="{{ asset('website') }}/assets/images/logo-dark.png" class="logo-light-mode" height="24"
                    alt="">
                <img src="{{ asset('website') }}/assets/images/logo-light.png" height="24" class="logo-dark-mode"
                    alt="">
            </a>

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
            @auth
                <!--Login button Start-->
                <ul class="buy-button list-inline mb-0">
                    <li class="list-inline-item mb-0">
                        <form action="{{ route('logout') }}" method="POST" class="mb-0">
                            @csrf
                            <button type="submit" class="btn btn-pills btn-primary">
                                <i class="text-white fas fa-power-off mx-1"></i>
                                تسجيل الخروج
                            </button>
                        </form>
                    </li>

                   <li class="list-inline-item mb-0">
                        <a class="btn btn-pills btn-info" href="{{route('profile.edit')}}">
                            <i class="fa-solid fa-right-to-bracket"></i> البروفايل
                        </a>
                    </li>
                </ul>
            @endauth
            @guest
                <!--Login button Start-->
                <ul class="buy-button list-inline mb-0">
                    <li class="list-inline-item mb-0">
                        <a class="btn btn-pills btn-primary" href="javascript:void(0)" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="fa-solid fa-right-to-bracket"></i> تسجيل الدخول
                        </a>
                    </li>
                </ul>
            @endguest

            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-right">
                    <li><a href="index-ai.html" class="sub-menu-item">Home</a></li>

                    <li><a href="ai-about.html" class="sub-menu-item">About us</a></li>

                    <li><a href="ai-pricing.html" class="sub-menu-item">Pricing</a></li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="ai-services.html" class="sub-menu-item">Services </a></li>

                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="blog-grid.html" class="sub-menu-item">Blog Grid</a></li>
                                    <li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                                </ul>
                            </li>

                            <li><a href="helpcenter-overview.html" class="sub-menu-item">Helpcenter </a></li>

                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages
                                </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="auth-login-bg-video.html" class="sub-menu-item">Login</a></li>
                                    <li><a href="auth-signup-bg-video.html" class="sub-menu-item">Singup</a></li>
                                    <li><a href="auth-reset-password-bg-video.html" class="sub-menu-item">Reset
                                            Password</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
                                    <li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                    <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                    <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href="page-contact-one.html" class="sub-menu-item">Contact Us</a></li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100 overflow-hidden">
        <div class="container">
            <div class="row align-items-center pt-5">
                <div class="col-lg-7 col-md-6">
                    <div class="title-heading">
                        <h1 class="heading fw-bold mb-3">The AI Content Plaform <br> for <span
                                class="text-primary typewrite" data-period="2000"
                                data-type='[ "Videos", "Modern Teams", "Social Media" ]'> <span class="wrap"></span>
                            </span></h1>
                        <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on
                            designing and managing conversion centered bootstrap v5 html page.</p>
                        <div class="mt-4 pt-2">
                            <a href="" target="_blank" class="btn btn-primary">Try For Free</a>
                            <p class="text-muted small mb-0 mt-1">No credit card required. Free 14-days trial</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="ai-hero position-relative">
                        <div class="image position-relative">
                            <img src="{{ asset('website') }}/assets/images/laptop.png" class="mx-auto d-block"
                                alt="">
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->



    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">So, how does it works?</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="card border-0 features feature-primary feature-clean p-4">
                        <div class="icons">
                            <i class="mdi mdi-account-search-outline rounded-pill h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">Search & Write Content</h5>
                            <p class="text-muted mb-0">Composed in a pseudo-Latin language which more or less
                                pseudo-Latin language corresponds.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="card border-0 features feature-primary feature-clean p-4">
                        <div class="icons">
                            <i class="mdi mdi-wallet-bifold-outline rounded-pill h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">Discribe Content</h5>
                            <p class="text-muted mb-0">Composed in a pseudo-Latin language which more or less
                                pseudo-Latin language corresponds.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="card border-0 features feature-primary feature-clean p-4">
                        <div class="icons">
                            <i class="mdi mdi-home-plus-outline rounded-pill h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">Generate Content</h5>
                            <p class="text-muted mb-0">Composed in a pseudo-Latin language which more or less
                                pseudo-Latin language corresponds.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="position-relative p-4 rounded shadow">
                        <video class="w-100 rounded" controls autoplay loop>
                            <source src="{{ asset('website') }}/assets/images/video.mp4" type="video/mp4">
                        </video>

                        <div class="position-absolute top-50 start-50 translate-middle">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                class="avatar avatar-small rounded-pill shadow-md card d-flex justify-content-center align-items-center lightbox">
                                <i class="mdi mdi-play mdi-24px text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4">Turn text into high-quality <br> voiceovers with one click</h4>
                        <p class="text-muted">You can combine all the Landrick templates into a single one, you can
                            take a component from the Application theme and use it in the Website.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Digital Marketing
                                Solutions for Tomorrow</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced
                                Marketing Agency</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Create your own skin to
                                match your brand</li>
                        </ul>

                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i
                                class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">The future of AI.</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-pen rounded h3 mb-0"></i>
                        </div>
                        <div class="content ms-4 me-md-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">AI Generator</a></h5>
                            <p class="text-muted mb-0">One disadvantage of Lorum Ipsum is that in Latin frequently than
                                others</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-airplay rounded h3 mb-0"></i>
                        </div>
                        <div class="content ms-4 me-md-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Advanced Dashboard</a>
                            </h5>
                            <p class="text-muted mb-0">One disadvantage of Lorum Ipsum is that in Latin frequently than
                                others</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-credit-card rounded h3 mb-0"></i>
                        </div>
                        <div class="content ms-4 me-md-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Payment Gateways</a>
                            </h5>
                            <p class="text-muted mb-0">One disadvantage of Lorum Ipsum is that in Latin frequently than
                                others</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-globe rounded h3 mb-0"></i>
                        </div>
                        <div class="content ms-4 me-md-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Multi-Lingual</a></h5>
                            <p class="text-muted mb-0">One disadvantage of Lorum Ipsum is that in Latin frequently than
                                others</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-window-grid rounded h3 mb-0"></i>
                        </div>
                        <div class="content ms-4 me-md-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Custom Templates</a>
                            </h5>
                            <p class="text-muted mb-0">One disadvantage of Lorum Ipsum is that in Latin frequently than
                                others</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-life-ring rounded h3 mb-0"></i>
                        </div>
                        <div class="content ms-4 me-md-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Support Platform</a>
                            </h5>
                            <p class="text-muted mb-0">One disadvantage of Lorum Ipsum is that in Latin frequently than
                                others</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="bg-soft-primary ps-4 pt-4 position-relative overflow-hidden rounded shadow">
                        <img src="{{ asset('website') }}/assets/images/saas/classic02.png" class="img-fluid"
                            alt="">
                    </div>
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4">Write Blog Posts, <br> Stories, & Even Books</h4>
                        <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is
                            of great importance: human perception is tuned to recognize certain patterns and repetitions
                            in texts. If the distribution of letters visual impact.</p>
                        <ul class="list-unstyled text-muted mb-0">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Digital Marketing
                                Solutions for Tomorrow</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced
                                Marketing Agency</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Create your own skin to
                                match your brand</li>
                        </ul>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title me-lg-5">
                        <h4 class="title mb-4">Create Content In Single <br> Click With AI Power</h4>
                        <p class="text-muted">This prevents repetitive patterns from impairing the overall visual
                            impression and facilitates the comparison of different typefaces. Furthermore, it is
                            advantageous when the dummy text is relatively realistic.</p>
                        <ul class="list-unstyled text-muted mb-0">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Digital Marketing
                                Solutions for Tomorrow</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced
                                Marketing Agency</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Create your own skin to
                                match your brand</li>
                        </ul>
                    </div>
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 order-1 order-md-2">
                    <div class="bg-soft-primary pe-4 pt-4 position-relative overflow-hidden rounded shadow">
                        <img src="{{ asset('website') }}/assets/images/saas/classic03.png" class="img-fluid"
                            alt="">
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">You don't have to choose between cost, time and quality</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="switcher-pricing d-flex justify-content-center align-items-center mb-4 pb-2">
                        <label class="toggler text-muted toggler--is-active" id="filt-monthly">Monthly</label>
                        <div class="form-check form-switch mx-3">
                            <input class="form-check-input" type="checkbox" id="switcher">
                        </div>
                        <label class="toggler text-muted" id="filt-yearly">Yearly</label>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-12">
                    <div id="monthly" class="wrapper-full">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div
                                    class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Free</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">0</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full
                                                Access</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source
                                                Files</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow border-0 rounded">
                                    <div class="ribbon ribbon-right ribbon-warning overflow-hidden"><span
                                            class="text-center d-block shadow small h6">Best</span></div>
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Starter</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">39</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full
                                                Access</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source
                                                Files</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Free
                                                Appointments</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div
                                    class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Professional</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">59</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full
                                                Access</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source
                                                Files</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>1 Domain
                                                Free</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Enhanced
                                                Security</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Try It Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div
                                    class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Ultimate</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">79</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full
                                                Access</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Enhanced
                                                Security</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source
                                                Files</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>1 Domain
                                                Free</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Free
                                                Installment</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Started Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>

                    <div id="yearly" class="wrapper-full hide">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div
                                    class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Free</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">10</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full
                                                Access</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source
                                                Files</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow border-0 rounded">
                                    <div class="ribbon ribbon-right ribbon-warning overflow-hidden"><span
                                            class="text-center d-block shadow small h6">Best</span></div>
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Starter</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">139</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full
                                                Access</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source
                                                Files</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Free
                                                Appointments</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div
                                    class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Professional</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">159</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full
                                                Access</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source
                                                Files</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>1 Domain
                                                Free</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Enhanced
                                                Security</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Try It Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div
                                    class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                                    <div class="card-body">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Ultimate</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">179</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full
                                                Access</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Enhanced
                                                Security</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source
                                                Files</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>1 Domain
                                                Free</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Free
                                                Installment</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Started Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

    </section><!--end section-->


    <!-- Footer Start -->
    <footer class="footer"
        style="background-image: url('assets/images/svg-map.svg'); background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 py-lg-5">
                    <div class="footer-py-60 text-center">
                        <a href="#" class="logo-footer">
                            <img src="{{ asset('website') }}/assets/images/logo-light.png" height="32"
                                alt="">
                        </a>
                        <p class="mt-4 para-desc mx-auto">Start working with Landrick that can provide everything you
                            need to generate awareness, drive traffic, connect.</p>
                        <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                            <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick"
                                    target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle"
                                        title="Buy Now"></i></a></li>
                            <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes"
                                    target="_blank" class="rounded"><i class="uil uil-dribbble align-middle"
                                        title="dribbble"></i></a></li>
                            <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes"
                                    target="_blank" class="rounded"><i class="uil uil-behance align-middle"
                                        title="behance"></i></a></li>
                            <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes"
                                    target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle"
                                        title="facebook"></i></a></li>
                            <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/"
                                    target="_blank" class="rounded"><i class="uil uil-instagram align-middle"
                                        title="instagram"></i></a></li>
                            <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes"
                                    target="_blank" class="rounded"><i class="uil uil-twitter align-middle"
                                        title="twitter"></i></a></li>
                            <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in"
                                    class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a>
                            </li>
                        </ul><!--end icon-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="footer-py-30 footer-bar bg-footer">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="text-center">
                            <p class="mb-0">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Landrick. Design with <i
                                    class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/"
                                    target="_blank" class="text-reset">Shreethemes</a>.
                            </p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div>
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header p-4 border-bottom" dir="ltr">
            <h5 id="offcanvasRightLabel" class="mb-0">
                <img src="{{ asset('website') }}/assets/images/logo-dark.png" height="24" class="light-version"
                    alt="">
                <img src="{{ asset('website') }}/assets/images/logo-light.png" height="24" class="dark-version"
                    alt="">
            </h5>
            <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas"
                aria-label="Close"><i class="uil uil-times fs-4"></i></button>
        </div>
        <div class="offcanvas-body p-4">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('website') }}/assets/images/contact.svg" class="img-fluid d-block mx-auto"
                        alt="">
                    <div class="card border-0 mt-4" style="z-index: 1">
                        <div class="card-body p-0">
                            <h4 class="card-title text-center">برجاء تسجيل الدخول</h4>
                            <form action="{{ route('login') }}" method="POST" class="login-form mt-4">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">البريد الالكترونى <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="email" name="email"
                                                    class="form-control ps-5 @error('email') is-invalid @enderror"
                                                    id="floatingEmail" placeholder="name@example.com">
                                                @error('email')
                                                    <span class="invalid-feedback d-block text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror


                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">كلمة المرور <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" name="password"
                                                    class="form-control ps-5 @error('password') is-invalid @enderror"
                                                    id="floatingpassword" placeholder="************">
                                                @error('password')
                                                    <span class="invalid-feedback d-block text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="remember" type="checkbox"
                                                        value="" id="flexCheckDefault">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault">تذكرنى</label>
                                                </div>

                                            </div>
                                            <p class="forgot-pass mb-0"><a href="auth-cover-re-password.html"
                                                    class="text-dark fw-bold">نسيت كلمة المرور ؟</a></p>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12 mb-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">تسجيل الدخول</button>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-12 text-center">
                                        <p class="mb-0 mt-3"><small class="text-dark me-2">ليس لدى حساب ؟</small> <a
                                                href="{{ route('register') }}" class="text-dark fw-bold">إنشاء حساب
                                                جديد</a>
                                        </p>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas-footer p-4 border-top text-center">
            <ul class="list-unstyled social-icon social mb-0">
                <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick" target="_blank"
                        class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank"
                        class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i
                            class="uil uil-envelope align-middle" title="email"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank"
                        class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
            </ul><!--end icon-->
        </div>
    </div>
    <!-- Offcanvas End -->


    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
            class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('website') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('website') }}/assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="{{ asset('website') }}/assets/libs/tobii/js/tobii.min.js"></script>
    <!-- simplebar -->
    <script src="{{ asset('website') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('website') }}/assets/js/fontawesome.min.js"></script>

    <!-- Main Js -->
    <script src="{{ asset('website') }}/assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('website') }}/assets/js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('website') }}/assets/js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>
