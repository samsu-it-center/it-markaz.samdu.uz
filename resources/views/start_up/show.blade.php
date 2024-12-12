@extends('layouts.app')
@section('content')
    <div class="rts-blog-details rts-section-padding">
        <div class="container">
            <div class="row justify-content-center g-5">

                <div class="container my-5">
                    <div class="row mb-4">
                        <div class="col">
                            <div class="custom-card shadow">
                                <img src="{{ asset('storage/'.$start_up->image) }}" alt="Loyiha rasmi" class="custom-img">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="custom-heading">Loyiha haqida</h3>
                            <p class="text-muted">
                                 {!! $start_up['description_' . session('locale', 'en')] ?? $start_up['description_en'] !!}
                            </p>
                            <p class="text-muted"><strong>Imkoniyatlar:</strong>{!! $start_up['opportunities_tasks_' . session('locale', 'en')] ?? $start_up['opportunities_tasks_en'] !!}</p>
                        </div>
                        <div class="col-md-4">
                            <div class="card custom-card shadow p-3 info-card">
                                <div>

                                    <p class="text-muted"><strong>Loyiha nomi:</strong> {{ $start_up['title_' . session('locale', 'en')] ?? $start_up['title_en'] }}</p>
                                    <p class="text-muted"><strong>Maqsad:</strong> {!! $start_up['project_objective_' . session('locale', 'en')] ?? $start_up['project_objective_en'] !!}</p>

                                    <p class="text-muted"><strong>Byudjet:</strong> {!! $start_up['budget_' . session('locale', 'en')] ?? $start_up['budget_en'] !!}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
@endsection
