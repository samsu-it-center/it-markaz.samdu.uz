<footer class="rts-blog v_1 pt--100 pb--80">
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
                            <p class="text-muted">
                                {{ $about['official_name_'.session('locale')] ?? 'Birlamchi rasmiy ism' }}
                            </p>
                            <div class="">
                                <a href="mailto:contact@reacthemes.com" class="text-muted">
                                    <i class="fa-solid fa-location-dot"></i> {{ $about['address_'.session('locale')] ?? 'Standart manzil' }}
                                </a>
                                <a href="callto:+998 93 728 68 67" class="text-muted"><i class="fa-thin fa-phone"></i>
                                    +998 93 728 68
                                    67</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-2">
                        <div class="rts-footer-widget">
                            <div class="rts-footer-menu">
                                <ul>
                                    <li>
                                        <a class="nav-link text-muted"
                                           href="{{ route('about') }}">@lang('crud.menu.about')</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-muted"
                                           href="{{ route('news') }}">@lang('crud.menu.news')</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-muted"
                                           href="{{ route('startup') }}">@lang('crud.menu.start_up')</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-lg-2">
                        <div class="rts-footer-widget ml--30">
                            <div class="rts-footer-menu">
                                <ul>
                                    <li>
                                        <a class="nav-link text-muted"
                                           href="{{ route('software') }}">@lang('crud.menu.software')</a>
                                    </li>


                                    <li>
                                        <a class="nav-link text-muted"
                                           href="{{ route('course') }}">@lang('crud.menu.course')</a>
                                    </li>

                                    <li>
                                        <a class="nav-link text-muted"
                                           href="{{ route('document') }}">@lang('crud.menu.document')</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8 col-lg-4 rounded-3 border-5">
                        <div class="rts-footer-widget ml--30 ">
                            <iframe class="" height="300"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9320.458032388887!2d66.9694552!3d39.6383979!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d1f8bc8499255%3A0x7d89646ab179a0fe!2sSamarqand%20Davlat%20Universiteti%20IT%20Markazi!5e0!3m2!1sen!2s!4v1662635733627!5m2!1sen!2s">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="rts-footer-copy-right rt-primary-bg v_1">
    <div class="container">
        <div class="row">
            <div class="rt-center">
                <p class="--p-xs text-white">Copyright &copy; 2023-{{date('Y')}} All Rights Reserved by <a
                        href="https://it-markaz.samdu.uz/">SamSU IT center</a></p>
            </div>
        </div>
    </div>
</div>


<div id="side-bar-apply" class="side-bar-apply">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>

    <div class="contact-form-apply">
        <h5 style="color: #004a9f;" class="text-center">@lang('crud.contact_message.title')</h5>

        <form action="{{ route('contact.apply') }}" method="POST"
              style="padding: 20px; border-radius: 8px; background-color: #f9f9f9;">
            @csrf
            <label for="name">@lang('crud.contact_message.name')</label>
            <input type="text" name="name" required
                   style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #004a9f;"
                   id="name">

            <label for="name">@lang('crud.contact_message.phone')</label>
            <input type="text" name="phone" required
                   style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #004a9f;">

            <label for="name">@lang('crud.contact_message.company_name')</label>
            <input type="text" name="company_name" required
                   style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #004a9f;">

            <label for="name">@lang('crud.contact_message.message')</label>
            <textarea name="message" required
                      style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #004a9f;"></textarea>
            <button type="submit"
                    style="background-color: #004a9f; color: white; padding: 15px 30px; border: none; border-radius: 5px; font-size: 1.2rem; cursor: pointer; margin: 15px; position: relative; z-index: 1;">
                Jo'natish
            </button>
        </form>

    </div>
</div>


<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--0">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li>
                    <a class="nav-link" href="{{ route('about') }}">@lang('crud.menu.about')</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('news') }}">@lang('crud.menu.news')</a>
                </li>

                <li>
                    <a class="nav-link" href="{{ route('startup') }}">@lang('crud.menu.start_up')</a>
                </li>

                <li>
                    <a class="nav-link" href="{{ route('software') }}">@lang('crud.menu.software')</a>
                </li>


                <li>
                    <a class="nav-link" href="{{ route('course') }}">@lang('crud.menu.course')</a>
                </li>

                <li>
                    <a class="nav-link" href="{{ route('document') }}">@lang('crud.menu.document')</a>
                </li>
            </ul>
        </nav>
    </div>


</div>
