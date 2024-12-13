@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10">
        <hr>
        <!-- Tablar -->
        <ul class="nav nav-pills justify-content-center" id="horizontalNavbar" role="tablist">
            <li class="nav-item">
                <a class="nav-link {{ request('tab', 'home') == 'home' ? 'active' : '' }} p-3 m-5 border-1 rounded-pill"
                   href="?tab=home&home_page={{ request('home_page', 1) }}">
                    StartUplar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request('tab') == 'profile' ? 'active' : '' }} p-3 m-5 border-1 rounded-pill"
                   href="?tab=profile&profile_page={{ request('profile_page', 1) }}">
                    Ilmiy Loyihalar
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- Tab kontenti -->
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="tab-content" id="horizontalNavbarContent">

            <!-- StartUplar -->
            <div class="tab-pane fade {{ request('tab', 'home') == 'home' ? 'show active' : '' }}" id="home" role="tabpanel">
                @foreach($start_ups as $startup)
                    <div class="container my-5">
                        <div class="row align-items-center bg-light rounded shadow p-4">
                            <div class="col-md-4">
                                <div class="bg-white rounded p-3 shadow">
                                    <h5 class="fw-bold">{!! $startup['title_' . session('locale')] !!}</h5>
                                    <ul class="list-unstyled">
                                        <li>{!! Str::limit($startup['opportunities_tasks_' . session('locale')], 170, '...') !!}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('storage/'.$startup->image) }}" alt="Image" class="img-fluid rounded shadow">
                            </div>
                            <div class="col-md-4">
                                <h3 class="fw-bold">Loyiha haqida</h3>
                                <p class="text-muted">
                                    {!! Str::limit($startup['project_objective_' . session('locale')], 150, '...') !!}
                                </p>
                                <a href="{{ route('start_up.show', $startup->id) }}" class="btn btn-primary mt-5 p-3">
                                    batafsil
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="container">
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $start_ups->appends(['tab' => 'home', 'home_page' => request('home_page', 1)])->links() }}
                    </div>
                </div>
            </div>

            <!-- Ilmiy Loyihalar -->
            <div class="tab-pane fade {{ request('tab') == 'profile' ? 'show active' : '' }}" id="profile" role="tabpanel">
                @foreach($projects as $project)
                    <div class="container my-5">
                        <div class="row align-items-center bg-light rounded shadow p-4">
                            <div class="col-md-4">
                                <div class="bg-white rounded p-3 shadow">
                                    <h5 class="fw-bold">{!! $project['title_' . session('locale')] !!}</h5>
                                    <ul class="list-unstyled">
                                        <li>{!! Str::limit($project['opportunities_tasks_' . session('locale')], 170, '...') !!}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('storage/'.$project->image) }}" alt="Image" class="img-fluid rounded shadow">
                            </div>
                            <div class="col-md-4">
                                <h3 class="fw-bold">Loyiha haqida</h3>
                                <p class="text-muted">
                                    {!! Str::limit($project['project_objective_' . session('locale')], 150, '...') !!}
                                </p>
                                <a href="{{ route('start_up.show', $project->id) }}" class="btn btn-primary mt-5 p-3">
                                    batafsil
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="container">
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $projects->appends(['tab' => 'profile', 'profile_page' => request('profile_page', 1)])->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
