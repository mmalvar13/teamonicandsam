@extends('layout')

@section('content')
    @foreach($actions as $action)
        <p>{{ $action->name }}</p>
    @endforeach
@stop