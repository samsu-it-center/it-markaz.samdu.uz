@extends('layouts.app')
@section('content')
    <div class="rts-blog-details rts-section-padding">
        <div class="container">
            <div class="row justify-content-center g-5">
                <div class="col-lg-12 col-md-12">
                    <article class="blog-details">
                        <div class="blog-details__featured-image">
                            <img src="{{ asset('storage/'.$start_up->image) }}" alt="blog post">
                        </div>

                        <!-- Title -->
                        <h3 class="blog-title">
                            {{ $start_up['title_' . session('locale', 'en')] ?? $start_up['title_en'] }}
                        </h3>

                        <!-- Description -->
                        <div class="blog-description">
                            {!! $start_up['description_' . session('locale', 'en')] ?? $start_up['description_en'] !!}
                        </div>

                        <!-- Project Objective -->
                        <div class="project-objective">
                            <h4>{{ __('Project Objective') }}</h4>
                            {!! $start_up['project_objective_' . session('locale', 'en')] ?? $start_up['project_objective_en'] !!}
                        </div>

                        <!-- Opportunities and Tasks -->
                        <div class="opportunities-tasks">
                            <h4>{{ __('Opportunities and Tasks') }}</h4>
                            {!! $start_up['opportunities_tasks_' . session('locale', 'en')] ?? $start_up['opportunities_tasks_en'] !!}
                        </div>

                        <!-- Budget -->
                        <div class="budget">
                            <h4>{{ __('Budget') }}</h4>
                            {!! $start_up['budget_' . session('locale', 'en')] ?? $start_up['budget_en'] !!}
                        </div>

                        <!-- Created Date -->
                        <div class="created-at">
                            <h4>{{ __('Created At') }}</h4>
                            {{ \Carbon\Carbon::parse($start_up->created_at)->format('d M Y') }}
                        </div>

                        <!-- Updated Date -->
                        <div class="updated-at">
                            <h4>{{ __('Updated At') }}</h4>
                            {{ \Carbon\Carbon::parse($start_up->updated_at)->format('d M Y') }}
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
