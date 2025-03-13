@extends('layouts.app')
@section('meta_title', $news->title_uz)
@section('meta_description', $news->content_uz)
@section('content')
    @livewire('news-show',['id' => $news->id])
@endsection
