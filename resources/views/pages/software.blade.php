@extends('layouts.app')
@section('content')
    <div class="rts-blog v_3 rts-section-padding">
        <div class="row container">
            <div class="rts-section">
                <h3 class="rts-section-title">@lang('crud.software.name')</h3>
            </div>
            <hr>
        </div>


            {{--            <div class="all-program-category">--}}
            {{--                <div class="row g-4">--}}
            {{--                    @foreach($softwares as $software)--}}
            {{--                        <div class="col-lg-12 col-md-12 col-sm-12">--}}
            {{--                            <div class="single-cat-item row">--}}
            {{--                                <div class="cat-thumb col-md-5">--}}
            {{--                                    <a href="{{ route('software.show', $software->id) }}"--}}
            {{--                                       class="">--}}
            {{--                                        <img src="{{ asset('storage/'.$software->image) }}"--}}
            {{--                                             alt="course-thumbnail"--}}
            {{--                                             class="img-fluid">--}}
            {{--                                        </a>--}}

            {{--                                </div>--}}
            {{--                                <div class="cat-meta col-md-7">--}}
            {{--                                    <div class="cat-title">--}}
            {{--                                        <a href="{{ route('software.show', $software->id) }}">{!! $software['name_' . session('locale')] !!}</a>--}}
            {{--                                        <p>{!! $software['description_' . session('locale')] !!}</p>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    @endforeach--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <div class="container">--}}
            {{--                <div class="mt--20 d-flex justify-content-center">--}}
            {{--                    {{ $softwares->links() }}--}}
            {{--                </div>--}}
            {{--            </div>--}}


            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="tab-content" id="horizontalNavbarContent">

                        <!-- StartUplar tab -->
                        <div
                            class="tab-pane fade show {{ request('tab') == 'home' || request('tab') == null ? 'active' : '' }}"
                            id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            @foreach($softwares as $software)
                                <div class="container my-5">
                                    <div class="row align-items-center bg-light rounded shadow p-4">
                                        <!-- Chap tomon: Kartalar -->
                                        <div class="col-md-4">
                                            <div class="row gy-3">
                                                <div class="col-12">
                                                    <div class="bg-white rounded p-3 shadow">
                                                        <h5 class="fw-bold">{!! $software['title_' . session('locale')] !!}</h5>
                                                        <ul class="list-unstyled">
                                                            <li>{!! Str::limit($software['description_' . session('locale')], 170, '...') !!}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Markaz: Rasm -->
                                        <div class="col-md-4 text-center">
                                            <img src="{{ asset('storage/'.$software->image) }}" alt="Center Image"
                                                 class="img-fluid rounded shadow">
                                        </div>

                                        <!-- O'ng tomon: Yozuv -->
                                        <div class="col-md-4">
                                            <h3 class="fw-bold">Loyiha haqida</h3>
                                            <p class="text-muted">
                                                {!! Str::limit($software['project_objective_' . session('locale')], 150, '...') !!}
                                            </p>
                                            <a href="{{ route('software.show', $software->id)}}"
                                               class="btn btn-primary mt-5 p-3">
                                                batafsil
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="container">
                                <div class="mt-4 d-flex justify-content-center">
                                    {{ $softwares->links() }}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
