@extends('dashboard.auth.layouts.master')
@section('title', 'صفحة تسجيل حساب جديد')
@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <a href="index.html"><img src="{{ asset('dashboard') }}/assets/images/logo-icon.png"
                class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
        <h5 class="mb-3 text-center">سجل حسابك</h5>
        <!-- First Nmae-->
        <div class="form-floating mb-2">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput"
                placeholder="Harry">
            <label for="floatingInput">الاسم بالكامل</label>
            @error('name')
                <span class="invalid-feedback d-block text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-floating mb-2">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                id="floatingEmail" placeholder="name@example.com">
            <label for="floatingEmail">البريد الالكترونى</label>
            @error('email')
                <span class="invalid-feedback d-block text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword"
                placeholder="************">
            <label for="floatingPassword">كلمة المرور</label>
            @error('password')
                <span class="invalid-feedback d-block text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation"
                class="form-control @error('password_confirmation') is-invalid @enderror" id="floatingPassword"
                placeholder="************">
            <label for="floatingPassword">تأكيد كلمة المرور</label>
            @error('password_confirmation')
                <span class="invalid-feedback d-block text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">انا اوافق <a href="#" class="text-primary">الشروط
                    والأحكام</a></label>
        </div>

        <button class="btn btn-primary w-100" type="submit">تسجيل</button>

        <div class="col-12 text-center mt-3">
            <p class="mb-0 mt-3"><small class="text-dark me-2">هل لديك حساب بالفعل؟</small> <a href="{{ route('login') }}"
                    class="text-dark fw-bold">تسجيل الدخول</a></p>
        </div><!--end col-->

        <p class="mb-0 text-muted mt-3 text-center">©
            <script>
                document.write(new Date().getFullYear())
            </script> Back-Link.
        </p>
    </form>
@endsection
