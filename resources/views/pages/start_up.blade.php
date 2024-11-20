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
            <div class="all-program-category">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach($start_ups as $start_up)
                        <div class="col">
                            <div class="single-cat-item d-flex flex-column flex-md-row">
                                <div class="cat-thumb col-md-5 mb-3 mb-md-0">
                                    <img src="{{ asset('storage/'.$start_up->image) }}" alt="course-thumbnail" class="img-fluid rounded">
                                    <a href="{{ route('start_up.show', $start_up->id) }}" class="cat-link-btn mt-2 d-inline-block">startup</a>
                                </div>
                                <div class="cat-meta col-md-7">
                                    <div class="cat-title">
                                        <a href="{{ route('start_up.show', $start_up->id) }}" class="h5 text-decoration-none d-block">{!! $start_up['title_'.session('locale')] !!}</a>
                                        <p class="mt-2 text-muted">{!! $start_up['opportunities_tasks_'.session('locale')] !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="container">
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $start_ups->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
