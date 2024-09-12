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
            <div class="swiper-wrapper">
                <!-- Single Slider -->
                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="rts-slider-height rts-slider-overlay rt-relative">
                            <div class="rts-slider-bg" data-background="{{ asset('storage/'.$slider->image) }}"
                                 style="background-image: url({{ asset('storage/'.$slider->image) }});"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 col-md-10">
                                        <div class="rts-slider rt-center">
                                            <div class="rts-slider-content">
                                                <div class="rts-university-icon">
                                                    <img src="{{ asset('storage/'.$slider->image) }}"
                                                         alt="university-logo">
                                                </div>
                                                <div class="rts-university-estd">
                                                    <span>{{ $slider['title_'.session('locale')] ?? 'Default Title' }}</span>
                                                </div>
                                                <p class="rts-slider-desc w-560">
                                                    {{ $slider['desc_'.session('locale')] ?? 'Default Description' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Slider Arrow -->
            <div class="rts-slider-arrow">
                <div class="rt-slider-btn rt-next">
                    <i class="fa-regular fa-arrow-left"></i>
                </div>
                <div class="rt-slider-btn rt-prev">
                    <i class="fa-regular fa-arrow-right"></i>
                </div>
            </div>
            <div class="rts-swiper-dots"></div>
        </div>
    </div>
    <!-- Hero Slider End -->

    <!-- About Us Start -->
    <section class="rts-about v__1 rt-relative rts-section-padding">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-5 col-xl-5 col-md-10">
                    <div class="rts-about-image">
                        <img src="{{ asset('about.jpg') }}" alt="About Us">
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7 col-md-10">
                    <div class="rts-about-content">
                        <div class="rts-about-flex mb--10">
                            <h2 class="section-title w-320">
                                @lang('crud.about.abouts')<span class="rts-line"></span>
                            </h2>
                            <div class="about-rounded-text">
                                <div class="rt-rounded-shape">
                                    <svg class="uni-circle-text-path uk-text-secondary uni-animation-spin"
                                         viewBox="0 0 100 100" width="150" height="150">
                                        <defs>
                                            <path id="circle"
                                                  d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0"></path>
                                        </defs>
                                        <text font-size="8.50">
                                            <textPath xlink:href="#circle">@lang('crud.desc')</textPath>
                                        </text>
                                    </svg>
                                    <div class="rt-round-dot-center"></div>
                                </div>
                            </div>
                        </div>
                        <p class="rts-paragraph mb--50">
                            {{ $about['about_center_'.session('locale')] ?? 'Default About Us Content' }}
                        </p>
                        <a href="{{ route('about') }}" class="about-btn rts-nbg-btn btn-arrow">
                            @lang('crud.overview')
                            <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                        </a>
                        <div class="about-positioned-text">
                            <h2 class="rt-clip-text">EST. 2023</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rt-shape">
            <img class="rt-shape__1" src="{{ asset('site/assets/images/about/shape/01.png') }}" alt="">
            <img class="rt-shape__2" src="{{ asset('site/assets/images/about/shape/02.png') }}" alt="">
            <img class="rt-shape__3" src="{{ asset('site/assets/images/about/shape/03.png') }}" alt="">
            <img class="rt-shape__4" src="{{ asset('site/assets/images/about/shape/04.png') }}" alt="">
        </div>
    </section>
    <!-- About Us End -->

    <!-- Blog Area Start -->
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
                                        <img src="{{ asset('storage/'.$news->first()->image) }}" alt="blog-thumb">
                                    @else
                                        <img src="{{ asset('storage/default-image.jpg') }}" alt="default-image">
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
                                <a href="{{ route('news.show', $news->first()->id ?? '#') }}" class="post-title">
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
                                <div class="blog-content">
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


    <!-- Blog Area End -->

    <!-- Semester Fee Start -->
    <div class="semister-fee pb--120 pb__md--80">
        <div class="container">
            <div class="row">
                <div class="semister-fee__content">
                    <h5 class="rts-section-title">@lang('crud.course.name')</h5>
                    <!-- Tab Item -->
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="undergrade-1-tab" data-bs-toggle="tab"
                                            data-bs-target="#undergrade-1" type="button" role="tab"
                                            aria-controls="undergrade-1" aria-selected="true">Online
                                    </button>
                                    <button class="nav-link" id="grade-tution-2-tab" data-bs-toggle="tab"
                                            data-bs-target="#grade-tution-2" type="button" role="tab"
                                            aria-controls="grade-tution-2" aria-selected="false">Offline
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <div class="rts-fee-chart__content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="undergrade-1" role="tabpanel"
                                 aria-labelledby="undergrade-1-tab">
                                <div class="row justify-content-md-center g-5">
                                    <!-- Single Staff Item -->
                                    @foreach($online as $on)
                                        <div class="col-lg-6 col-md-11">
                                            <div class="single-staff">
                                                <div class="single-staff__content">
                                                    <div class="staf-image">
                                                        <img src="{{ asset('storage/'.$on->image) }}" alt="staff-image">
                                                    </div>
                                                    <div class="staf-info">
                                                        <h5 class="name">{{ $on['title_'.session('locale')] ?? 'Default Title' }}</h5>
                                                        <div class="staf-info__speciality">
                                                            <p>{!! $on['description_'.session('locale')] ?? 'Default Description' !!}</p>
                                                        </div>
                                                        <a href="#" class="rts-theme-btn border-btn">@lang('crud.course.views')</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="grade-tution-2" role="tabpanel"
                                 aria-labelledby="grade-tution-2-tab">
                                @foreach($offline as $on)
                                    <div class="col-lg-6 col-md-11">
                                        <div class="single-staff">
                                            <div class="single-staff__content">
                                                <div class="staf-image">
                                                    <img src="{{ asset('storage/'.$on->image) }}" alt="staff-image">
                                                </div>
                                                <div class="staf-info">
                                                    <h5 class="name">{{ $on['title_'.session('locale')] ?? 'Default Title' }}</h5>
                                                    <div class="staf-info__speciality">
                                                        <p>{!! $on['description_'.session('locale')] ?? 'Default Description' !!}</p>
                                                    </div>
                                                    <a href="#" class="rts-theme-btn border-btn">@lang('crud.course.views')</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Semester Fee End -->

    <!-- Scholarship Start -->
    <div class="rts-scholarship">
        <div class="container">
            <div class="rts-scholarship-description">
                <div class="row justify-content-md-center justify-content-start">
                    <div class="col-lg-8 col-md-11">
                        <div class="program-description-area">
                            <!-- FAQ -->
                            <div class="program-credit-area faq mt--50">
                                <h4 class="title">@lang('crud.faq')</h4>
                                <div class="program-accordion">
                                    <div class="accordion" id="rts-accordion">
                                        @foreach($faqs as $faq)
                                            <div class="accordion-item">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $loop->index }}" aria-expanded="true" aria-controls="collapse-{{ $loop->index }}">
                                                    {{ $faq->question }}
                                                </button>
                                                <div id="collapse-{{ $loop->index }}" class="accordion-collapse collapse show" data-bs-parent="#rts-accordion">
                                                    <div class="accordion-body">
                                                        <p>
                                                            {{ $faq->answer }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-comment mb-5 mb-lg-0">
                        <div class="blog-comment__template">
                            <h4>@lang('crud.contact')</h4>
                            <form action="{{ route('contact.apply') }}" class="comment-template" method="POST">
                                @csrf
                                <div class="input-area">
                                    <input type="text" placeholder="@lang('crud.course.form.first_name')" name="name" required="">
                                    <input type="text" placeholder="@lang('crud.course.form.email')" name="email" required="">
                                </div>
                                <textarea name="message" class="input-area-full w-full" placeholder="@lang('crud.course.form.msg')"></textarea>
                                <button class="rts-theme-btn with-arrow" type="submit">@lang('crud.send')
                                    <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scholarship End -->
@endsection
