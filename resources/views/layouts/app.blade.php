<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME', "IT Markaz") }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/plugins/animate.min.css') }}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/plugins/fontawesome.min.css') }}">
    <!-- bootstrap min css -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/vendor/bootstrap.min.css') }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/plugins/swiper.min.css') }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/vendor/magnific-popup.css') }}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/vendor/metismenu.css') }}">
    <!-- nice select js -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/css/plugins/jquery-ui.css') }}">
    <!-- custom style css -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">

    <style>
        .flag {
            padding: 5px;
            width: 30px;
        }

        /* Navbar Background */
        .custom-navbar {
            background-color: #004a9f;
            padding: 10px 20px;

        }

        /* Navbar Links */
        .custom-navbar .my-nav-link {
            color: #ffffff;
            font-size: 16px;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        /* Hover Effect on Links */
        .custom-navbar .my-nav-link:hover {
            background-color: #ffffff;
            color: #004a9f;
            text-decoration: none;
        }

        /* Active Link Effect */
        .custom-navbar .my-nav-link.active {
            background-color: #ffffff;
            color: #004a9f;
            font-weight: bold; /* Tanlangan linkni qalin qilib ko'rsatish */
        }

        /* Buttons for right-side */
        .custom-navbar .btn {
            border-radius: 5px;
            padding: 8px 15px;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
            background-color: #ffffff;
        }

        /* Hover Effect for Buttons */
        .custom-navbar .btn:hover {
            background-color: lightgrey;
            color: #004a9f;
            border-color: #ffffff;
        }

        /* Icon Buttons */
        .custom-navbar .icon-btn {
            background-color: transparent;
            color: #ffffff;
            border: 1px solid #ffffff;
            border-radius: 5px;
            padding: 6px 10px;
            transition: all 0.3s ease-in-out;
        }

        /* Hover Effect for Icon Buttons */
        .custom-navbar .icon-btn:hover {
            background-color: #ffffff;
            color: #004a9f;
        }

        /* Desktop yoki katta ekranlar uchun */
        #myDiv {
            margin-right: 450px !important;
        }

        .menu {
            display: flex; /* Tugmalar ko‘rinadi */
        }

        .header-right-content {
            display: none !important;
        }

        /* Mobil ekranlar uchun (768px yoki kichikroq) */
        @media (max-width: 768px) {
            #myDiv {
                margin-right: 0 !important;
            }

            .menu {
                display: none; /* Menyu butunlay yashiriladi */
            }

            .nav {
                display: none;
            }

            .header-right-content {
                display: block !important;
            }

            .menu-bar {
                color: #fff;
                /*border-radius: 3px;*/
            }
        }

    </style>
</head>

<body class="page">
@include('layouts.header')

@yield('content')

{{--<x-gallery></x-gallery>--}}
<!-- footer -->
<x-footer></x-footer>

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
              style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>

<div id="anywhere-home" class="">
</div>

<!-- scripts -->

<!-- jquery js -->
<script src="{{ asset('site/assets/js/vendor/jquery.min.js') }}"></script>
<!-- bootstrap 5.0.2 -->
<script src="{{ asset('site/assets/js/plugins/bootstrap.min.js') }}"></script>
<!-- jquery ui js -->
<script src="{{ asset('site/assets/js/vendor/jquery-ui.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('site/assets/js/vendor/waw.js') }}"></script>
<!-- mobile menu -->
<script src="{{ asset('site/assets/js/vendor/metismenu.js') }}"></script>
<!-- magnific popup -->
<script src="{{ asset('site/assets/js/vendor/magnifying-popup.js') }}"></script>
<!-- swiper JS 10.2.0 -->
<script src="{{ asset('site/assets/js/plugins/swiper.js') }}"></script>
<!-- counterup -->
<script src="{{ asset('site/assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('site/assets/js/vendor/waypoint.js') }}"></script>
<!-- isotop mesonary -->
<script src="{{ asset('site/assets/js/plugins/isotop.js') }}"></script>
<script src="{{ asset('site/assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
<!-- isotop mesonary end-->
<script src="{{ asset('site/assets/js/plugins/resizer-sensor.js') }}"></script>
<script src="{{ asset('site/assets/js/plugins/sticky-sidebar.js') }}"></script>
<script src="{{ asset('site/assets/js/vendor/chroma.min.js') }}"></script>
<script src="{{ asset('site/assets/js/plugins/twinmax.js') }}"></script>
<!-- dymanic Contact Form -->
<script src="{{ asset('site/assets/js/plugins/contact.form.js') }}"></script>
<script src="{{ asset('site/assets/js/plugins/nice-select.min.js') }}"></script>
<!-- main Js -->
<!-- Bootstrap Icons (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('site/assets/js/main.js') }}"></script>
</body>
</html>
