@extends('layouts.app')
@section('content')
    <div class="rts-blog-details rts-section-padding">
        <div class="container">
            {{ $software }}
            <div class="row justify-content-center g-5">
                <div class="col-lg-12 col-md-12">
                    <article class="blog-details">
                        <div class="blog-details__featured-image">
                            <img src="{{ asset('storage/'.$software->image) }}" alt="blog post">
                        </div>

                        <h3 class="blog-title">{{ $software['name_'.session('locale')] }}</h3>
                        {!! $software['description_'.session('locale')] !!}
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
