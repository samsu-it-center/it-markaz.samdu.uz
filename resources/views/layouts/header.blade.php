<header id="rt-header" class="header-one header--sticky">
    <div class="header-top-one-wrapper rt-primary-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-one">
                        <div class="left-information">
                            <a href="mailto:itmarkaz@samdu.uz" class="email"><i class="fa-light fa-envelope"></i>itmarkaz@samdu.uz</a>
                            <a href="tel:+998 93 728 68 67" class="email"><i class="fa-light fa-phone"></i>+998 93 728
                                68 67</a>
                        </div>

                        @php
                            $currentLocale = session('locale') ?? "uz";
                            $languages = [
                                'en' => ['name' => 'English', 'flag' => 'flag-en.png'],
                                'uz' => ['name' => "O'zbek", 'flag' => 'flag-uz.png'],
                                'ru' => ['name' => 'Русский', 'flag' => 'flag-ru.png'],
                            ];
                        @endphp

                        <div class="right-information">
                            <ul class="rts-dropdown-menu language-switch">
                                {{--                                <li class="has-child-menu">--}}
                                {{--                                    <a href="#">--}}
                                {{--                                        <img src="{{ asset('flags/' . $languages[$currentLocale]['flag']) }}" alt=""--}}
                                {{--                                             class="flag">--}}
                                {{--                                        <span class="menu-item">{{ $languages[$currentLocale]['name'] }}</span>--}}
                                {{--                                        <i class="fa-regular fa-chevron-down"></i>--}}
                                {{--                                    </a>--}}
                                {{--                                    <ul class="sub-menu">--}}
                                {{--                                        @foreach($languages as $langCode => $langData)--}}
                                {{--                                            @if($langCode != $currentLocale)--}}
                                {{--                                                <li>--}}
                                {{--                                                    <a href="{{ route('lang', $langCode) }}">--}}
                                {{--                                                        <img src="{{ asset('flags/' . $langData['flag']) }}" alt=""--}}
                                {{--                                                             class="flag">--}}
                                {{--                                                        <span class="menu-item">{{ $langData['name'] }}</span>--}}
                                {{--                                                    </a>--}}
                                {{--                                                </li>--}}
                                {{--                                            @endif--}}
                                {{--                                        @endforeach--}}
                                {{--                                    </ul>--}}
                                {{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="container">--}}
    <div class="row ">
    {{--            <div class="col-lg-12">--}}
    {{--                <div class="header-one-wrapper">--}}


    <!-- Navbar -->
        <nav class="custom-navbar d-flex justify-content-between align-items-center mb-2">
            <!-- Left: Logo -->
            <!-- Right: Icons and Button -->

            <div class="d-flex align-items-center">
                <!-- Icon Buttons -->
                <button class="border-0 ">
                    <button class="btn btn-outline-light menu ml-5"><a href="/" class="logo-area"><img
                                src="{{ asset('logo.png') }}" alt="logo"></a></button>
                </button>
                <button class="border-0 ">
                </button>
                <button class="border-0 ">
                </button>

                <!-- Submit Button -->
            </div>


            <ul class="nav container">
                <li class="nav-item">
                    <a class="my-nav-link {{ Request::routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        @lang('crud.menu.about')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="my-nav-link {{ Request::routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">
                        @lang('crud.menu.news')
                    </a>
                </li>

                <li class="nav-item">
                    <a class="my-nav-link {{ Request::routeIs('startup') ? 'active' : '' }}"
                       href="{{ route('startup') }}">
                        @lang('crud.menu.start_up')
                    </a>
                </li>

                <li class="nav-item">
                    <a class="my-nav-link {{ Request::routeIs('software') ? 'active' : '' }}"
                       href="{{ route('software') }}">
                        @lang('crud.menu.software')
                    </a>
                </li>

                <li class="nav-item">
                    <a class="my-nav-link {{ Request::routeIs('course') ? 'active' : '' }}"
                       href="{{ route('course') }}">
                        @lang('crud.menu.course')
                    </a>
                </li>

                <li class="nav-item">
                    <a class="my-nav-link {{ Request::routeIs('contact') ? 'active' : '' }}"
                       href="{{ route('contact') }}">
                        Kontakt
                    </a>
                </li>


                <li class="nav-item dropdown">
                    <a href="#" class="my-nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('flags/' . $languages[$currentLocale]['flag']) }}" alt=""
                             class="flag">
                        <span class="menu-item">{{ $languages[$currentLocale]['name'] }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($languages as $langCode => $langData)
                            @if($langCode != $currentLocale)
                                <li>
                                    <a class="dropdown-item" href="{{ route('lang', $langCode) }}">
                                        <img src="{{ asset('flags/' . $langData['flag']) }}" alt=""
                                             class="flag">
                                        <span class="menu-item">{{ $langData['name'] }}</span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    {{--                <li class="nav-item dropdown">--}}
                    {{--                    <a href="#" class="my-nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Services</a>--}}
                    {{--                    <ul class="dropdown-menu">--}}
                    {{--                        <li><a href="#" class="dropdown-item">Web Design</a></li>--}}
                    {{--                        <li><a href="#" class="dropdown-item">SEO Optimization</a></li>--}}
                    {{--                        <li><a href="#" class="dropdown-item">App Development</a></li>--}}
                    {{--                    </ul>--}}
                    {{--                </li>--}}

                </li>

            </ul>


            <div class="d-flex align-items-center">
                <ul class="nav container">
                    <li class="nav-item dropdown">
                        <button class="my-nav-link">Оставить заявку</button>
                    </li>
                </ul>
                {{--                <button class="btn btn-outline-light menu m-1"> <a class="logo-area"><img src="{{ asset('logo.png') }}" alt="logo" ></a></button>--}}

            </div>


            <div class="header-right-area-one ">
                <div class="header-right-content">
                    <div class="menu-bar" id="menu-btn">
                        <i class="fa fa-list  fa-xl"></i>
                    </div>
                </div>
            </div>
        </nav>

        {{--                </div>--}}
    </div>
    {{--        </div>--}}
    {{--    </div>--}}
</header>
