@extends('layouts.app')
@section('content')
    <div class="rts-blog-details rts-section-padding">
        <div class="container">
            <div class="row justify-content-center g-5">

                <div class="container my-5">
                    <div class="row mb-4">
                        <div class="col">
                            <div class="custom-card shadow">
                                <img src="{{ asset('storage/'.$start_up->image) }}" alt="Loyiha rasmi"
                                     class="custom-img">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card custom-card shadow p-3 info-card">
                                <div>

                                    <h3>{{ $start_up['title_' . session('locale', 'en')] ?? $start_up['title_en'] }}</h3>

                                    <p class="text-muted">
                                        {!!  $start_up['description_' . session('locale', 'en')] ?? $start_up['name_en']  !!}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
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
