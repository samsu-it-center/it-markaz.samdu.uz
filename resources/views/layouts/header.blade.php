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
                                <li class="has-child-menu">
                                    <a href="#">
                                        <img src="{{ asset('flags/' . $languages[$currentLocale]['flag']) }}" alt=""
                                             class="flag">
                                        <span class="menu-item">{{ $languages[$currentLocale]['name'] }}</span>
                                        <i class="fa-regular fa-chevron-down"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        @foreach($languages as $langCode => $langData)
                                            @if($langCode != $currentLocale)
                                                <li>
                                                    <a href="{{ route('lang', $langCode) }}">
                                                        <img src="{{ asset('flags/' . $langData['flag']) }}" alt=""
                                                             class="flag">
                                                        <span class="menu-item">{{ $langData['name'] }}</span>
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-one-wrapper">
                    <div class="left-side-header">
                        <a href="/" class="logo-area">
                            <img src="{{ asset('logo.png') }}" alt="logo" style="width: 90px">
                        </a>
                    </div>

                    <div class="main-nav-one">
                        <nav>
                            <ul>
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

                    <div class="header-right-area-one">
                        <div class="header-right-content">
                            <div class="menu-bar" id="menu-btn">
                                <img src="{{ asset('site/assets/images/icon/bar.svg') }}" alt="menu-bar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
