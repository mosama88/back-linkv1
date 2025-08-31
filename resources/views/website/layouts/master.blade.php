<!doctype html>
<html lang="en" dir="rtl">

<head>
        @include('website.layouts.head')

</head>

<body>


    <!-- Navbar Start -->
   @include('website.layouts.navbar')
    <!-- Navbar End -->


@yield('content')

    <!-- Footer Start -->
       @include('website.layouts.footer')

    <!-- Footer End -->



@include('website.auth.login')
    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
            class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    @include('website.layouts.scripts')
</body>

</html>
