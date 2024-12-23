@extends('layouts.app')

@section('content')
    <!-- Hero Slider Start -->
    <div class="rts-hero-slider v-1 rt-relative">
        <div class="rts-hero-slider-active swiper swiper-data" data-swiper='{
            "slidesPerView":1,
            "effect": "fade",
            "loop": true,
            "speed": 1000,
            "navigation": {
                "nextEl": ".rt-next",
                "prevEl": ".rt-prev"
            },
            "pagination": {
                "el": ".rts-swiper-dots",
                "clickable": true
            },
            "autoplay": {
                "delay": 7000
            }
        }'>
            <!-- Single Slider -->
            <div class="slider">
                <div class="slides">
                    @foreach ($sliders as $slider)
                        <div>
                            <img src="{{ asset('storage/' . $slider->image) }}" alt="Slide Image">
                            <div class="caption">
                                <span>{{ $slider['title_' . session('locale')] ?? 'Default Title' }}</span><br>
                                <span>{{ $slider['desc_' . session('locale')] ?? 'Default Description' }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="buttons">
                    <button class="left-button" id="prev">&#9664;</button>
                    <button class="right-button" id="next">&#9654;</button>
                </div>

            </div>

            <!-- Hero Slider End -->
            <!-- About Us Start -->
{{--            <section class=" v__1 rt-relative rts-section-padding">--}}
{{--                <div class="container">--}}
{{--                    <div class="row justify-content-md-center">--}}

{{--                       <div class="col-lg-6 col-xl-5 col-md-6">--}}
{{--                        <div class="rts-about-image border-3" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); height: 450px !important; overflow: hidden;">--}}
{{--                            <img class="rounded-3" src="{{ asset('ban.png') }}" alt="About Us" style="width: 100%; height: 100%; object-fit: cover; object-position: top;">--}}
{{--                        </div>--}}
{{--                    </div>--}}



{{--                        <div class="col-lg-7 col-xl-7 col-md-10">--}}
{{--                            <div class="rts-about-content">--}}
{{--                                <div class="rts-about-flex mb--10">--}}
{{--                                    <h2 class="section-title w-320">--}}
{{--                                        @lang('crud.about.abouts')<span class="rts-line"></span>--}}
{{--                                    </h2>--}}
{{--                                    <div class="about-rounded-text">--}}
{{--                                        <div class="rt-rounded-shape">--}}
{{--                                            <svg class="uni-circle-text-path uk-text-secondary uni-animation-spin"--}}
{{--                                                 viewBox="0 0 100 100" width="150" height="150">--}}
{{--                                                <defs>--}}
{{--                                                    <path id="circle"--}}
{{--                                                          d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0"></path>--}}
{{--                                                </defs>--}}
{{--                                                <text font-size="8.50">--}}
{{--                                                    <textPath xlink:href="#circle">@lang('crud.desc')</textPath>--}}
{{--                                                </text>--}}
{{--                                            </svg>--}}
{{--                                            <div class="rt-round-dot-center"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <p class="rts-paragraph mb--50">--}}
{{--                                    {{ $about['about_center_'.session('locale')] ?? 'Default About Us Content' }}--}}
{{--                                </p>--}}
{{--                                <a href="{{ route('about') }}" class="about-btn rts-nbg-btn btn-arrow">--}}
{{--                                    @lang('crud.overview')--}}
{{--                                    <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>--}}
{{--                                </a>--}}
{{--                                <div class="about-positioned-text">--}}
{{--                                    --}}{{--                                    <h2 class="rt-clip-text">EST. 2023</h2>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="rt-shape">--}}
{{--                    <img class="rt-shape__1" src="{{ asset('site/assets/images/about/shape/01.png') }}" alt="">--}}
{{--                    <img class="rt-shape__2" src="{{ asset('site/assets/images/about/shape/02.png') }}" alt="">--}}
{{--                    <img class="rt-shape__3" src="{{ asset('site/assets/images/about/shape/03.png') }}" alt="">--}}
{{--                    <img class="rt-shape__4" src="{{ asset('site/assets/images/about/shape/04.png') }}" alt="">--}}
{{--                </div>--}}
{{--            </section>--}}

            <div class="rts-blog v_1 rts-section-padding">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-lg-12">
                            <div class="rts-section rts-border-bottom-1 mb--50 pb--20">
                                <h2 class="rts-section-title">
                                    @lang('crud.news')
                                </h2>
                                <a href="{{ route('news') }}" class="rts-arrow">
                                    @lang('crud.news_arr.more')
                                    <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Content -->
                    <div class="row g-5 justify-content-md-center">
                        <!-- First Blog Post -->
                        <div class="col-md-11 col-lg-6">
                            <div class="rts-blog-post blog-v-full">
                                <div class="single-blog-post">
                                    <div class="blog-thumb">
                                        <a href="#">
                                            @if($news->first())
                                                <img src="{{ asset('storage/'.$news->first()->image) }}"
                                                     alt="blog-thumb">
                                            @else
                                                <img src="{{ asset('site/assets/images/banner/02-02.jpg') }}"
                                                     alt="default-image">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="post-meta">
                                            <div class="rt-date">
                                                <span><i class="fal fa-calendar"></i></span>
                                                <span>
                                            @if($news->first())
                                                        {{ $news->first()->created_at->format('Y-m-d') }}
                                                    @else
                                                        N/A
                                                    @endif
                                        </span>
                                            </div>
                                        </div>
                                        <a href="{{ route('news.show', $news->first()->id ?? '#') }}"
                                           class="post-title">
                                            {{ $news->first()['title_'.session('locale')] ?? 'Default Title' }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Other Blog Posts -->
                        <div class="col-md-11 col-lg-6">
                            <div class="rts-blog-post">
                                @foreach($news->skip(1) as $item)
                                    <div class="single-blog-post">
                                        <div class="blog-thumb">
                                            <a href="{{ route('news.show', $item->id) }}">
                                                <img src="{{ asset('storage/'.$item->image) }}" alt="post-thumbnail">
                                            </a>
                                        </div>
                                        <div class="blog-content p-2">
                                            <div class="post-meta">
                                                <div class="rt-author">
                                                    <span><i class="fa-light fa-eye"></i></span>
                                                    <a href="#">{{ $item->views ?? '0' }}</a>
                                                </div>
                                                <div class="rt-date">
                                                    <span><i class="fal fa-calendar"></i></span>
                                                    <span>
                                                {{ $item->created_at->format('Y-m-d') ?? 'N/A' }}
                                            </span>
                                                </div>
                                            </div>
                                            <a href="{{ route('news.show', $item->id) }}" class="post-title">
                                                {{ $item['title_'.session('locale')] ?? 'Default Title' }}
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @if($online->isNotEmpty() || $offline->isNotEmpty())
                <div class="semister-fee pb--120 pb__md--80">
                    <div class="container">
                        <div class="row">
                            <div class="semister-fee__content">
                                <h5 class="rts-section-title">@lang('crud.course.name')</h5>
                                <!-- Tab Item -->
                                <div class="rts-fee-chart">
                                    <div class="rts-fee-chart-tabs">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            @if($online->isNotEmpty())
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link show active" id="home-tab"
                                                            data-bs-toggle="tab"
                                                            data-bs-target="#home"
                                                            type="button" role="tab" aria-controls="home"
                                                            aria-selected="true">@lang('crud.course.online')
                                                    </button>
                                                </li>
                                            @endif
                                            @if($offline->isNotEmpty())
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                            data-bs-target="#profile"
                                                            type="button" role="tab" aria-controls="profile"
                                                            aria-selected="false">@lang('crud.course.offline')
                                                    </button>
                                                </li>
                                            @endif
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            @if($online->isNotEmpty())
                                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                     aria-labelledby="home-tab">
                                                    <div class="rts-fee-chart-content">
                                                        <ul>
                                                            @foreach($online as $on)
                                                                <li>
                                                                    <a href="{{ route('course.show', $on->id) }}">
                                                                        <span>{{ $on['title_'.session('locale')] ?? 'Default Online Course' }}</span>
                                                                        {{--                                                                        <span>{{ $on->price ?? 'Free' }}</span>--}}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($offline->isNotEmpty())
                                                <div class="tab-pane fade  active" id="profile" role="tabpanel"
                                                     aria-labelledby="profile-tab">
                                                    <div class="rts-fee-chart-content">
                                                        <ul>
                                                            @foreach($offline as $off)
                                                                <li>
                                                                    <a href="{{ route('course.show', $off->id) }}">
                                                                        <span>{{ $off['title_'.session('locale')] ?? 'Default Offline Course' }}</span>
                                                                        {{--                                                                        <span>{{ $off->price ?? 'Free' }}</span>--}}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endif

        <!-- FAQ Start -->
        {{--            <section class="rts-faq-section rts-section-padding">--}}
        {{--                <div class="container">--}}
        {{--                    <h2>@lang('crud.faq')</h2>--}}
        {{--                </div>--}}
        {{--                <div class="container">--}}
        {{--                    <div class="row">--}}
        {{--                        <div class="col-lg-12">--}}
        {{--                            <div class="faq-wrapper">--}}
        {{--                                <div class="accordion" id="faqExample">--}}
        {{--                                    @foreach($faqs as $faq)--}}
        {{--                                        <div class="accordion-item">--}}
        {{--                                            <h2 class="accordion-header" id="faqHeading{{ $faq->id }}">--}}
        {{--                                                <button class="accordion-button" type="button" style="font-size: 17px;"--}}
        {{--                                                        data-bs-toggle="collapse"--}}
        {{--                                                        data-bs-target="#faqCollapse{{ $faq->id }}" aria-expanded="true"--}}
        {{--                                                        aria-controls="faqCollapse{{ $faq->id }}">--}}
        {{--                                                    {{ $faq['question'] ?? 'Default Question' }}--}}
        {{--                                                </button>--}}
        {{--                                            </h2>--}}
        {{--                                            <div id="faqCollapse{{ $faq->id }}" class="accordion-collapse collapse"--}}
        {{--                                                 aria-labelledby="faqHeading{{ $faq->id }}"--}}
        {{--                                                 data-bs-parent="#faqExample">--}}
        {{--                                                <div class="accordion-body">--}}
        {{--                                                    {{ $faq['answer'] ?? 'Default Answer' }}--}}
        {{--                                                </div>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                    @endforeach--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </section>--}}
        <!-- FAQ End -->
@endsection
