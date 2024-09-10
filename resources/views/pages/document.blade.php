@extends('layouts.app')
@section('content')
    <section class="rts-about-university rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <div class="col-lg-4 col-md-5">
                        <h3 class="rts-section-title animated fadeIn">@lang('crud.document.document')</h3>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-md-center justify-content-start">
                {!! $document['description_'.session('locale')] !!}
            </div>

            <section class="rts-program v_2 rts-section-padding">
                <div class="container">
                    <div class="row justify-content-center g-0">
                        <div class="col-lg-12 col-md-10">
                            <div class="rts-program-single ">
                                <div class="rts-program-single__content">
                                    <div class="rts-program-hover center-item rt-primary-bg">
                                        <ul class="list-unstyled">
                                            @foreach($document->files as $d)
                                            <li class="single-program">
                                                <div class="icon-box">
                                                    <img src="{{ asset('site/assets/images/icon/arrow-rotate-2.svg') }}" alt="">
                                                </div>
                                                <a href="{{ asset('storage/'.$d->file) }}" download="">{{ $d->description }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
