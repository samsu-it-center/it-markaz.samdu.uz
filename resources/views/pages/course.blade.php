@extends('layouts.app')

@section('content')
    <!-- Courses Section -->
    <div class="rts-blog v_3 rts-section-padding">
        <div class="container">
            <div class="row justify-content-md-start justify-content-sm-center g-5">
                @foreach($courses as $course)
                    <div class="col-sm-10 col-md-6 col-lg-6 col-xl-4">
                        <div class="single-blog">
                            <div class="blog single-blog__content">
                                <div class="blog__thumb">
                                    <img src="{{ asset('storage/'.$course->image) }}" alt="blog thumbnail">
                                </div>
                                <div class="blog__meta">
                                    <div class="blog__meta--da">
                                        <div class="blog-date">
                                            <span><i class="fal fa-keyboard-down"></i></span>
                                            <span>{{ $course->type }}</span>
                                        </div>
                                    </div>
                                    <h5 class="blog__title">
                                        <a href="{{ route('course.show',$course->id) }}">
                                            {{ $course['title_'.session('locale')]  }}
                                        </a>
                                    </h5>
                                    <a href="{{ route('course.show',$course->id) }}"
                                       class="rts-theme-btn primary with-arrow lh-100">@lang('crud.course.views') <span><i
                                                class="fa-thin fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Application Form Section -->
    <section class="rts-application-area moving pt--120 rts-application-area-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="rts-section rt-center mb--50 w-460">
                    <h2 class="rts-section-title mb--10 rt-white">@lang('crud.course.contact')</h2>
                </div>
            </div>
            <!-- Application Form -->
            <div class="row justify-content-md-center">
                <div class="col-md-11 col-lg-6 col-xl-7">
                    <div class="rts-admission-form-image">
                        <img src="{{ asset('site/assets/images/feature/admission-form.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-11 col-lg-6 col-xl-5">
                    <div class="rts-application-form">
                        <div class="rts-application-form-content">
                            <h5 class="heading-title  mb--25">@lang('crud.course.form.title')</h5>
                            <form action="{{ route('course.apply') }}" class="rts-form" method="POST">
                                @csrf
                                <div class="rts-input rt-flex">
                                    <div class="single-input">
                                        <input type="text" name="fname" id="fname" placeholder="@lang('crud.course.form.first_name')" required>
                                    </div>
                                    <div class="single-input">
                                        <input type="text" name="lname" id="lname" placeholder="@lang('crud.course.form.last_name')" required>
                                    </div>
                                </div>
                                <div class="rts-input rt-flex">
                                    <div class="single-input">
                                        <input type="email" name="email" id="email2" placeholder="@lang('crud.course.form.email')" required>
                                    </div>
                                    <div class="single-input">
                                        <input type="number" name="Phone" id="Phone" placeholder="@lang('crud.course.form.Phone')" required>
                                    </div>
                                </div>
                                <div class="rts-input w-full search-filter">
                                    <div class="category-filter single-input">
                                        <select name="cat-search" id="cat-filter">
                                            <option value="">@lang('crud.course.form.course')</option>
                                            @foreach($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course['title_'.session('locale')] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="rts-input w-full">
                                    <div class="single-input">
                                        <textarea name="msg" id="msg" placeholder="@lang('crud.course.form.msg')"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="rts-theme-btn rts-nbg-btn btn-arrow v2 full-btn">@lang('crud.course.form.apply_now') <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rt-shape">
                <img src="{{ asset('site/assets/images/feature/shape/01.svg') }}" data-speed="0.04" alt="shape" class="rt-shape__1">
                <img src="{{ asset('site/assets/images/feature/shape/02.svg') }}" data-speed="0.04" alt="shape" class="shape rt-shape__2">
                <img src="{{ asset('site/assets/images/feature/shape/03.svg') }}" data-speed="0.04" alt="shape" class="shape rt-shape__3">
                <img src="{{ asset('site/assets/images/feature/shape/04.svg') }}" data-speed="0.04" alt="shape" class="shape rt-shape__4">
                <img src="{{ asset('site/assets/images/feature/shape/05.svg') }}" data-speed="0.04" alt="shape" class="shape rt-shape__5">
            </div>
        </div>
    </section>
@endsection
