@extends('layouts.app')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">@lang('crud.about.abouts')</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">@lang('crud.home')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@lang('crud.about.abouts')</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ========================== About Facts List Section =============================== -->
    <section class="pt-0">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="list_facts_wrap">
                        <div class="sec-heading mb-3">

                        </div>
                        <div class="list_facts">
                            <div class="list_facts_caption">
                                <h4>@lang('crud.about.name')</h4>
                                <p>{{ $about->{'official_name_'.session('locale') ?? "uz"} }}</p>
                            </div>
                        </div>
                        <div class="list_facts">
                            <div class="list_facts_caption">
                                <h4>@lang('crud.about.location_name')</h4>
                                <p>{{ $about->{'address_'.session('locale') ?? "uz"} }}</p>
                            </div>
                        </div>

                        <div class="list_facts">
                            <div class="list_facts_caption">
                                <h4>@lang('crud.about.abouts')</h4>
                                <p>{{ $about->{'about_center_'.session('locale') ?? "uz"} }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="list_facts_wrap_img">
                        <img src="{{ asset('ban.png') }}" class="img-fluid" alt=""/>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="gray pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <h2>@lang('crud.about.direction')</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="course_overlay_cat">
                                        <div class="course_overlay_cat_thumb">
                                            <a href="#" tabindex="0"><img src="{{ asset('step/image5.png') }}"
                                                                          class="img-fluid"
                                                                          alt=""></a>
                                        </div>
                                        <div class="course_overlay_cat_caption">
                                            <div class="llp-left w-75">
                                                <h4><a href="#">@lang('crud.about_card.title_1')</a></h4>
                                                <span>@lang('crud.about.step.step_1')</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="course_overlay_cat">
                                        <div class="course_overlay_cat_thumb">
                                            <a href="#" tabindex="0"><img src="{{ asset('step/image2.png') }}"
                                                                          class="img-fluid"
                                                                          alt=""></a>
                                        </div>
                                        <div class="course_overlay_cat_caption">
                                            <div class="llp-left w-75">
                                                <h4><a href="#">@lang('crud.about_card.title_2')</a></h4>
                                                <span>@lang('crud.about.step.step_2')</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="course_overlay_cat">
                                        <div class="course_overlay_cat_thumb">
                                            <a href="#" tabindex="0">
                                                <img src="{{ asset('step/image3.png') }}"
                                                     class="img-fluid"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="course_overlay_cat_caption">
                                            <div class="llp-left w-75">
                                                <h4><a href="#">@lang('crud.about_card.title_3')</a></h4>
                                                <span>@lang('crud.about.step.step_3')</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="course_overlay_cat">
                                        <div class="course_overlay_cat_thumb">
                                            <a href="#" tabindex="0"><img src="{{ asset('step/image4.png') }}"
                                                                          class="img-fluid"
                                                                          alt=""></a>
                                        </div>
                                        <div class="course_overlay_cat_caption">
                                            <div class="llp-left w-75">
                                                <h4><a href="#">@lang('crud.about_card.title_4')</a></h4>
                                                <span>@lang('crud.about.step.step_4')</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <h2 class="text-center mb-4">@lang('crud.motto.name')</h2>

        <div class="row overflow-hidden justify-content-center">
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="p-4 bg-primary text-white rounded shadow-lg text-center">
                    <h3 class="animated text-white">@lang('crud.motto.title_1')</h3>
                    <p>@lang('crud.motto.body_1')</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="p-4 bg-primary text-white rounded shadow-lg text-center">
                    <h3 class="animated text-white">@lang('crud.motto.title_2')</h3>
                    <p>@lang('crud.motto.body_2')</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="p-4 bg-primary text-white rounded shadow-lg text-center">
                    <h3 class="animated text-white">@lang('crud.motto.title_3')</h3>
                    <p>@lang('crud.motto.body_3')</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="p-4 bg-primary text-white rounded shadow-lg text-center">
                    <h3 class="animated text-white">@lang('crud.motto.title_4')</h3>
                    <p>@lang('crud.motto.body_4')</p>
                </div>
            </div>
        </div>
    </section>


    <section style="background:url({{ asset('assets/img/testimonial.png') }})">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="sec-heading center">
                        <p>@lang('crud.motto.name')</p>
                        <h2><span class="theme-cl">@lang('crud.motto.name')</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="testimonials_style" class="slick-carousel-3 arrow_middle">
                        <div class="testimonial-detail">
                            <div class="client-detail-box">
                                <div class="client-detail">
                                    <h3 class="testimonial-title">@lang('crud.motto.title_1')</h3>
                                </div>
                            </div>
                            <p class="description">
                                @lang('crud.motto.body_1')
                            </p>
                        </div>

                        <div class="testimonial-detail">
                            <div class="client-detail-box">
                                <div class="client-detail">
                                    <h3 class="testimonial-title">@lang('crud.motto.title_2')</h3>
                                </div>
                            </div>
                            <p class="description">
                                @lang('crud.motto.body_2')
                            </p>
                        </div>

                        <div class="testimonial-detail">
                            <div class="client-detail-box">
                                <div class="client-detail">
                                    <h3 class="testimonial-title">@lang('crud.motto.title_3')</h3>
                                </div>
                            </div>
                            <p class="description">
                                @lang('crud.motto.body_3')
                            </p>
                        </div>

                        <div class="testimonial-detail">
                            <div class="client-detail-box">
                                <div class="client-detail">
                                    <h3 class="testimonial-title">@lang('crud.motto.title_4')</h3>
                                </div>
                            </div>
                            <p class="description">
                                @lang('crud.motto.body_4')
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ========================== About Facts List Section =============================== -->
@endsection
