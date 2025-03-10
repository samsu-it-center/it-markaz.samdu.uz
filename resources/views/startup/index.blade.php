@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4 text-center">@lang('crud.menu.start_up')</h2>
        @livewire('projects-tabs')
    </div>
@endsection
