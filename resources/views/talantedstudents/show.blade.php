@extends('layouts.app')
@section('content')
    <div class="rts-program rts-section-padding">
        <div class="container">
            <div class="rts-program-single-header">
                <div class="row g-3">
                    <div class="col-lg-6">
                        <h3 class="rts-section-title">{{ $course['title_'.session('locale')] ?? "Title not found" }}</h3>
                    </div>
                    <div class="col-lg-6">
                        <p class="rts-section-description">{!! $course['description_'.session('locale')] ?? "Desc not found" !!}</p>
                    </div>
                </div>
            </div>
{{--            <div class="rts-program-description">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-8">--}}
{{--                        <div class="program-description-area" id="curriculum">--}}
{{--                            {!! $lesson['description_'.session('locale')] ?? "Desc Not found" !!}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- sidebar -->--}}
{{--                    <div class="col-lg-4">--}}
{{--                        <div class="program-sidebar">--}}
{{--                            <!-- curriculum -->--}}
{{--                            <div class="program-curriculum">--}}
{{--                                <h6 class="heading-title">@lang('crud.topics')</h6>--}}
{{--                                <div class="program-menu">--}}
{{--                                    <ul class="list-unstyled">--}}
{{--                                        @foreach($lessons as $l)--}}
{{--                                            <li><a href="{{ route('course.show',[$course->id,"lesson_id" => $l->id]) }}"><span><i--}}
{{--                                                            class="fa-light fa-arrow-right"></i></span>{{ $l['title_'.session('locale')] }}</a></li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>


@endsection
