<!doctype html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>Back Link - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template">
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern">
    <meta name="author" content="Shreethemes">
    <meta name="email" content="support@shreethemes.in">
    <meta name="website" content="https://shreethemes.in">
    <meta name="Version" content="v4.8.0">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('website') }}/assets/images/favicon.ico">

    <!-- Css -->
    <link href="{{ asset('website') }}/assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <link href="{{ asset('website') }}/assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('website') }}/assets/css/bootstrap.min.css" id="bootstrap-style" class="theme-opt"
        rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('website') }}/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('website') }}/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
    <!--     font-family: DroidKufi-Regular; -->
    <link href="{{ asset('ar-font') }}/stylesheet.css" type="text/css" rel="stylesheet">
    <!-- Style Css-->
    <link href="{{ asset('website') }}/assets/css/style.min.css" id="color-opt" class="theme-opt" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('website') }}/assets/css/style-font.css" type="text/css" rel="stylesheet">



</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->


    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="#">
                    <img src="{{ asset('website') }}/assets/images/logo-dark.png" height="24" class="logo-light-mode"
                        alt="">
                    <img src="{{ asset('website') }}/assets/images/logo-light.png" height="24"
                        class="logo-dark-mode" alt="">
                </a>
            </div>

            <!-- Logo End -->

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

            <!--Login button Start-->
            <ul class="buy-button list-inline mb-0">
                <li class="list-inline-item mb-0">
                    <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight">
               
                        
                                تسجيل الدخول
                    </a>

                </li>

                <li class="list-inline-item ps-1 mb-0">
                    <a href="https://1.envato.market/landrick" target="_blank">
                        <div class="btn btn-icon btn-pills btn-primary"><i data-feather="shopping-cart"
                                class="fea icon-sm"></i></div>
                    </a>
                </li>
            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu" id="navmenu-nav">
                    <li class="has-submenu">
                        <a href="#home">الرئيسية</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#service">المميزات</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#pricing">الأسعار</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#contact">أتصل بنا</a>
                    </li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="bg-home bg-light d-flex align-items-center"
        style="background: url('assets/images/onepage/bg.png') top left no-repeat; height: auto;" id="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 text-center mt-0 mt-md-5 pt-0 pt-md-5">
                    <div class="title-heading margin-top-100">
                        <h1 class="heading mb-3">ما هو الـ <span class="text-primary">Backlink</span></h1>
                        <p class="para-desc mx-auto text-muted">شرح مبسّط للروابط الخارجية، لماذا تهمّ محركات البحث،
                            وكيف تبنيها بطريقة سليمة دون تعرّض موقعك لعقوبات.</p>
                        <div class="text-center subcribe-form mt-4 pt-2">
                            <form>
                                <div class="mb-0">
                                    <input type="email" id="email3" name="email" class="shadow rounded-pill"
                                        required="" placeholder="Email Address">
                                    <button type="submit" class="btn btn-pills btn-primary">Get Started</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="home-dashboard onepage-hero">
                        <img src="{{ asset('website') }}/assets/images/Back-linksTypes.png" alt=""
                            class="img-fluid rounded">
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Features Start -->
    <section class="section pb-0" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">أنواع الـ Backlinks</h4>
                        <p class="text-muted para-desc mx-auto mb-0">مفهوم استخدام الروابط ليس جديدًا، فقد كان
                            موجودًا منذ تأسيس خوارزمية جوجل الأصلية، PageRank. ورغم مرور سنوات عديدة والتغييرات العديدة
                            التي أُجريت على الخوارزمية، لا تزال الروابط الخلفية تحافظ على أهميتها كمؤشر تصنيف مهم.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 col-12 mt-5 pt-4">
                    <div class="features feature-primary">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-edit-alt h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>روابط طبيعية (Natural)</h5>
                            <p class="text-muted mb-0">يحصل عليها محتواك من مواقع أخرى تلقائيًا لأنها مفيدة.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 pt-4">
                    <div class="features feature-primary">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-vector-square h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>روابط مُكتسبة</h5>
                            <p class="text-muted mb-0">نتيجة بناء علاقات، نشر ضيوف (Guest Posting) أو نشر محتوى جذاب.
                            </p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 pt-4">
                    <div class="features feature-primary">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-file-search-alt h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>روابط مدفوعة</h5>
                            <p class="text-muted mb-0">شراء روابط — محظور في سياسات Google إذا كان بدون إشارة
                                rel="sponsored".</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 pt-4">
                    <div class="features feature-primary">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-airplay h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>روابط السيرة الذاتية لمشاركات الضيوف</h5>
                            <p class="text-muted mb-0">لا يزالون يؤثرون على تحسين محركات البحث (SEO) لأن الزوار غالبًا
                                ما يضيفون روابط خلفية إلى مواقع الويب ذات عدد مشاهدات أعلى. فهم يعرفون أين يلجأ الآخرون
                                لقراءة المدونات والمقالات والعثور على وصفات الطعام.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 pt-4">
                    <div class="features feature-primary">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-calendar-alt h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>الروابط الخلفية التحريرية</h5>
                            <p class="text-muted mb-0"> كقاعدة عامة، يتم تشكيل الروابط الخلفية
                                التحريرية عندما يتم ذكر المحتوى الخاص بك (مثل مقال أو رسم بياني) كمصدر لمعلومات معينة،
                                أو يتم الاستشهاد بممثل تجاري، أو عندما يظهر موقعك في ملخص الروابط حول موضوع معين.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 pt-4">
                    <div class="features feature-primary">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-clock h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>الروابط الخلفية من الندوات عبر الإنترنت</h5>
                            <p class="text-muted mb-0">يمكنك الحصول على هذه الروابط الخلفية باستخدام استراتيجيات مشابهة
                                لتلك المستخدمة في الترويج للمدونات. يمكن أن تكون ندوتك الإلكترونية مرجعًا للمواقع
                                الإلكترونية التي تركز عليها للتدوين كضيف.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <img src="{{ asset('website') }}/assets/images/software/mobile01.png" class="img-fluid"
                        alt="">
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4">Seamless Operation via Smart SEO</h4>
                        <p class="text-muted">You can combine all the Landrick templates into a single one, you can
                            take a component from the Application theme and use it in the Website.</p>
                        <ul class="list-unstyled mb-0 text-muted">
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
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="text-primary p-1 px-2 shadow rounded">Read More <i
                                    class="uil uil-angle-right-b"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <!-- Modal Content Start -->
        <div class="modal fade" id="trialform" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content rounded shadow border-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">14 Days Free Trial</h5>
                        <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal"
                            id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="feature-form">
                            <img src="{{ asset('website') }}/assets/images/illustrator/Mobile_notification_SVG.svg"
                                alt="">

                            <div class="content mt-4 pt-2">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Name : <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input type="text" class="form-control ps-5"
                                                        placeholder="Name" name="name" required="">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Email : <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input type="email" class="form-control ps-5"
                                                        placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Password : <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                                    <input type="password" class="form-control ps-5"
                                                        placeholder="Password" required="">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12 mt-2 mb-0">
                                            <div class="d-grid">
                                                <button class="btn btn-primary">Login</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Content End -->


    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Features End -->

    <!-- Pricing Start -->
    <section class="section" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Our Pricing</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                        <div class="card-body">
                            <h6 class="title name fw-bold text-uppercase mb-4">Free</h6>
                            <div class="d-flex mb-4">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price h1 mb-0">0</span>
                                <span class="h4 align-self-end mb-1">/mo</span>
                            </div>

                            <ul class="list-unstyled mb-0 ps-0">
                                <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Source Files</li>
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
                                            class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Free Appointments</li>
                            </ul>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                        <div class="card-body">
                            <h6 class="title name fw-bold text-uppercase mb-4">Professional</h6>
                            <div class="d-flex mb-4">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price h1 mb-0">59</span>
                                <span class="h4 align-self-end mb-1">/mo</span>
                            </div>

                            <ul class="list-unstyled mb-0 ps-0">
                                <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>1 Domain Free</li>
                                <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                            </ul>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Try It Now</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                        <div class="card-body">
                            <h6 class="title name fw-bold text-uppercase mb-4">Ultimate</h6>
                            <div class="d-flex mb-4">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price h1 mb-0">79</span>
                                <span class="h4 align-self-end mb-1">/mo</span>
                            </div>

                            <ul class="list-unstyled mb-0 ps-0">
                                <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                                <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>1 Domain Free</li>
                                <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Free Installment</li>
                            </ul>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Started Now</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Pricing End -->

    <!-- Team Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Our Team Member</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center rounded border-0">
                        <div class="card-body">
                            <div class="position-relative">
                                <img src="{{ asset('website') }}/assets/images/client/01.jpg"
                                    class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                <ul class="list-unstyled mb-0 team-icon">
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="facebook" class="icons"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="instagram" class="icons"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="twitter" class="icons"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="linkedin" class="icons"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                            <div class="content pt-3">
                                <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ronny
                                        Jofra</a></h5>
                                <small class="designation text-muted">UI Designers</small>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center rounded border-0">
                        <div class="card-body">
                            <div class="position-relative">
                                <img src="{{ asset('website') }}/assets/images/client/04.jpg"
                                    class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                <ul class="list-unstyled mb-0 team-icon">
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="facebook" class="icons"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="instagram" class="icons"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="twitter" class="icons"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="linkedin" class="icons"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                            <div class="content pt-3">
                                <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Micheal
                                        Carlo</a></h5>
                                <small class="designation text-muted">UX Designer</small>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center rounded border-0">
                        <div class="card-body">
                            <div class="position-relative">
                                <img src="{{ asset('website') }}/assets/images/client/03.jpg"
                                    class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                <ul class="list-unstyled mb-0 team-icon">
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="facebook" class="icons"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="instagram" class="icons"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="twitter" class="icons"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="linkedin" class="icons"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                            <div class="content pt-3">
                                <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Aliana
                                        Rosy</a></h5>
                                <small class="designation text-muted">Web Developer</small>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center rounded border-0">
                        <div class="card-body">
                            <div class="position-relative">
                                <img src="{{ asset('website') }}/assets/images/client/02.jpg"
                                    class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                <ul class="list-unstyled mb-0 team-icon">
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="facebook" class="icons"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="instagram" class="icons"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="twitter" class="icons"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-primary btn-pills btn-sm btn-icon"><i
                                                data-feather="linkedin" class="icons"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                            <div class="content pt-3">
                                <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Sofia
                                        Razaq</a></h5>
                                <small class="designation text-muted">Web Designer</small>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Team End -->

    <!-- Contact Start -->
    <section class="section pb-0" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Get In Touch !</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2 order-2 order-md-1">
                    <div class="card rounded shadow border-0">
                        <div class="card-body">
                            <div class="custom-form">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Name <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="name" id="name2" type="text"
                                                        class="form-control ps-5" placeholder="First Name :">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" id="email2" type="email"
                                                        class="form-control ps-5" placeholder="Your email :">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Comments</label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                    <textarea name="comments" id="comments2" rows="4" class="form-control ps-5" placeholder="Your Message :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end row-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <div class="d-grid">
                                                <input type="submit" id="submit2" name="send"
                                                    class="submitBnt btn btn-primary" value="Send Message">
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form-->
                            </div><!--end custom-form-->
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 order-1 order-md-2">
                    <div class="title-heading ms-lg-4">
                        <h4 class="mb-4">Contact Details</h4>
                        <p class="text-muted">Start working with <span class="text-primary fw-bold">Landrick</span>
                            that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <div class="card border-0 bg-transparent">
                            <div class="card-body p-0">
                                <div class="contact-detail d-flex align-items-center mt-3">
                                    <div class="icon">
                                        <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                                    </div>
                                    <div class="content overflow-hidden d-block">
                                        <h6 class="fw-bold mb-0">Email</h6>
                                        <a href="mailto:contact@example.com"
                                            class="text-primary">contact@example.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 bg-transparent">
                            <div class="card-body p-0">
                                <div class="contact-detail d-flex align-items-center mt-3">
                                    <div class="icon">
                                        <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                                    </div>
                                    <div class="content overflow-hidden d-block">
                                        <h6 class="fw-bold mb-0">Phone</h6>
                                        <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 bg-transparent">
                            <div class="card-body p-0">
                                <div class="contact-detail d-flex align-items-center mt-3">
                                    <div class="icon">
                                        <i data-feather="map-pin" class="fea icon-m-md text-dark me-3"></i>
                                    </div>
                                    <div class="content overflow-hidden d-block">
                                        <h6 class="fw-bold mb-0">Location</h6>
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                                            data-type="iframe" class="video-play-icon text-primary lightbox">View on
                                            Google map</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end contact-->

        <div class="container-fluid mt-100 mt-60">
            <div class="row">

            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Contact End -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <a href="#" class="logo-footer">
                                    <img src="{{ asset('website') }}/assets/images/logo-light.png" height="24"
                                        alt="">
                                </a>
                                <p class="mt-4">Start working with Landrick that can provide everything you need to
                                    generate awareness, drive traffic, connect.</p>
                                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                    <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick"
                                            target="_blank" class="rounded"><i
                                                class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a>
                                    </li>
                                    <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes"
                                            target="_blank" class="rounded"><i class="uil uil-dribbble align-middle"
                                                title="dribbble"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes"
                                            target="_blank" class="rounded"><i class="uil uil-behance align-middle"
                                                title="behance"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes"
                                            target="_blank" class="rounded"><i
                                                class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/"
                                            target="_blank" class="rounded"><i class="uil uil-instagram align-middle"
                                                title="instagram"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes"
                                            target="_blank" class="rounded"><i class="uil uil-twitter align-middle"
                                                title="twitter"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in"
                                            class="rounded"><i class="uil uil-envelope align-middle"
                                                title="email"></i></a></li>
                                </ul><!--end icon-->
                            </div><!--end col-->

                            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Company</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> About us</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Team</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Project</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Careers</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Login</a></li>
                                </ul>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Usefull Links</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Components</a></li>
                                </ul>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Newsletter</h5>
                                <p class="mt-4">Sign up and receive the latest tips via email.</p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="foot-subscribe mb-3">
                                                <label class="form-label">Write your email <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input type="email" name="email" id="emailsubscribe"
                                                        class="form-control ps-5 rounded" placeholder="Your email : "
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-grid">
                                                <input type="submit" id="submitsubscribe" name="send"
                                                    class="btn btn-soft-primary" value="Subscribe">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="footer-py-30 footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start">
                            <p class="mb-0">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Landrick. Design with <i
                                    class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/"
                                    target="_blank" class="text-reset">Shreethemes</a>.
                            </p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled text-sm-end mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="{{ asset('website') }}/assets/images/payments/american-ex.png"
                                        class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="{{ asset('website') }}/assets/images/payments/discover.png"
                                        class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="{{ asset('website') }}/assets/images/payments/master-card.png"
                                        class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="{{ asset('website') }}/assets/images/payments/paypal.png"
                                        class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="{{ asset('website') }}/assets/images/payments/visa.png"
                                        class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                        </ul>
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
                            <h4 class="card-title text-center">تسجيل الدخول</h4>

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
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
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
                                            <button class="btn btn-primary">Sign in</button>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-12 text-center">
                                        <p class="mb-0 mt-3"><small class="text-dark me-2">ليس لدى حساب؟</small> <a
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
                        class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a>
                </li>
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

    <!-- Javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('website') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- For Menu -->
    <script src="{{ asset('website') }}/assets/libs/gumshoejs/gumshoe.min.js"></script>
    <!-- SLIDER -->
    <script src="{{ asset('website') }}/assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <!-- Lightbox -->
    <script src="{{ asset('website') }}/assets/libs/tobii/js/tobii.min.js"></script>
    <!-- Main Js -->
    <script src="{{ asset('website') }}/assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('website') }}/assets/js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('website') }}/assets/js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>
