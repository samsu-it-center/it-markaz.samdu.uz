@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <hr>
            <!-- Tabs -->
            <ul class="nav nav-pills justify-content-center" id="horizontalNavbar" role="tablist">
                <li class="nav-item">
                    <a class="nav-link {{ request('tab', 'home') == 'home' ? 'active' : '' }} p-3 m-5 border-1 rounded-pill"
                       href="?tab=home&home_page={{ request('home_page', 1) }}">
                        Sun'iy intellektga asoslangan loyihalar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request('tab') == 'profile' ? 'active' : '' }} p-3 m-5 border-1 rounded-pill"
                       href="?tab=profile&profile_page={{ request('profile_page', 1) }}">
                        Ta'limga asoslangan loyihalar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request('tab') == 'courses' ? 'active' : '' }} p-3 m-5 border-1 rounded-pill"
                       href="?tab=courses">
                        Tijoratga asoslangan loyihalar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request('tab') == 'products' ? 'active' : '' }} p-3 m-5 border-1 rounded-pill"
                       href="?tab=products">
                        Biznesni avtomatlashtirishga mo‘ljallangan loyihalar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request('tab') == 'events' ? 'active' : '' }} p-3 m-5 border-1 rounded-pill"
                       href="?tab=events">
                        Davlat loyihalari
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <!-- Tab Content -->
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="tab-content" id="horizontalNavbarContent">

                <!-- StartUplar -->
                <div class="tab-pane fade {{ request('tab', 'home') == 'home' ? 'show active' : '' }}" id="home"
                     role="tabpanel">
                    @foreach($aiSoftwares as $aiSoftware)
                        <div class="container my-5">
                            <div class="row align-items-center bg-light rounded shadow p-4">
                                <!-- Chap tomon: Kartalar -->
                                <div class="col-md-4">
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <div class="bg-white rounded p-3 shadow">
                                                <h5 class="fw-bold">{!! $aiSoftware['title_' . session('locale')] !!}</h5>
                                                <ul class="list-unstyled">
                                                    <li>{!! Str::limit($aiSoftware['description_' . session('locale')], 170, '...') !!}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Markaz: Rasm -->
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('storage/'.$aiSoftware->image) }}" alt="Center Image"
                                         class="img-fluid rounded shadow">
                                </div>

                                <!-- O'ng tomon: Yozuv -->
                                <div class="col-md-4">
                                    <h3 class="fw-bold">{!! $aiSoftware['name_' . session('locale')] !!}</h3>
                                    <p class="text-muted">
                                        {!! Str::limit($aiSoftware['project_objective_' . session('locale')], 150, '...') !!}
                                    </p>
                                    <a href="{{ route('software.show', $aiSoftware->id)}}"
                                       class="btn btn-primary mt-5 p-3">
                                        batafsil
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="container">
                        <div class="mt-4 d-flex justify-content-center">
                            {{ $aiSoftwares->appends(request()->except('ai_page'))->links() }}
                        </div>
                    </div>
                </div>

                <!-- Ilmiy Loyihalar -->
                <div class="tab-pane fade {{ request('tab') == 'profile' ? 'show active' : '' }}" id="profile"
                     role="tabpanel">
                    @foreach($educationalSoftwares as $educationalSoftware)
                        <div class="container my-5">
                            <div class="row align-items-center bg-light rounded shadow p-4">
                                <!-- Chap tomon: Kartalar -->
                                <div class="col-md-4">
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <div class="bg-white rounded p-3 shadow">
                                                <h5 class="fw-bold">{!! $educationalSoftware['title_' . session('locale')] !!}</h5>
                                                <ul class="list-unstyled">
                                                    <li>{!! Str::limit($educationalSoftware['description_' . session('locale')], 170, '...') !!}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Markaz: Rasm -->
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('storage/'.$educationalSoftware->image) }}" alt="Center Image"
                                         class="img-fluid rounded shadow">
                                </div>

                                <!-- O'ng tomon: Yozuv -->
                                <div class="col-md-4">
                                    <h3 class="fw-bold">{!! $educationalSoftware['name_' . session('locale')] !!}</h3>
                                    <p class="text-muted">
                                        {!! Str::limit($educationalSoftware['project_objective_' . session('locale')], 150, '...') !!}
                                    </p>
                                    <a href="{{ route('software.show', $educationalSoftware->id)}}"
                                       class="btn btn-primary mt-5 p-3">
                                        batafsil
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div class="container">
                        <div class="mt-4 d-flex justify-content-center">
                            {{ $educationalSoftwares->appends(request()->except('educational_page'))->links() }}
                        </div>
                    </div>

                </div>

                <!-- Kurslar -->
                <div class="tab-pane fade {{ request('tab') == 'courses' ? 'show active' : '' }}" id="courses"
                     role="tabpanel">
                    @foreach($commericalSoftwares as $commericalSoftware)
                        <div class="container my-5">
                            <div class="row align-items-center bg-light rounded shadow p-4">
                                <!-- Chap tomon: Kartalar -->
                                <div class="col-md-4">
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <div class="bg-white rounded p-3 shadow">
                                                <h5 class="fw-bold">{!! $commericalSoftware['title_' . session('locale')] !!}</h5>
                                                <ul class="list-unstyled">
                                                    <li>{!! Str::limit($commericalSoftware['description_' . session('locale')], 170, '...') !!}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Markaz: Rasm -->
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('storage/'.$commericalSoftware->image) }}" alt="Center Image"
                                         class="img-fluid rounded shadow">
                                </div>

                                <!-- O'ng tomon: Yozuv -->
                                <div class="col-md-4">
                                    <h3 class="fw-bold">{!! $commericalSoftware['name_' . session('locale')] !!}</h3>
                                    <p class="text-muted">
                                        {!! Str::limit($commericalSoftware['project_objective_' . session('locale')], 150, '...') !!}
                                    </p>
                                    <a href="{{ route('software.show', $commericalSoftware->id)}}"
                                       class="btn btn-primary mt-5 p-3">
                                        batafsil
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="container">
                        <div class="mt-4 d-flex justify-content-center">
                            {{ $commericalSoftwares->appends(request()->except('commerical_page'))->links() }}
                        </div>
                    </div>

                </div>

                <!-- Mahsulotlar -->
                <div class="tab-pane fade {{ request('tab') == 'products' ? 'show active' : '' }}" id="products"
                     role="tabpanel">
                    @foreach($buisaSoftwares as $buisaSoftware)
                        <div class="container my-5">
                            <div class="row align-items-center bg-light rounded shadow p-4">
                                <!-- Chap tomon: Kartalar -->
                                <div class="col-md-4">
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <div class="bg-white rounded p-3 shadow">
                                                <h5 class="fw-bold">{!! $buisaSoftware['title_' . session('locale')] !!}</h5>
                                                <ul class="list-unstyled">
                                                    <li>{!! Str::limit($buisaSoftware['description_' . session('locale')], 170, '...') !!}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Markaz: Rasm -->
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('storage/'.$buisaSoftware->image) }}" alt="Center Image"
                                         class="img-fluid rounded shadow">
                                </div>

                                <!-- O'ng tomon: Yozuv -->
                                <div class="col-md-4">
                                    <h3 class="fw-bold">{!! $buisaSoftware['name_' . session('locale')] !!}</h3>
                                    <p class="text-muted">
                                        {!! Str::limit($buisaSoftware['project_objective_' . session('locale')], 150, '...') !!}
                                    </p>
                                    <a href="{{ route('software.show', $buisaSoftware->id)}}"
                                       class="btn btn-primary mt-5 p-3">
                                        batafsil
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="container">
                        <div class="mt-4 d-flex justify-content-center">
                            {{ $buisaSoftwares->appends(request()->except('buisa_page'))->links() }}
                        </div>
                    </div>
                </div>

                <!-- Tadbirlar -->
                <div class="tab-pane fade {{ request('tab') == 'events' ? 'show active' : '' }}" id="events"
                     role="tabpanel">
                    @foreach($publicSoftwares as $publicSoftware)
                        <div class="container my-5">
                            <div class="row align-items-center bg-light rounded shadow p-4">
                                <!-- Chap tomon: Kartalar -->
                                <div class="col-md-4">
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <div class="bg-white rounded p-3 shadow">
                                                <h5 class="fw-bold">{!! $publicSoftware['title_' . session('locale')] !!}</h5>
                                                <ul class="list-unstyled">
                                                    <li>{!! Str::limit($publicSoftware['description_' . session('locale')], 170, '...') !!}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Markaz: Rasm -->
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('storage/'.$publicSoftware->image) }}" alt="Center Image"
                                         class="img-fluid rounded shadow">
                                </div>

                                <!-- O'ng tomon: Yozuv -->
                                <div class="col-md-4">
                                    <h3 class="fw-bold">{!! $publicSoftware['name_' . session('locale')] !!}</h3>
                                    <p class="text-muted">
                                        {!! Str::limit($publicSoftware['project_objective_' . session('locale')], 150, '...') !!}
                                    </p>
                                    <a href="{{ route('software.show', $publicSoftware->id)}}"
                                       class="btn btn-primary mt-5 p-3">
                                        batafsil
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="container">
                        <div class="mt-4 d-flex justify-content-center">
                            {{ $publicSoftwares->appends(request()->except('public_page'))->links() }}
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>



@endsection







