@extends('website.auth.layouts.master')
@section('title', 'صفحة الدخول')
@section('content')
    <form action="{{ route('dashboard.login') }}" method="POST">
        @csrf
        <a href="{{ route('web-site.index') }}"><img src="{{ asset('dashboard') }}/assets/images/logo-icon.png"
                class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
        <h5 class="mb-3 text-center">الرجاء تسجيل دخول الادمن</h5>

        <div class="form-floating mb-2">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                id="floatingusername" placeholder="name@example.com">
            <label for="floatingusername">أسم المستخدم</label>
            @error('username')
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
        <button class="btn btn-primary w-100" type="submit">تسجيل الدخول</button>


        <p class="mb-0 text-muted mt-3 text-center">©
            <script>
                document.write(new Date().getFullYear())
            </script> Back-Link.
        </p>
    </form>
@endsection
