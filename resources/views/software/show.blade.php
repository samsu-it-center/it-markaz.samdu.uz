@extends('layouts.app')

@section('content')
    <div class="rts-blog-details rts-section-padding">

        <div class="container">
            <div class="row justify-content-center g-5">

                <div class="container my-5">
                    <div class="row mb-4">
                        <div class="col">
                            <div class="custom-card shadow">
                                <img src="{{ asset('storage/'.$software->image) }}" alt="Loyiha rasmi"
                                     class="custom-img">
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-12">
                            <div class="card custom-card shadow p-3 info-card">
                                <div>

                                    <h3>{{ $software['name_' . session('locale', 'en')] ?? $software['name_en'] }}</h3>

                                    <p class="text-muted">
                                        {{ $software['description_' . session('locale', 'en')] ?? $software['name_en'] }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>


            {{--        <div class="container">--}}
            {{--            <div class="row justify-content-center g-5">--}}
            {{--                <div class="col-lg-12 col-md-12">--}}
            {{--                    <article class="blog-details">--}}
            {{--                        <!-- Featured Image -->--}}
            {{--                        <div class="blog-details__featured-image">--}}
            {{--                            <img src="{{ asset('storage/'.$software->image) }}" alt="Software Image">--}}
            {{--                        </div>--}}
            {{--                        <h3 class="blog-title">{{ $software['name_'.session('locale')] }}</h3>--}}

            {{--                        {!! $software['description_'.session('locale')] !!}--}}

            {{--                        @if($software->video_url)--}}
            {{--                            <div class="video-link text-center">--}}
            {{--                                <a class="btn btn-primary btn-xs" target="_blank"  href="{{ $software->video_url }}">Watch Video</a>--}}
            {{--                            </div>--}}
            {{--                        @endif--}}

            {{--                        <div class="software-link text-center">--}}
            {{--                            <a class="btn btn-primary btn-xs" target="_blank"  href="{{ $software->link }}">Visit the software website</a>--}}
            {{--                        </div>--}}
            {{--                    </article>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--        </div>--}}
        </div>

      <!-- Contact Button -->
                    <div class="header-right-area-one">
                        <button class="contact-btn border-0" id="contact-btn">
                            <i class="fa-brands fa-telegram mr--5"></i> Ariza qoldirish
                        </button>
                    </div>
@endsection
