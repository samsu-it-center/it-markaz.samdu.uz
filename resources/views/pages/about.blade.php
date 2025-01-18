@extends('layouts.app')

@section('content')
    <!-- History Section -->
    <div class="rts-history m-3">
        <div class="container">
            <div class="row g-5 justify-content-md-center justify-content-start align-items-center">

                <div class="col-lg-12 col-md-12">
                    <div
                        style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); border-radius: 15px; margin: 10px; padding: 0;">
                        <img src="{{ asset('ban.png') }}" class="img-fluid" alt="history" style="border-radius: 15px; ">
                    </div>


                </div>

                <div class="col-lg-12 col-md-11">
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
        <div class="container-my container ">
            <div class="row justify-content-center text-center">
                <div class="rts-section mb--50 text-center">
                    <h2 class="rts-section-title text-center">@lang('crud.about.direction')</h2>
                </div>
            </div>

            <!-- First Card -->
            <div class="card-about">
                <div class="title">@lang('crud.about_card.title_1')</div>
                <div class="image">
                    <img src="{{ asset('step/image5.png') }}" alt="">
                </div>
                <div class="content">
                    {{--                    <h2 class="text-white">2024 Trend Design 2</h2>--}}
                    <h6 class="text-white">
                        @lang('crud.about.step.step_1')
                    </h6>
                    {{--                    <a href="#" class="btn">Explore More</a>--}}
                </div>
            </div>

            <!-- First Card -->
            <div class="card-about">
                <div class="title">@lang('crud.about_card.title_2')</div>
                <div class="image">
                    <img src="{{ asset('step/image2.png') }}" alt="">
                </div>
                <div class="content">
                    {{--                    <h2 class="text-white">2024 Trend Design 2</h2>--}}
                    <h6 class="text-white">
                        @lang('crud.about.step.step_2')
                    </h6>
                    {{--                    <a href="#" class="btn">Explore More</a>--}}
                </div>
            </div>

            <!-- First Card -->
            <div class="card-about">
                <div class="title">@lang('crud.about_card.title_3')</div>
                <div class="image">
                    <img src="{{ asset('step/image3.png') }}" alt="">
                </div>
                <div class="content">
                    {{--                    <h2 class="text-white">2024 Trend Design 2</h2>--}}
                    <h6 class="text-white">
                        @lang('crud.about.step.step_3')
                    </h6>
                    {{--                    <a href="#" class="btn">Explore More</a>--}}
                </div>
            </div>

            <!-- First Card -->
            <div class="card-about">
                <div class="title">@lang('crud.about_card.title_4')</div>
                <div class="image">
                    <img src="{{ asset('step/image4.png') }}" alt="">
                </div>
                <div class="content">
                    {{--                    <h2 class="text-white">2024 Trend Design 2</h2>--}}
                    <h6 class="text-white">
                        @lang('crud.about.step.step_4')
                    </h6>
                    {{--                    <a href="#" class="btn">Explore More</a>--}}
                </div>
            </div>

        <!-- Animation Section -->
    <section class="animate-section">
        <h2> @lang('crud.motto.name')</h2>
        {{--            <p>Delivering excellence in everything we do, with a focus on the future.</p>--}}

        <div class="animate-cols" style="display: flex; justify-content: space-around; margin-top: 40px;">
            <div class="animate-col"
                 style="flex: 1; padding: 20px; background-color: #004a9f; border-radius: 10px; margin: 0 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
                <h3 class="text-white">@lang('crud.motto.title_1')</h3>
                <p class="text-white">@lang('crud.motto.body_1')</p>
            </div>
            <div class="animate-col"
                 style="flex: 1; padding: 20px; background-color: #004a9f; border-radius: 10px; margin: 0 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
                <h3 class="text-white">@lang('crud.motto.title_2')</h3>
                <p class="text-white">@lang('crud.motto.body_2')</p>
            </div>
            <div class="animate-col"
                 style="flex: 1; padding: 20px; background-color: #004a9f; border-radius: 10px; margin: 0 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
                <h3 class="text-white">@lang('crud.motto.title_3')</h3>
                <p class="text-white">@lang('crud.motto.body_3')</p>
            </div>
            <div class="animate-col"
                 style="flex: 1; padding: 20px; background-color: #004a9f; border-radius: 10px; margin: 0 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
                <h3 class="text-white">@lang('crud.motto.title_4')</h3>
                <p class="text-white"> @lang('crud.motto.body_4')</p>
            </div>
        </div>
    </section>
        </div>
    </section>
    <!-- Mission Section End -->

      <!-- Contact Button -->
                    <div class="header-right-area-one">
                        <button class="contact-btn border-0" id="contact-btn">
                            <i class="fa-brands fa-telegram mr--5"></i> Ariza qoldirish
                        </button>
                    </div>

@endsection
