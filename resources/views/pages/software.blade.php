@extends('layouts.app')
@section('content')
    <div class="rts-blog v_3 rts-section-padding">
        <div class="row">
            <div class="rts-section">
                <h3 class="rts-section-title">@lang('crud.software.name')</h3>
            </div>
            <hr>
        </div>
        <div class="container">

            <div class="row justify-content-md-start justify-content-sm-center g-5">
                @foreach($softwares as $software)
                <div class="col-sm-10 col-md-6 col-lg-6 col-xl-4">
                    <div class="single-blog">
                        <div class="blog single-blog__content">
                            <div class="blog__thumb">
                                <img src="{{ asset('storage/'.$software->image) }}" alt="blog thumbnail">
                            </div>
                            <div class="blog__meta">
                                <h5 class="blog__title"> <a href="#">{{ $software['name_'.session('locale')] }}</a></h5>
                                <a href="{{ route('software.show',$software->id) }}" class="rts-theme-btn primary with-arrow lh-100">@lang('crud.software.views') <span><i class="fa-thin fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
            <div class="container">
                <div class="mt--20 d-flex justify-content-center">
                    {{ $softwares->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
