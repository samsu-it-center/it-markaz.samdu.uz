@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-10">
        <hr>
        <!-- Tablar -->
        <ul class="nav nav-pills justify-content-center flex-wrap mt--100" id="horizontalNavbar" role="tablist">
            @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link {{ request('tab', $categories->first()->id) == $category->id ? 'active' : '' }} p-3 m-2 border-1 software-link-border"
                       href="?tab={{ $category->id }}&{{ $category->id }}_page={{ request($category->id . '_page', 1) }}">

                        {{ $category->{'name_' . session('locale')} }}



                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<!-- Tab kontenti -->
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="tab-content" id="horizontalNavbarContent">
            @foreach($tabs as $key => $items)
                <div class="tab-pane fade {{ request('tab', $categories->first()->id) == $key ? 'show active' : '' }}" id="{{ $key }}" role="tabpanel">
                    @foreach($items as $item)


                         <div class="container my-5">
                                <div class="card-software">
                                    <div class="card-software-section">
                                        <h2 class="title-software">{!! $item['title_' . session('locale')] !!}</h2>
                                        <p class="description-software">{!! Str::limit($item['description_' . session('locale')], 170, '...') !!}</p>
                                        <a href="{{ route('start_up.show', $item->id) }}"
                                           class="read-more-software">Batafsil</a>
                                    </div>
                                    <div class="card-software-section-image">
                                        <img src="{{ asset('storage/'.$item->image) }}" alt="Image" class="img-fluid rounded shadow">--}}
                                    </div>
                                </div>
                            </div>

                    @endforeach

                    <!-- Pagination -->
                    <div class="container">
                        <div class="mt-4 d-flex justify-content-center">
                            {{ $items->appends(['tab' => $key, $key . '_page' => request($key . '_page', 1)])->links() }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

      <!-- Contact Button -->
                    <div class="header-right-area-one">
                        <button class="contact-btn border-0" id="contact-btn">
                            <i class="fa-brands fa-telegram mr--5"></i> Ariza qoldirish
                        </button>
                    </div>

@endsection
