@extends('layouts.app')
@section('content')
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
@endsection
