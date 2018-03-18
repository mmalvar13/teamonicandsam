@extends('layout')

@section('content')
    <div>Hey we're in events</div>
    @foreach($actions as $action)
        <p>{{ $action->title }}</p>
        <p>{{ $action->description }}</p>
        <p>{{ $action->date }}</p>
        <p>{{ $action->website }}</p>
        <p>{{ $action->phone_number }}</p>
    @endforeach
@stop