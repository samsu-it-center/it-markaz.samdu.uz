@extends('layouts.app')
@section('content')
   <div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">
                <div class="col-lg-6">
                    <!-- Image on the left -->
                    <img src="{{ asset('storage/'.$graduate->image) }}" class="img-fluid" alt="{{ $course['title_'.session('locale')] ?? 'Course image' }}" style="width: 60%;">
                </div>
                <div class="col-lg-6">
                    <!-- Text on the right -->
                    <h3 class="rts-section-title">{{ $graduate->fullname }}</h3>
                    <p class="rts-section-description">{!! $graduate['info_'.session('locale')] ?? "Desc not found" !!}</p>
                    <h5>{{  $graduate->coursetype($graduate->type)->name_en }} - {{ \Carbon\Carbon::parse($graduate->graduation_date)->format('d-m-Y') }}
</h5>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
