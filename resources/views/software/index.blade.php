@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4 text-center">@lang('crud.software.name')</h2>
        @livewire('software-products')
    </div>
@endsection
