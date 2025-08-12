@extends('dashboard.auth.layouts.master')
@section('title', 'صفحة الدخول')
@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <a href="index.html"><img src="{{ asset('dashboard') }}/assets/images/logo-icon.png"
                class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
        <h5 class="mb-3 text-center">الرجاء تسجيل الدخول</h5>

        <div class="form-floating mb-2">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingEmail"
                placeholder="name@example.com">
            <label for="floatingEmail">البريد الالكترونى</label>
            @error('email')
                <span class="invalid-feedback d-block text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                id="floatingPassword" placeholder="************">
            <label for="floatingPassword">كلمة المرور</label>
            @error('password')
                <span class="invalid-feedback d-block text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="d-flex justify-content-between">
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">تذكرنى</label>
                </div>
            </div>
            <p class="forgot-pass mb-0"><a href="reset-password.html" class="text-dark small fw-bold">هل نسيت كلمة السر
                    ؟</a>
            </p>
        </div>

        <button class="btn btn-primary w-100" type="submit">تسجيل الدخول</button>

        <div class="col-12 text-center mt-3">
            <p class="mb-0 mt-3"><small class="text-dark me-2">ليس لديك حساب؟</small> <a href="{{ route('register') }}"
                    class="text-dark fw-bold">اشتراك</a></p>
        </div><!--end col-->

        <p class="mb-0 text-muted mt-3 text-center">©
            <script>
                document.write(new Date().getFullYear())
            </script> Back-Link.
        </p>
    </form>
@endsection
