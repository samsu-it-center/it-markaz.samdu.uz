@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-10">
        <hr>

        <!-- Tablar -->
        <ul class="nav nav-pills justify-content-center flex-wrap" id="horizontalNavbar" role="tablist">
            @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link {{ request('tab') == $category->id || (request('tab') == null && $loop->first) ? 'active' : '' }} p-3 m-2 border-5 software-link-border"
                       href="?tab={{ $category->id }}&{{ $category->id }}_page={{ request($category->id . '_page', 1) }}">
                        {{ $category->name }}
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
                    <div
                        class="tab-pane fade {{ request('tab') == $key || (request('tab') == null && $loop->first) ? 'show active' : '' }}"
                        id="{{ $key }}" role="tabpanel">
                        @foreach($softwareCollection as $software)
                            <div class="container my-5">
                                <div class="card-software">
                                    <div class="card-software-section">
                                        <h2 class="title-software">{!! $software['name_' . session('locale')] !!}</h2>
                                        <p class="description-software">{!! Str::limit($software['description_' . session('locale')], 300, '...') !!}</p>
                                        <a href="{{ route('software.show', $software->id) }}"
                                           class="read-more-software">Batafsil</a>
                                    </div>
                                    <div class="card-software-section-image">
                                        <img src="{{ asset('storage/'.$software->image) }}"
                                             alt="Center Image" class="img-fluid rounded shadow">
                                    </div>
                                </div>
                            </div>
                    @endforeach

                    <!-- Pagination -->
                        <div class="container">
                            <div class="mt-4 d-flex justify-content-center">
                                {{ $softwareCollection->appends(request()->except($key . '_page'))->links() }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
