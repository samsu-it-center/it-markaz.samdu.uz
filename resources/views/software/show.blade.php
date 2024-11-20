@extends('layouts.app')

@section('content')
    <div class="rts-blog-details rts-section-padding">
        <div class="container">
            <div class="row justify-content-center g-5">
                <div class="col-lg-12 col-md-12">
                    <article class="blog-details">
                        <!-- Featured Image -->
                        <div class="blog-details__featured-image">
                            <img src="{{ asset('storage/'.$software->image) }}" alt="Software Image">
                        </div>
                        <h3 class="blog-title">{{ $software['name_'.session('locale')] }}</h3>

                        {!! $software['description_'.session('locale')] !!}

                        @if($software->video_url)
                            <div class="video-link">
                                <a class="btn btn-primary text-center btn-xs" target="_blank"  href="{{ $software->video_url }}">Watch Video</a>
                            </div>
                        @endif

                        <div class="software-link">
                            <a class="btn btn-primary text-center btn-xs" target="_blank"  href="{{ $software->link }}">Visit the software website</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
