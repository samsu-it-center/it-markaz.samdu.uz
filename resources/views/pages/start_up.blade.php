@extends('layouts.app')
@section('content')
    <!-- content -->
{{--    <div class="rts-academic-area rts-section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="rts-section">--}}
{{--                    <h3 class="rts-section-title">@lang('crud.start_up.title')</h3>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="row justify-content-center">

                <div class="col-md-10">
                        <hr>
                    <ul class="nav nav-pills justify-content-center " id="horizontalNavbar" role="tablist">
                        <li class="nav-item">
                            <button
                                class="nav-link {{ request('tab') == 'home' ? 'active' : '' }} p-3 m-5 border-1 rounded-pill"
                                id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">
                                StartUplar
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link"></button>
                        </li>
                        <li class="nav-item">
                            <button
                                class="nav-link {{ request('tab') == 'profile' ? 'active' : '' }} p-3 m-5 border-1 rounded-pill"
                                id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings"
                                type="button" role="tab" aria-controls="settings" aria-selected="false">
                                Ilmiy Loyihalar
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="tab-content" id="horizontalNavbarContent">

                        <div class="tab-pane fade show {{ request('tab') == 'home' ? 'active' : '' }}" id="profile"
                             role="tabpanel"
                             aria-labelledby="profile-tab">

                            @foreach($start_ups as $startup)
                                <div class="container my-5">
                                    <div class="row align-items-center bg-light rounded shadow p-4">
                                        <!-- Chap tomon: Kartalar -->
                                        <div class="col-md-4">
                                            <div class="row gy-3">

                                                <div class="col-12">
                                                    <div class="bg-white rounded p-3 shadow">
                                                        <h5 class="fw-bold">{!! $startup['title_' . session('locale')] !!}</h5>
                                                        <ul class="list-unstyled">
                                                            <li>{!! Str::limit($startup['opportunities_tasks_' . session('locale')], 170, '...') !!}</li>
                                                        </ul>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Markaz: Rasm -->
                                        <div class="col-md-4 text-center">
                                            <img src="{{ asset('storage/'.$startup->image) }}" alt="Center Image"
                                                 class="img-fluid rounded shadow">
                                        </div>

                                        <!-- O'ng tomon: Yozuv -->

                                        <div class="col-md-4">
                                            <h3 class="fw-bold">Loyiha haqida</h3>
                                            <!-- Qisqartirilgan matnni ko'rsatish -->
                                            <p class="text-muted">
                                                {!!  Str::limit($startup['project_objective_' . session('locale')], 150, '...') !!}
                                            </p>
                                            <!-- "Узнать больше" tugmasi -->
                                            <a href="{{ route('start_up.show', $startup->id) }}"
                                               class="btn btn-primary mt-5 p-3">
                                                batafsil
                                            </a>
                                        </div>


                                    </div>
                                </div>
                            @endforeach

                            <div class="container">
                                <div class="mt-4 d-flex justify-content-center">
                                    {{ $start_ups->appends(['tab' => 'home'])->links() }}
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show {{ request('tab') == 'profile' ? 'active' : '' }}" id="settings"
                             role="tabpanel" aria-labelledby="settings-tab">
                            @foreach($projects as $project)
                                <div class="container my-5">
                                    <div class="row align-items-center bg-light rounded shadow p-4">
                                        <!-- Chap tomon: Kartalar -->
                                        <div class="col-md-4">
                                            <div class="row gy-3">

                                                <div class="col-12">
                                                    <div class="bg-white rounded p-3 shadow">
                                                        <h5 class="fw-bold">{!! $project['title_' . session('locale')] !!}</h5>
                                                        <ul class="list-unstyled">
                                                            <li>{!! Str::limit($project['opportunities_tasks_' . session('locale')], 170, '...') !!}</li>
                                                        </ul>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Markaz: Rasm -->
                                        <div class="col-md-4 text-center">
                                            <img src="{{ asset('storage/'.$project->image) }}" alt="Center Image"
                                                 class="img-fluid rounded shadow">
                                        </div>

                                        <!-- O'ng tomon: Yozuv -->

                                        <div class="col-md-4">
                                            <h3 class="fw-bold">Loyiha haqida</h3>
                                            <!-- Qisqartirilgan matnni ko'rsatish -->
                                            <p class="text-muted">
                                                {!!  Str::limit($project['project_objective_' . session('locale')], 150, '...') !!}
                                            </p>
                                            <!-- "Узнать больше" tugmasi -->
                                            <a href="{{ route('start_up.show', $project->id) }}"
                                               class="btn btn-primary mt-5 p-3">
                                                batafsil
                                            </a>
                                        </div>


                                    </div>
                                </div>
                            @endforeach
                            <div class="container">
                                <div class="mt-4 d-flex justify-content-center">
                                    {{ $projects->appends(['tab' => 'profile'])->links() }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <div >
            <hr class="m-1">
        </div>
{{--        </div>--}}
{{--    </div>--}}
@endsection
