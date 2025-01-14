@if(session('success'))
    <div class="alert alert-success  text-center mt-3" id="success-alert">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function () {
            document.getElementById('success-alert').style.display = 'none';
        }, 1500);
    </script>
@endif


@php
    $currentLocale = session('locale') ?? "uz";
    $languages = [
        'en' => ['name' => 'English', 'flag' => 'flag-en.png'],
        'uz' => ['name' => "O'zbek", 'flag' => 'flag-uz.png'],
        'ru' => ['name' => 'Русский', 'flag' => 'flag-ru.png'],
    ];
@endphp
<div class="row ">

    <!-- Navbar -->
    <nav class="custom-navbar d-flex justify-content-between align-items-center mb-2">
        <!-- Left: Logo -->
        <!-- Right: Icons and Button -->


        <ul class="nav container">

            <div class="d-flex align-items-center m-1">
                <!-- Icon Buttons -->
                <button class="border-0 ">
                    <button class="btn btn-outline-light ml-3">
                        <a href="/" class="logo-area">
                            <img src="{{ asset('logo.png') }}" alt="Logo"
                                 style="max-width: 150px; max-height: 100px">
                        </a>
                    </button>
                </button>


                <!-- Submit Button -->

            </div>

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

            </li>

        </ul>


        <!-- Menu Bar -->
        <div class="d-flex align-items-center">
            <div class="header-right-area-one">
                <div class="header-right-content">
                    <div class="menu-bar" id="menu-btn">
                        <i class="fa fa-list fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>

    </nav>


</div>

</header>
