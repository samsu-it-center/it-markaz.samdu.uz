@extends('layouts.app')
@section('content')
    <div class="rts-blog-details rts-section-padding">
        <div class="container">
            {{ $start_up }}
            <div class="row justify-content-center g-5">
                <div class="col-lg-12 col-md-12">
                    <article class="blog-details">
                        <div class="blog-details__featured-image">
                            <img src="{{ asset('storage/'.$start_up->image) }}" alt="blog post">
                        </div>

                        <h3 class="blog-title">{{ $start_up['title_'.session('locale')] }}</h3>
                        {!! $start_up['description_'.session('locale')] !!}
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
