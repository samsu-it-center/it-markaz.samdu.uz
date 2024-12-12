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
                        <div class="col-md-8">
                            <h3 class="custom-heading">Loyiha haqida</h3>
                            <p class="text-muted">
                                {!! $software['description_' . session('locale', 'en')] ?? $software['description_en'] !!}
                            </p>
    {{--                            <p class="text-muted">--}}
    {{--                                <strong>Imkoniyatlar:</strong>{!! $software['opportunities_tasks_' . session('locale', 'en')] ?? $software['opportunities_tasks_en'] !!}--}}
    {{--                            </p>--}}
                        </div>
                        <div class="col-md-4">
                            <div class="card custom-card shadow p-3 info-card">
                                <div>

                                    <p class="text-muted"><strong>Loyiha
                                            nomi:</strong> {{ $software['name_' . session('locale', 'en')] ?? $software['name_en'] }}
                                    </p>
                                    <p class="text-muted">
{{--                                        <strong>Maqsad:</strong> {!! $software['description_ ' . session('locale', 'en')] ?? $software['project_objective_en'] !!}--}}
                                    </p>

                                    <p class="text-muted">
{{--                                        <strong>Byudjet:</strong> {!! $software['budget_' . session('locale', 'en')] ?? $software['budget_en'] !!}--}}
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
@endsection
