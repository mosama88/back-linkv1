@extends('dashboard.auth.layouts.master')
@section('title', 'صفحة الدخول')
@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <a href="index.html"><img src="{{ asset('dashboard') }}/assets/images/logo-icon.png"
                class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
        <h5 class="mb-3 text-center">Please sign in</h5>

        <div class="form-floating mb-2">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="d-flex justify-content-between">
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                </div>
            </div>
            <p class="forgot-pass mb-0"><a href="reset-password.html" class="text-dark small fw-bold">Forgot password ?</a>
            </p>
        </div>

        <button class="btn btn-primary w-100" type="submit">Sign in</button>

        <div class="col-12 text-center mt-3">
            <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a
                    href="{{ route('register') }}" class="text-dark fw-bold">Sign Up</a></p>
        </div><!--end col-->

        <p class="mb-0 text-muted mt-3 text-center">©
            <script>
                document.write(new Date().getFullYear())
            </script> Landrick.
        </p>
    </form>
@endsection
