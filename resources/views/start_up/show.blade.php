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

                        <h3 class="blog-title">
                            {{ $start_up['title_' . session('locale', 'en')] ?? $start_up['title_en'] }}
                        </h3>

                        <div class="blog-description">
                            {!! $start_up['description_' . session('locale', 'en')] ?? $start_up['description_en'] !!}
                        </div>

                        <div class="project-objective">
                            <h5 class="text-center my-1">@lang('crud.start_up.project_purpose')</h5>
                            {!! $start_up['project_objective_' . session('locale', 'en')] ?? $start_up['project_objective_en'] !!}
                        </div>

                        <div class="opportunities-tasks">
                            <h5 class="text-center my-1">@lang('crud.start_up.opportunities_tasks')</h5>
                            {!! $start_up['opportunities_tasks_' . session('locale', 'en')] ?? $start_up['opportunities_tasks_en'] !!}
                        </div>

                        <div class="budget">
                            <h5 class="text-center my-1">@lang('crud.start_up.price')</h5>
                            {!! $start_up['budget_' . session('locale', 'en')] ?? $start_up['budget_en'] !!}
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
