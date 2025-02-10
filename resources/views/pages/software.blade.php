@extends('layouts.app')

@section('content')

<div class="row justify-content-center ">
    <div class="col-md-10 ">
        <hr>

        <!-- Tablar -->
        <ul class="nav nav-pills justify-content-center flex-wrap mt-3 " id="horizontalNavbar" role="tablist">
            @foreach($categories as $category)
                <li class="nav-item ">
                    <a class="nav-link {{ request('tab', $categories->first()->id) == $category->id ? 'active' : '' }} p-3 m-2 border-5 software-link-border"
                       href="?tab={{ $category->id }}&{{ $category->id }}_page={{ request($category->id . '_page', 1) }}">
                        {{ $category['name_' . session('locale')] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<!-- Tab Content -->
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="tab-content" id="horizontalNavbarContent">
            @foreach($tabs as $key => $softwareCollection)
                @if($softwareCollection->isNotEmpty())
                    <div class="tab-pane fade {{ request('tab', $categories->first()->id) == $key ? 'show active' : '' }}"
                         id="tab-{{ $key }}" role="tabpanel">

                        @foreach($softwareCollection as $software)
                            <div class="container my-3">
                                <div class="card-software">
                                    <div class="card-software-section">
                                        <h2 class="title-software">{!! $software['name_' . session('locale')] !!}</h2>
                                        <p class="description-software">{!! $software['description_' . session('locale')] !!}</p>
                                        <a href="{{ route('software.show', $software->id) }}" class="read-more-software">Batafsil</a>
                                    </div>
                                    <div class="card-software-section-image">
                                        <img src="{{ asset('storage/'.$software->image) }}" alt="Center Image"
                                             class="img-fluid rounded shadow">
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Pagination -->
                        <div class="container">
                            <div class="mt-4 d-flex justify-content-center">
                                {{ $softwareCollection->appends(['tab' => $key, $key . '_page' => request($key . '_page', 1)])->links() }}
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

<!-- Contact Button -->
<div class="header-right-area-one">
    <button class="contact-btn border-0" id="contact-btn">
        <i class="fa-brands fa-telegram mr-2"></i> Ariza qoldirish
    </button>
</div>

@endsection
