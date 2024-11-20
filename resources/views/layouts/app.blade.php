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

        /* Container styling */
        .single-cat-item {
            display: flex;
            align-items: stretch;
            height: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .single-cat-item .cat-thumb {
            flex: 1; /* Rasm o'lchami mos */
            max-width: 40%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f8f8;
        }

        .single-cat-item .cat-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Rasmlar kesmasdan to'g'ri ko'rinish */
            border-right: 1px solid #ddd;
        }

        .single-cat-item .cat-meta {
            flex: 1; /* Matn o'lchami mos */
            padding: 16px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .cat-title-link {
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
            text-decoration: none;
            margin-bottom: 8px;
        }

        .cat-description {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.5;
        }

        .cat-link-btn {
            display: inline-block;
            margin-top: 8px;
            padding: 8px 12px;
            font-size: 0.85rem;
            font-weight: 500;
            color: #fff;
            background-color: #007bff;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
        }

        .cat-link-btn:hover {
            background-color: #0056b3;
        }

    </style>
</head>

<body class="page">
@include('layouts.header')

@yield('content')

<x-gallery />
<!-- footer -->
<x-footer></x-footer>

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
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
<script src="{{ asset('site/assets/js/main.js') }}"></script>
</body>
</html>
