<footer class="rts-footer v_1 pt--100 pb--80">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-12 col-md-11">
                <!-- footer widget -->
                <div class="row gy-5 gy-lg-0">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="rts-footer-widget w-320">
                            <a href="/" class="d-block rts-footer-logo mb--40">
                                <img src="{{ asset('logo.png') }}" alt="itcenter">
                            </a>
                            <p>
                                {{ $about['official_name_'.session('locale')] }}
                            </p>
                            <div class="rts-contact-link">
                                <a href="mailto:contact@reacthemes.com"><i
                                        class="fa-sharp fa-light fa-location-dot"></i> {{ $about['address_'.session('locale')] }}
                                </a>
                                <a href="callto:+998 93 728 68 67"><i class="fa-thin fa-phone"></i> +998 93 728 68
                                    67</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-2">
                        <div class="rts-footer-widget ">
                            {{--                            <h6 class="rt-semi">Our Campus</h6>--}}
                            {{--                            <div class="rts-footer-menu">--}}
                            {{--                                <ul>--}}
                            {{--                                    <li><a href="academic.html">Academic</a></li>--}}
                            {{--                                    <li><a href="program-single.html">Planning & Admission</a></li>--}}
                            {{--                                    <li><a href="campus-life.html">Campus Safety</a></li>--}}
                            {{--                                    <li><a href="faculty.html">Faculty</a></li>--}}
                            {{--                                    <li><a href="faculty-details.html">Human Resources</a></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-lg-2">
                        <div class="rts-footer-widget ml--30">
                            {{--                            <h6 class="rt-semi">Our Campus</h6>--}}
                            {{--                            <div class="rts-footer-menu">--}}
                            {{--                                <ul>--}}
                            {{--                                    <li><a href="about.html">About Us </a></li>--}}
                            {{--                                    <li><a href="admission.html">Admission</a></li>--}}
                            {{--                                    <li><a href="scholarship.html">Scholarship</a></li>--}}
                            {{--                                    <li><a href="tution-fee.html">Tution Fee</a></li>--}}
                            {{--                                    <li><a href="athletics.html">Athletics</a></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8 col-lg-4">
                        <div class="rts-footer-widget ml--30">
                            <iframe height="300"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9320.458032388887!2d66.9694552!3d39.6383979!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d1f8bc8499255%3A0x7d89646ab179a0fe!2sSamarqand%20Davlat%20Universiteti%20IT%20Markazi!5e0!3m2!1sen!2s!4v1662635733627!5m2!1sen!2s">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="rts-footer-copy-right v_1">
    <div class="container">
        <div class="row">
            <div class="rt-center">
                <p class="--p-xs">Copyright &copy; 2023-{{date('Y')}} All Rights Reserved by <a
                        href="https://it-markaz.samdu.uz/">SamSU IT center</a></p>
            </div>
        </div>
    </div>
</div>

<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="{{ asset('logo.png') }}" alt="studyhub-university">
        </div>
        <div class="inner-content">
            <p class="disc">
                {{ $about['official_name_'.session('locale')] }}
            </p>

            <div class="offcanvase__info">
                <div class="offcanvase__info--content">
                    <a href="callto:+998937286867"><span><i class="fa-sharp fa-light fa-phone"></i></span>+998 93 728 68
                        67</a>
                    <a href="#"><span><i
                                class="fa-sharp fa-light fa-location-dot"></i></span>{{ $about['address_'.session('locale')] }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">

                <li class="has-droupdown">
                    <a href="#" class="main">Homepages</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="index.html">Home Style One</a></li>
                        <li><a class="mobile-menu-link" href="index-two.html">Home Style Two</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Events</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="event.html">Event</a></li>
                        <li><a class="mobile-menu-link" href="event-details.html">Event Details</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Academics</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="academic.html">Academic</a></li>
                        <li><a class="mobile-menu-link" href="admission.html">Admission</a></li>
                        <li><a class="mobile-menu-link" href="academic-area.html">Academic Area</a></li>
                        <li><a class="mobile-menu-link" href="campus-life.html">Campus Life</a></li>
                        <li><a class="mobile-menu-link" href="scholarship.html">Scholarship</a></li>
                        <li><a class="mobile-menu-link" href="tution-fee.html">Tution Fee</a></li>
                        <li><a class="mobile-menu-link" href="program-single.html">Program Single</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Pages</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="about.html">About Us</a></li>
                        <li><a class="mobile-menu-link" href="athletics.html">Athletics</a></li>
                        <li class="has-dropdown third-lvl">
                            <a href="javascript:void(0);">Faculty</a>
                            <ul class="submenu third-lvl base">
                                <li><a class="mobile-menu-link" href="faculty.html">Faculty</a></li>
                                <li><a class="mobile-menu-link" href="faculty-details.html">Faculty details</a></li>
                            </ul>
                        </li>
                        <li><a class="mobile-menu-link" href="research.html">Research</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Blog</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="blog.html">Blog</a></li>
                        <li><a class="mobile-menu-link" href="blog-grid.html">Blog Grid</a></li>
                        <li><a class="mobile-menu-link" href="blog-list.html">Blog List</a></li>
                        <li><a class="mobile-menu-link" href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html" class="main">Contact Us</a>
                </li>
            </ul>
        </nav>

        <div class="rts-social-style-one pl--20 mt--100">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
