@extends('layouts.app')
@section('content')
    <!-- content -->
    <div class="rts-academic-area rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <h3 class="rts-section-title">@lang('crud.start_up.title')</h3>
                </div>
            </div>

            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link {{ request()->get('tab') != 'profile' ? 'active' : '' }}"
                            id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">StartUplar
                    </button>
                    <button class="nav-link {{ request()->get('tab') == 'profile' ? 'active' : '' }}"
                            id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">Ilmiy loyihalar
                    </button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade {{ request()->get('tab') != 'profile' ? 'show active' : '' }}"
                         id="v-pills-home" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">
                        <div class="all-program-category">
                            <div class="row g-4">
                                @foreach($start_ups as $start_up)
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="single-cat-item row">
                                            <div class="cat-thumb col-md-5">
                                                <img src="{{ asset('storage/'.$start_up->image) }}"
                                                     alt="course-thumbnail" class="img-fluid">
                                                <a href="{{ route('start_up.show', $start_up->id) }}"
                                                   class="cat-link-btn">startup</a>
                                            </div>
                                            <div class="cat-meta col-md-7">
                                                <div class="cat-title">
                                                    <a href="{{ route('start_up.show', $start_up->id) }}">{!! $start_up['title_' . session('locale')] !!}</a>
                                                    <p>{!! $start_up['description_' . session('locale')] !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="container">
                            <div class="mt-4 d-flex justify-content-center">
                                {{ $start_ups->appends(['tab' => 'home'])->links() }}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ request()->get('tab') == 'profile' ? 'show active' : '' }}"
                         id="v-pills-profile" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab">
                        <div class="all-program-category">
                            <div class="row g-4">
                                @foreach($projects as $project)
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="single-cat-item row">
                                            <div class="cat-thumb col-md-5">
                                                <img src="{{ asset('storage/'.$project->image) }}"
                                                     alt="course-thumbnail" class="img-fluid">
                                                <a href="{{ route('start_up.show', $project->id) }}"
                                                   class="cat-link-btn">Ilmiy loyiha</a>
                                            </div>
                                            <div class="cat-meta col-md-7">
                                                <div class="cat-title">
                                                    <a href="{{ route('start_up.show', $project->id) }}">
                                                        {!! $project['title_' . session('locale')] !!}
                                                    </a>
                                                    <p>
                                                        @if(strlen($project['description_' . session('locale')]) > 150)
                                                            {!! Str::limit($project['description_' . session('locale')],150) !!}
                                                            <a href="{{ route('start_up.show', $project->id) }}">davomi</a>
                                                        @else
                                                            {!! Str::limit($project['description_' . session('locale')]) !!}
                                                        @endif
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="container">
                            <div class="mt-4 d-flex justify-content-center">
                                {{ $projects->appends(['tab' => 'profile'])->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
