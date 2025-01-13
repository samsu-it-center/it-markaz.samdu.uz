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

    <link rel="stylesheet" href="{{ asset('site/assets/css/contact.css') }}">

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .flag {
            padding: 5px;
            width: 30px;
        }

        /* Navbar Background */
        .custom-navbar {
            background-color: #004a9f;
            padding: 10px 20px;
            margin-bottom: 0px !important;

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
            padding: 0px 10px;
            transition: all 0.3s ease-in-out;
        }

        /* Hover Effect for Icon Buttons */
        .custom-navbar .icon-btn:hover {
            background-color: #ffffff;
            color: #004a9f;
        }

        /* Dropdown styles */
        .custom-navbar .dropdown {
            position: relative;
        }

        .custom-navbar .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            display: none; /* Hide the dropdown by default */
            background-color: #004a9f;
            border-radius: 5px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            min-width: 160px;
        }

        .custom-navbar .dropdown-menu .dropdown-item {
            color: #ffffff;
            padding: 10px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s ease-in-out;
            border-radius: 10px;
        }

        .custom-navbar .dropdown-menu .dropdown-item:hover {
            background-color: #fff;
            border-radius: 10px;
            color: #004a9f;
        }


        .custom-navbar .dropdown:hover .dropdown-menu {
            display: block;
        }

        #myDiv {
            margin-right: 450px !important;
        }

        .menu {
            display: flex;
        }

        .header-right-content {
            display: none !important;
        }

        @media (max-width: 1024px) {
            #myDiv {
                margin-right: 0 !important;
            }

            .menu {
                display: none;
            }

            .nav {
                display: none;
            }

            .header-right-content {
                display: block !important;
            }

            .menu-bar {
                color: #fff;
            }


            .custom-navbar .dropdown-menu {
                position: relative;
                top: auto;
                left: auto;
                width: 100%;
            }

            .custom-navbar .dropdown:hover .dropdown-menu {
                display: block;
            }


            .logo-area {
                display: block;
                margin-left: 0;
                margin-right: auto;
            }
        }


        @media (min-width: 1025px) {
            .logo-area {
                display: block;
            }
        }

        /* Desktop uchun margin-top */
        #side-bar {
            margin-top: 128px;
        }

        /* Mobile uchun margin-top 0 bo'lishi uchun */
        @media (max-width: 1025px) {
            #side-bar {
                margin-top: 75px;
            }
        }


        /* start of slider*/


        .slider {
            position: relative;
            width: 100%;
            height: 80vh;
            margin: auto;
            overflow: hidden;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 100%;
        }

        .slides > div {
            position: relative;
            min-width: 100%;
            height: 100%;
        }

        .slides img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slides .caption {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3));
            color: #f4f4f4;
            padding: 15px 30px;
            border-radius: 10px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
        }

        .buttons {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            padding: 0;
            color: #004A9F;
        }

        .buttons button {
            background-color: transparent;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 24px;
            padding: 0; /* Tugmalar ichki masofasini olib tashlash */
            margin: 0; /* Oraliqlarni yo'q qilish */
        }

        .buttons .left-button {
            text-align: left; /* Chapga yopishgan */
            color: #004A9F;
            margin-left: 10px;
        }

        .buttons .right-button {
            text-align: right; /* O'ngga yopishgan */
            color: #004A9F;
            margin-right: 10px;
        }

        .buttons button:hover {
            color: rgba(255, 255, 255, 0.8);
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .slider {
                height: 60vh;
            }

            .slides .caption {
                font-size: 16px;
                padding: 10px 20px;
            }

            .buttons button {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            .slider {
                height: 50vh;
            }

            .slides .caption {
                font-size: 14px;
                padding: 8px 15px;
            }

            .buttons button {
                font-size: 16px;
            }
        }

        /* end of slider*/

        /* Container for Cards */
        .container-my {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
        }

        /* Main Card */
        .card-about {
            position: relative;
            width: 48%;
            height: 40vh;
            margin-bottom: 20px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            background-color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-about:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        /* Title Section */
        .card-about .title {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background: linear-gradient(to right, #336699, #004A9F);
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            justify-content: center;
            letter-spacing: 1.5px;
            z-index: 2;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            position: relative;
            padding: 15px;
        }

        /* Ornament/Divider for Title */
        .card-about .title::before,
        .card-about .title::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 4px;
            background: white;
            top: 50%;
            transform: translateY(-50%);
            z-index: 3;
        }

        .card-about .title::before {
            left: 15px;
        }

        .card-about .title::after {
            right: 15px;
        }

        /* Mobil qurilmalar uchun */
        @media (max-width: 768px) {
            .card-about .title {
                font-size: 1.2rem; /* Shrinking the font size */
                height: 50px; /* Reducing the height */
                padding: 10px; /* Adjusting the padding */
                letter-spacing: 1px; /* Decreasing letter spacing */
            }

            .card-about .title::before,
            .card-about .title::after {
                width: 30px; /* Adjusting the size of the ornament lines */
            }
        }

        @media (max-width: 480px) {
            .card-about .title {
                font-size: 1rem; /* Even smaller font size for very small devices */
                height: 40px; /* Further reducing the height */
                padding: 8px; /* Smaller padding */
                letter-spacing: 0.8px; /* Narrower letter spacing */
            }

            .card-about .title::before,
            .card-about .title::after {
                width: 20px; /* Even smaller lines */
            }
        }


        /* Image Section - Using <img> tag */
        .card-about .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.6);
            transition: filter 0.3s ease;
        }

        .card-about:hover .image img {
            filter: brightness(0.9);
        }

        /* Content Section */
        .card-about .content {
            position: absolute;
            bottom: 0px;
            left: 0;
            right: 0;
            padding: 20px;
            text-align: left;
            color: white;
            backdrop-filter: blur(8px);
            background: rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            transform: translateY(100%);
            width: 100%;
        }

        .card-about:hover .content {
            transform: translateY(0);
        }

        .card-about .content h2 {
            font-size: 2.2rem;
            margin: 10px 0;
        }

        .card-about .content p {
            font-size: 1.1rem;
            line-height: 1.5;
        }

        .card-about .content .btn {
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #336699;
            color: white;
            font-size: 1rem;
            text-decoration: none;
            border-radius: 50px;
            transition: background-color 0.3s ease;
        }

        .card-about .content .btn:hover {
            background-color: #28557a;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .card-about {
                width: 48vw;
                height: 30vh;
            }
        }

        @media (max-width: 480px) {
            .card-about {
                width: 90vw;
                height: 28vh;
            }
        }

        .course-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 15px;
            overflow: hidden;
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        h1 {
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
        }

        /* Zamonaviy bog'lanish tugmasi */
        .contact-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 70px;
            height: 70px;
            background-color: #004a9f; /* Tugma fon rangi */
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 32px;
            box-shadow: 0 0 12px rgba(0, 74, 159, 0.8), 0 0 25px rgba(0, 74, 159, 0.5);
            transition: all 0.3s ease-in-out;
            cursor: pointer;
            z-index: 1000;
            animation: pulse-animation 1s infinite; /* Animatsiya qo'shildi */
        }

        @keyframes pulse-animation {
            0% {
                transform: scale(1);
                box-shadow: 0 0 12px rgba(0, 74, 159, 0.8), 0 0 25px rgba(0, 74, 159, 0.5);
            }
            50% {
                transform: scale(1.1);
                box-shadow: 0 0 20px rgba(0, 74, 159, 1), 0 0 40px rgba(0, 74, 159, 1);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 12px rgba(0, 74, 159, 0.8), 0 0 25px rgba(0, 74, 159, 0.5);
            }
        }

        .contact-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(0, 74, 159, 1), 0 0 40px rgba(0, 74, 159, 1);
        }

        .contact-btn i {
            transition: color 0.3s ease;
        }

        .contact-btn:hover i {
            color: #00e6e6; /* Ikonkani hover holatida o'zgartirish */
        }


        /* Sidebar default style */
        #side-bar-apply {
            position: absolute;
            overflow: hidden;
            top: 0px;
            right: -100%;
            width: 380px;
            padding: 40px 35px;
            padding-top: 50px;
            height: 100%;
            display: block;
            background-color: white;
            backdrop-filter: blur(7px);
            z-index: 1900;
            transition: all 600ms ease;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            overflow: visible;
        }

        /* Sidebar visible state */
        #side-bar-apply.active {
            left: 0; /* Sidebarni ko'rsatish uchun chapdan ko'rsatiladi */
        }



        /* Close button style */
        /*#side-bar-apply .close-icon-menu {*/
        /*    position: absolute;*/
        /*    top: 5px; !* Tugmachani pastroqqa tushirish *!*/
        /*    right: 10px;*/
        /*    width: 45px; !* Kenglik *!*/
        /*    height: 45px; !* Balandlik *!*/
        /*    background: #09a24f;*/
        /*    color: #fff;*/
        /*    border: none;*/
        /*    font-size: 20px; !* Ikonani o'lchamini belgilash *!*/
        /*    cursor: pointer;*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        /*}*/


        /* Sidebar content style */
        #side-bar-apply .inner-content {
            overflow-y: auto; /* Scroll qo'shish */
            padding: 20px;
            height: calc(100vh - 120px); /* Paddingsiz 100% bo'lib chiqmasin */
        }

        /* Sidebar form container */
        #side-bar-apply .form-container {
            padding: 50px;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-sizing: border-box;
        }

        /* Input and Textarea styling */
        #side-bar-apply input,
        #side-bar-apply textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #004a9f;
        }

        /* Button styling */
        #button-modal-contact {
            background-color: #004a9f;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            width: 100%;
        }

        /*!* Responsive adjustments for mobile *!*/
        /*@media (max-width: 768px) {*/
        /*    #side-bar-apply {*/
        /*        width: 100%;*/
        /*        top: 100px !important;*/
        /*    }*/
        /*}*/


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

