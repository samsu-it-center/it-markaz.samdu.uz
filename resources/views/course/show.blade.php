@extends('layouts.app')
@section('content')
    @livewire('course-details',['course' => $course])
@endsection
