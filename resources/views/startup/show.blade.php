@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4 text-center">@lang('crud.start_up.opportunities_tasks')</h2>
        @livewire('project-show',['id' => $start_up->id])
    </div>
@endsection
