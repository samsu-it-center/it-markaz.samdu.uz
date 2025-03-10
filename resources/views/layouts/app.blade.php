<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="author" content="ShoyimObloqulov"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <title>{{ env('APP_NAME') }}</title>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <!-- Custom Color Option -->
    <link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
    <style type="text/css">
        .splide__slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 1;
            position: relative;

        }

        .splide__slide h2 {
            font-weight: bold;
            position: absolute;

            bottom: 40px;
            margin-left: 8%;
            margin-right: 8%;
            width: 84%;
            color: #fff;
            background-color: rgb(41 86 135 / 42%);
            border-radius: 5px;
            padding: 10px;
            /* text-shadow: 10px 5px 6px #000*/
        }
    </style>

    @livewireStyles
</head>

<body class="red-skin">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div id="preloader">
    <div class="preloader"><span></span><span></span></div>
</div>


<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-light">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand" href="/">
                        <img src="{{ asset('logo.png') }}" class="logo" alt=""/>
                    </a>
                    <div class="nav-toggle"></div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    @livewire('dynamic-menu')

                    @livewire('header-menu')
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>

    @yield('content')

    <a href="#" data-toggle="modal" data-target="#contact"
       class="btn btn-primary d-flex align-items-center floating-button">
        <i class="ti-email text-white fs-4 w-100"></i>
        <span class="floating-text">&ensp; @lang('crud.contact_send')</span>
    </a>


    <!-- Log In Modal -->
    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="contact">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="text-center">Dasturiy mahsulot yoki startup g`oyangiz bormi? <br> Biz bilan bog`laning</h4>
                    <div class="login-form">
                        <form method="POST" action="{{ route('contact.apply') }}">
                            @csrf
                            <div class="form-group">
                                <label>FISH</label>
                                <input type="text" class="form-control" name="name" placeholder="Familya, Ism, Sharif">
                            </div>

                            <div class="form-group">
                                <label>Telefon raqam</label>
                                <input type="text" class="form-control" name="phone" placeholder="Telefon raqam">

                            </div>
                            <div class="form-group">
                                <label>Tashkilot yo korxona nomi</label>
                                <input type="text" class="form-control" placeholder="Tashkilot yo korxona nomi">

                            </div>

                            <div class="form-group">
                                <label>Xabaringiz</label>
                                <textarea type="password" class="form-control" placeholder="Xabaringiz" name="message"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">
                                    Jo'natish
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Button Style -->
    <style>
        .floating-button {
            position: fixed;
            bottom: 60px;
            right: 18px;
            border-radius: 50px;
            padding: 12px;
            width: 50px; /* Faqat ikonka ko‘rinadi */
            height: 50px;
            overflow: hidden;
            transition: all 0.4s ease-in-out;
            z-index: 1050;
            display: flex;
            align-items: center;
            background-color: #007bff;
            border: none;
        }

        .floating-button i {
            transition: transform 0.4s ease-in-out;
        }

        .floating-text {
            opacity: 0;
            white-space: nowrap;
            max-width: 0;
            transition: opacity 0.4s ease-in-out, max-width 0.4s ease-in-out;
        }

        .floating-button:hover {
            width: auto; /* Tugma kengayadi */
            padding: 12px 20px;
        }

        .floating-button:hover .floating-text {
            opacity: 1;
            max-width: 200px; /* Matn paydo bo‘lishi uchun */
        }

        /* Mobil qurilmalar uchun */
        @media (max-width: 576px) {
            .floating-button {
                bottom: 55px;
                right: 15px;
            }
        }
    </style>


    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

    @livewire('footer')
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<script>
    var splide = new Splide('.splide', {
        type: 'slide',
        rewind: true,
        height: '70vh',
        autoplay: 'true',
        interval: 5000,
        pagination: false
    });
    splide.mount();
</script>

@livewireScripts
</body>

</html>
