@extends('layouts.app')
@section('content')
    <div class="rts-blog-details rts-section-padding">
        <div class="container">
            <div class="row justify-content-center g-5">
                <div class="col-lg-8 col-md-10">
                    <h4>{{ $news['title_'.session('locale')] }}</h4>
                    <article class="blog-details">
                        {!! $news['content_'.session('locale')] !!}
                    </article>
                </div>
                <div class="col-lg-4 col-md-10">
                    <div class="program-sidebar">

                        <!-- join event -->
                        <div class="program-event" style="background-image: url({{ asset('storage/'.$course->image) }})">
                            <div class="program-event-content">
                                <p>{!! $course['description_'.session('locale')] !!} </p>
                                <h4 class="event-title">{{ $course['title_'.session('locale')] }}</h4>
                                <div class="single-event-content-meta">
                                    <div class="event-time">
                                        <span><i class="fa-sharp fa-thin fa-typewriter"></i></span>
                                        <span>{{ $course->type }}</span>
                                    </div>

                                    <div class="event-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>{{ $course->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
