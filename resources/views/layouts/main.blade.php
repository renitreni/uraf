<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/embassy-logo.png') }}" rel="icon">
    <link href="{{ asset('theme/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('theme/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('theme/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container">
        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/embassy-logo.png') }}" alt="" class="img-fluid">
                <span class="text-light">Philippine Embassy Of Riyadh (URAF)</span>
            </a>
        </div>
        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li><a href="{{ route('home.uraf-form') }}">URAF Form</a></li>
                <li><a href="{{ route('home.followup.form') }}">Follow-Up Form</a></li>
            </ul>
        </nav>
    </div>
</header><!-- End #header -->

@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            YARAMAY COMPUTER MAINTENANCE SERVICES
            <br>Copyright &copy; <script>document.write(new Date().getFullYear());</script>
            <br>All Rights Reserved
        </div>
    </div>
</footer><!-- End #footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('theme/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('theme/assets/js/main.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@yield('scripts')
</body>
<!-- Company Managed By: Yaramay Services -->
<!-- Website Author: Renier R. Trenuela II -->
<!-- Year Started: 2020 -->
</html>
