@extends('layout')

@section('content')
    <div class="container">
        <h1 class="blue-bg white">Actions</h1>
        @foreach($actions as $action)
            <div class="row gray-bg actions">
                <div class="col-2">
                    <h6>{{ $action->date }}</h6>
                </div>
                <div class="col-10">
                    <h3>{{ $action->title }}</h3>
                    <p>{{ $action->description }}</p>
                    <a>{{ $action->website }}</a>
                    <p>{{ $action->phone_number }}</p>
                </div>
            </div>
    </div>
    @endforeach
@stop