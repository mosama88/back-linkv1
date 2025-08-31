 <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="{{route('web-site.index')}}">
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
                            <i class="fa-solid fa-user"></i> البروفايل
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
                    <li><a href="{{route('web-site.index')}}" class="sub-menu-item">الرئيسية</a></li>

                    <li><a href="ai-about.html" class="sub-menu-item">من نحن</a></li>

                    <li><a href="ai-pricing.html" class="sub-menu-item">الأشتراكات</a></li>


                    <li><a href="{{route('web-site.contact')}}" class="sub-menu-item">تواصل معنا</a></li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->