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

                        <!-- Title -->
                        <h3 class="blog-title">{{ $software['name_'.session('locale')] }}</h3>

                        <!-- Description -->
                    {!! $software['description_'.session('locale')] !!}

                    <!-- Video Link (Optional) -->
                        @if($software->video_url)
                            <div class="video-link">
                                <a href="{{ $software->video_url }}" target="_blank">Watch Video</a>
                            </div>
                    @endif

                    <!-- Link to Software Website -->
                        <div class="software-link">
                            <a href="{{ $software->link }}" target="_blank">Visit the software website</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
