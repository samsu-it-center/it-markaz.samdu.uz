@extends('layouts.app')
@section('content')
    @livewire('news-show',['id' => $news->id])
@endsection
