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
    <link rel="stylesheet" href="{{ asset('site/assets/css/my.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/css/contact-modal.css') }}">

    <style>
        #anywhere-home-apply {
            cursor: url("{{ asset('site/assets/images/banner/shape/close.svg') }}"), auto;
            background: #0e1013;
            position: fixed;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: opacity 500ms ease-in-out;
            pointer-events: none; /* Obyektga bosishni o'chirish */
            z-index: 50;
        }

        #anywhere-home-apply.bgshow-apply {
            background: #0e1013;
            opacity: 0.7; /* 70% o'rniga to'g'ri yozilishi kerak */
            visibility: visible;
            pointer-events: auto; /* "visible" noto'g'ri, "auto" bo'lishi kerak */
            z-index: 999;
            top: 0;
        }


        /* Faqat faollashtirilgan tabni ko'rsatish */
        .tab-pane {
            display: none; /* Barcha tablarni yashiramiz */
        }

        .tab-pane.show.active {
            display: block !important; /* Faqat tanlangan tab ko‘rinadi */
        }

        /* Matn ko‘rinishini ta’minlash */
        .tab-pane {
            color: black !important; /* Matn qora bo‘lsin */
            opacity: 1 !important;
            z-index: 1000 !important;
        }

        /* Agar element ekranda pastga tushib ketgan bo‘lsa */
        .tab-content {
            min-height: 200px; /* Bo‘sh joy qoldirish */
        }

        /* Agar element boshqa narsa ostida qolib ketayotgan bo‘lsa */
        .tab-pane {
            position: relative;
            z-index: 10;
        }

        .tab-pane {
            scroll-margin-top: 80px; /* Menyu balandligiga mos ravishda */
        }


        .tab-content {
            position: relative;
            z-index: 0; /* Navbar ostiga kirib ketish uchun */
            margin-top: -40px; /* Navbar ostiga kira boshlashi uchun */
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>


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
    document.addEventListener('DOMContentLoaded', function () {
        // Kontakt tugmasini bosganda menyuni ochish
        document.getElementById('contact-btn').addEventListener('click', function () {
            document.querySelector('.side-bar-apply').classList.add('show');  // Menyu ko'rsatish
            document.body.style.overflow = 'hidden';  // Sahifani aylantirishni to'xtatish
        });

        // Yopish tugmasini bosganda menyuni yopish
        document.querySelector('.side-bar-apply .close-icon-menu').addEventListener('click', function () {
            document.querySelector('.side-bar-apply').classList.remove('show');  // Menyu yashirish
            document.body.style.overflow = 'auto';  // Sahifani yana aylantirishga ruxsat berish
        });

        // Menyu ortidagi fonni bosganda menyuni yopish
        document.querySelector('#anywhere-home').addEventListener('click', function () {
            document.querySelector('.side-bar-apply').classList.remove('show');
            document.body.style.overflow = 'auto';
        });
    });


</script>


<script>
    $(document).ready(function () {
        // Mobil menyuni faollashtirish
        $('#side-bar-apply').metisMenu();

        // Sidebar ochilganda "bgshow-apply" klassini qo'shish
        $(document).on('click', '.contact-btn', function () {
            $("#side-bar-apply").addClass("show");
            $("#anywhere-home-apply").addClass("bgshow-apply");
        });

        // Sidebar yopilganda "bgshow-apply" klassini olib tashlash
        $(document).on('click', '#close-btn, #anywhere-home-apply', function () {
            $("#side-bar-apply").removeClass("show");
            $("#anywhere-home-apply").removeClass("bgshow-apply");
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.tab-pane:not(.show)').forEach(el => {
            el.style.display = 'none';
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        let fixedNavbarHeight = document.querySelector(".navbar").offsetHeight;

        document.querySelectorAll(".nav-link").forEach(link => {
            link.addEventListener("click", function (e) {
                setTimeout(() => {
                    let activeTab = document.querySelector(".tab-pane.show.active");
                    if (activeTab) {
                        let yOffset = activeTab.getBoundingClientRect().top + window.scrollY - fixedNavbarHeight - 10;
                        window.scrollTo({top: yOffset, behavior: "smooth"});
                    }
                }, 200);
            });
        });
    });


</script>

</body>
</html>
