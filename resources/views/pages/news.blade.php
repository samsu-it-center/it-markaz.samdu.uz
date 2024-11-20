@extends('layouts.app')
@section('content')
<div class="rts-academic-area rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <h3 class="rts-section-title animated fadeIn">@lang('crud.news')</h3>
                </div>
            </div>

            <div class="all-program-category">
                <div class="row justify-content-sm-center justify-content-md-start g-5">
                    @foreach($news as $new)
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="single-event">
                                <div class="event single-event__content">
                                    <div class="event__thumb">
                                        <img src="{{ asset('storage/'.$new->image) }}" alt="event thumbnail">
                                    </div>
                                    <div class="event__meta">
                                        <div class="event__meta--da">
                                            <div class="event-date">
                                                <span><i class="fal fa-calendar"></i></span>
                                                <span>{{ $new->created_at->format('d/m/Y') }}</span>
                                            </div>
                                            <div class="event-time">
                                                <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                                <span>{{ $new->created_at->format('h:i A') }}</span>
                                            </div>

                                            <div class="event-eye">
                                                <span><i class="fa-sharp fa-thin fa-street-view"></i></span>
                                                <span>{{ $new->views }}</span>
                                            </div>
                                        </div>
                                        <h5 class="event__title">
                                            <a href="{{ route('news.show',$new->id) }}">
                                                {{$new['title_'.(session('locale') ?? "uz")]}}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="container">
                    <div class="mt--20 d-flex justify-content-center">
                        {{ $news->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
