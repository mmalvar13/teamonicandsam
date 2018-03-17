@extends('layout')

@section('content')
    @foreach($actions as $action)
        <p>{{ $action->title }}</p>
    @endforeach
@stop