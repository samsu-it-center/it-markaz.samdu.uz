@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <hr>
            <!-- Tabs -->
            <ul class="nav nav-pills justify-content-center" id="horizontalNavbar" role="tablist">
                <li class="nav-item">
                    <a class="nav-link {{ request('tab', 'home') == 'home' ? 'active' : '' }} p-3 m-5 border-5 software-link-border "
                       href="?tab=home&home_page={{ request('home_page', 1) }}">
                        Sun'iy intellektga asoslangan loyihalar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request('tab') == 'profile' ? 'active' : '' }} p-3 m-5 border-1 software-link-border "
                       href="?tab=profile&profile_page={{ request('profile_page', 1) }}">
                        Ta'limga asoslangan loyihalar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request('tab') == 'courses' ? 'active' : '' }} p-3 m-5 border-1 software-link-border "
                       href="?tab=courses">
                        Tijoratga asoslangan loyihalar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request('tab') == 'products' ? 'active' : '' }} p-3 m-5 border-1 software-link-border "
                       href="?tab=products">
                        Biznesni avtomatlashtirishga mo‘ljallangan loyihalar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request('tab') == 'events' ? 'active' : '' }} p-3 m-5 border-1 software-link-border "
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
                            <div class="card-software">
                                <!-- Matn uchun bo'lim -->
                                <div class="card-software-section">
                                    <h2 class="title-software">{!! $aiSoftware['name_' . session('locale')] !!}</h2>
                                    <p class="description-software">{!! Str::limit($aiSoftware['description_' . session('locale')], 300, '...') !!}</p>
                                    <a href="{{ route('software.show', $aiSoftware->id)}}" --}}
                                       class="read-more-software">
                                        Batafsil
                                    </a>
                                </div>

                                <!-- Rasm uchun bo'lim -->
                                <div class="card-software-section-image">
                                    <img src="{{ asset('storage/'.$aiSoftware->image) }}" alt="Center Image"
                                         --}}
                                         class="img-fluid rounded shadow">
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


                            <div class="card-software">
                                <!-- Matn uchun bo'lim -->
                                <div class="card-software-section">
                                    <h2 class="title-software">{!! $educationalSoftware['name_' . session('locale')] !!}</h2>
                                    <p class="description-software">{!! Str::limit($educationalSoftware['description_' . session('locale')], 300, '...') !!}</p>
                                    <a href="{{ route('software.show', $educationalSoftware->id)}}" --}}
                                       class="read-more-software">
                                        Batafsil
                                    </a>
                                </div>

                                <!-- Rasm uchun bo'lim -->
                                <div class="card-software-section-image">
                                    <img src="{{ asset('storage/'.$educationalSoftware->image) }}" alt="Center Image"
                                         --}}
                                         class="img-fluid rounded shadow">
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
                            <div class="card-software">
                                <!-- Matn uchun bo'lim -->
                                <div class="card-software-section">
                                    <h2 class="title-software">{!! $commericalSoftware['name_' . session('locale')] !!}</h2>
                                    <p class="description-software">{!! Str::limit($commericalSoftware['description_' . session('locale')], 300, '...') !!}</p>
                                    <a href="{{ route('software.show', $commericalSoftware->id)}}" --}}
                                       class="read-more-software">
                                        Batafsil
                                    </a>
                                </div>

                                <!-- Rasm uchun bo'lim -->
                                <div class="card-software-section-image">
                                    <img src="{{ asset('storage/'.$commericalSoftware->image) }}" alt="Center Image"
                                         --}}
                                         class="img-fluid rounded shadow">
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
                            <div class="card-software">
                                <!-- Matn uchun bo'lim -->
                                <div class="card-software-section">
                                    <h2 class="title-software">{!! $buisaSoftware['name_' . session('locale')] !!}</h2>
                                    <p class="description-software">{!! Str::limit($buisaSoftware['description_' . session('locale')], 300, '...') !!}</p>
                                    <a href="{{ route('software.show', $buisaSoftware->id)}}" --}}
                                       class="read-more-software">
                                        Batafsil
                                    </a>
                                </div>

                                <!-- Rasm uchun bo'lim -->
                                <div class="card-software-section-image">
                                    <img src="{{ asset('storage/'.$buisaSoftware->image) }}" alt="Center Image"
                                         --}}
                                         class="img-fluid rounded shadow">
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
                            <div class="card-software">
                                <!-- Matn uchun bo'lim -->
                                <div class="card-software-section">
                                    <h2 class="title-software">{!! $publicSoftware['name_' . session('locale')] !!}</h2>
                                    <p class="description-software">{!! Str::limit($publicSoftware['description_' . session('locale')], 300, '...') !!}</p>
                                    <a href="{{ route('software.show', $publicSoftware->id)}}" --}}
                                       class="read-more-software">
                                        Batafsil
                                    </a>
                                </div>

                                <!-- Rasm uchun bo'lim -->
                                <div class="card-software-section-image">
                                    <img src="{{ asset('storage/'.$publicSoftware->image) }}" alt="Center Image"
                                         --}}
                                         class="img-fluid rounded shadow">
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







