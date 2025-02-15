@extends('layouts.app')

@section('content')
    <!-- Courses Section -->
    <div class="rts-blog v_3 mt--100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">

                    <ul class="nav nav-pills justify-content-center" id="horizontalNavbar">
                        <li class="nav-item">
                            <a class="nav-link p-3 border-5 software-link-border
            @if(request()->routeIs('course')) active @endif"
                               href="{{ route('course') }}">
                                @lang('crud.course_menus.menu_1')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-3 border-1 software-link-border
            @if(request()->routeIs('graduates.index')) active @endif"
                               href="{{ route('graduates.index') }}">
                                @lang('crud.course_menus.menu_2')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link p-3 border-1 software-link-border
            @if(request()->routeIs('talantedstudents.index')) active @endif"
                               href="{{ route('talantedstudents.index') }}">
                                @lang('crud.course_menus.menu_3')
                            </a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link p-3 border-1 software-link-border
            @if(request()->routeIs('statistics.index')) active @endif"
                               href="{{ route('statistics.index') }}">
                                @lang('crud.course_menus.menu_4')
                            </a>
                        </li>
                    </ul>


                    <hr>
                </div>
            </div>


            <div class="row justify-content-md-start justify-content-sm-center g-5">
                @foreach($graduates as $graduate)
                    <div class="col-sm-10 col-md-6 col-lg-6 col-xl-4">
                        <div class="single-blog">
                            <div class="blog single-blog__content">
                                <div class="blog__thumb">
                                    <img src="{{ asset('storage/'.$graduate->image) }}" alt="blog thumbnail">
                                </div>
                                <div class="blog__meta">
                                    <div class="blog__meta--da">
                                        <div class="blog-date">
                                            <span><i class="fal fa-keyboard-down"></i></span>
                                            <span>{{  $graduate->coursetype($graduate->type)->name_en }}</span>
                                        </div>
                                    </div>
                                    <h5 class="blog__title">
                                        <a href="{{ route('graduates.show', $graduate->id) }}">
                                            {{ $graduate->fullname}}
                                        </a>
                                    </h5>
                                    <p>{!! $graduate['info_'.session('locale')] ?? "Desc not found" !!}</p>
                                    <b><i class="fa-solid fa-flag-checkered"></i>
                                        - {{ \Carbon\Carbon::parse($graduate->graduation_date)->format('d-m-Y') }}</b>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    <span>{{ $graduates->links() }}</span>
                </div>

            </div>
        </div>
    </div>


@endsection