<script>
    const slides = document.querySelector('.slides');
    const slideCount = document.querySelectorAll('.slides > div').length;
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');

    let currentIndex = 0;

    function showSlide(index) {
        slides.style.transform = `translateX(-${index * 100}%)`;
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slideCount;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slideCount) % slideCount;
        showSlide(currentIndex);
    }

    nextButton.addEventListener('click', nextSlide);
    prevButton.addEventListener('click', prevSlide);

    // Auto-slide functionality
    setInterval(nextSlide, 3000);
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sideBar = document.getElementById("side-bar-apply");
        const closeBtn = document.querySelector(".close-icon-menu");
        const openBtn = document.getElementById("contact-btn"); // Open button to show sidebar

        // Show sidebar when open button is clicked
        openBtn.addEventListener("click", function () {
            sideBar.classList.add("active"); // Add 'active' class to show sidebar
            sideBar.classList.remove("hidden"); // Remove 'hidden' class
        });

        // Close sidebar when "X" button is clicked
        closeBtn.addEventListener("click", function () {
            sideBar.classList.remove("active"); // Remove 'active' class to hide sidebar
            setTimeout(() => sideBar.classList.add("hidden"), 300); // Add 'hidden' class after transition
        });
    });


    // document.addEventListener("DOMContentLoaded", function () {
    //     const contactBtn = document.getElementById("contact-btn");
    //     const sideBar = document.getElementById("side-bar-apply");
    //     const closeBtn = document.getElementById("close-btn");
    //
    //     // Contact button click - show sidebar
    //     contactBtn.addEventListener("click", function () {
    //         sideBar.classList.add("active");
    //         sideBar.classList.remove("hidden");
    //     });
    //
    //     // Close button click - hide sidebar
    //     closeBtn.addEventListener("click", function () {
    //         sideBar.classList.remove("active");
    //         setTimeout(() => sideBar.classList.add("hidden"), 300); // Delay for smooth transition
    //     });
    // });


</script>

</body>
</html>
