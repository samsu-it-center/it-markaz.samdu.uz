@extends('layouts.app')

@section('content')
    <!-- History Section -->
    <div class="rts-history m-3">
        <div class="container">
            <div class="row g-5 justify-content-md-center justify-content-start align-items-center">
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-image">
                        <img src="{{ asset('step/image1.png') }}" class="image-fluid" alt="history">
                    </div>
                </div>
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-section">
                        <h6 class="rts-section-description mb--10">@lang('crud.about.abouts')</h6>
                        <p>
                            {{ $about['about_center_'.(session('locale') ?? 'uz')] ?? 'Default About Center' }}
                            <span class="d-block mb--30"></span>
                        </p>

                        <h6 class="rts-section-description mb--10">@lang('crud.about.name')</h6>
                        <p>
                            {{ $about['official_name_'.(session('locale') ?? 'uz')] ?? 'Default Official Name' }}
                            <span class="d-block mb--30"></span>
                        </p>

                        <h6 class="rts-section-description mb--10">@lang('crud.about.contact')</h6>
                        <p>
                            {{ $about['contact_it_center_'.(session('locale') ?? 'uz')] ?? 'Default Contact Info' }}
                            <span class="d-block mb--30"></span>
                        </p>

                        <h6 class="rts-section-description mb--10">@lang('crud.about.location_name')</h6>
                        <p>
                            {{ $about['address_'.(session('locale') ?? 'uz')] ?? 'Default Address' }}
                            <span class="d-block mb--30"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- History Section End -->

    <!-- Mission Section -->
    <section class="rts-mission m-3">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="rts-section mb--50 text-center">
                    <h2 class="rts-section-title text-center">@lang('crud.about.direction')</h2>
                </div>
            </div>

        <!-- First Card -->
            <div class="card">
                <div class="title">ILMIY LOYIHALAR.</div>
                <div class="image">
                    <img src="{{ asset('step/image5.png') }}" alt="">
                </div>
                <div class="content">
{{--                    <h2 class="text-white">2024 Trend Design 2</h2>--}}
                    <h6  class="text-white">
                       @lang('crud.about.step.step_1')
                    </h6>
                    {{--                    <a href="#" class="btn">Explore More</a>--}}
                </div>
            </div>

         <!-- First Card -->
            <div class="card">
                <div class="title">STARTUPLAR</div>
                <div class="image">
                    <img src="{{ asset('step/image2.png') }}" alt="">
                </div>
                <div class="content">
{{--                    <h2 class="text-white">2024 Trend Design 2</h2>--}}
                    <h6  class="text-white">
                       @lang('crud.about.step.step_2')
                    </h6>
                    {{--                    <a href="#" class="btn">Explore More</a>--}}
                </div>
            </div>

            <!-- First Card -->
            <div class="card">
                <div class="title">O'QUV KURSLARI</div>
                <div class="image">
                    <img src="{{ asset('step/image3.png') }}" alt="">
                </div>
                <div class="content">
{{--                    <h2 class="text-white">2024 Trend Design 2</h2>--}}
                    <h6  class="text-white">
                      @lang('crud.about.step.step_3')
                    </h6>
                    {{--                    <a href="#" class="btn">Explore More</a>--}}
                </div>
            </div>

            <!-- First Card -->
            <div class="card">
                <div class="title">DASTURIY MAHSULOTLAR</div>
                <div class="image">
                    <img src="{{ asset('step/image4.png') }}" alt="">
                </div>
                <div class="content">
{{--                    <h2 class="text-white">2024 Trend Design 2</h2>--}}
                    <h6  class="text-white">
                      @lang('crud.about.step.step_4')
                    </h6>
                    {{--                    <a href="#" class="btn">Explore More</a>--}}
                </div>
            </div>

        </div>
    </section>
    <!-- Mission Section End -->
@endsection
