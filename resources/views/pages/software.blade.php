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
                         Tijoratga  asoslangan loyihalar
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
                                    <h3 class="fw-bold">{!! $software['name_' . session('locale')] !!}</h3>
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
                </div>

                <!-- Ilmiy Loyihalar -->
                <div class="tab-pane fade {{ request('tab') == 'profile' ? 'show active' : '' }}" id="profile"
                     role="tabpanel">
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
                                    <h3 class="fw-bold">{!! $software['name_' . session('locale')] !!}</h3>
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
                </div>

                <!-- Kurslar -->
                <div class="tab-pane fade {{ request('tab') == 'courses' ? 'show active' : '' }}" id="courses"
                     role="tabpanel">
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
                                    <h3 class="fw-bold">{!! $software['name_' . session('locale')] !!}</h3>
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
                </div>

                <!-- Mahsulotlar -->
                <div class="tab-pane fade {{ request('tab') == 'products' ? 'show active' : '' }}" id="products"
                     role="tabpanel">
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
                                    <h3 class="fw-bold">{!! $software['name_' . session('locale')] !!}</h3>
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
                </div>

                <!-- Tadbirlar -->
                <div class="tab-pane fade {{ request('tab') == 'events' ? 'show active' : '' }}" id="events"
                     role="tabpanel">
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
                                    <h3 class="fw-bold">{!! $software['name_' . session('locale')] !!}</h3>
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
                </div>


            </div>
            <div class="container">
                <div class="mt-4 d-flex justify-content-center">
                    {{ $softwares->links() }}
                </div>
            </div>


        </div>
    </div>



@endsection


@extends('layouts.app')
@section('content')
    <div class="rts-blog v_3 rts-section-padding">
        <div class="row container">


            <div class="rts-section">
                <h3 class="rts-section-title">@lang('crud.software.name')</h3>
            </div>
            <hr>
        </div>


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
                                        <h3 class="fw-bold">{!! $software['name_' . session('locale')] !!}</h3>
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






