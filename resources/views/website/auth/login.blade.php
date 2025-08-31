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

    </div>
    <!-- Offcanvas End -->