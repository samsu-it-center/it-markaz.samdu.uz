@extends('layouts.app')

@section('content')
    <!-- Courses Section -->
    <div class="rts-blog v_3">
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
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="single-blog">
                        <div class="blog single-blog__content">
                            <div class="blog__thumb">

                            </div>
                            <div class="blog__meta ">
                                <div class="blog__meta--da d-flex justify-content-center">
                                    <div class="blog-date ">
                                        <span>
                                            <h5 class="">
                                                <i class="fa-solid fa-chart-simple mr--5"></i> @lang('crud.course_menus.menu_4')
                                            </h5>
                                        </span>
                                    </div>
                                </div>
                                <h5 class="blog__title">
                                    <!-- Title or other content can go here if needed -->
                                </h5>
                                <!-- Dynamically display content based on the current locale -->
                                <p>{!! $statistics['info_' . app()->getLocale()] ?? 'Description not found' !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
