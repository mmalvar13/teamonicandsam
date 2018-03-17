@extends('layout')

@section('content')
    @foreach($organizations as $organization)
        <p>{{ $organization->name }}</p>
    @endforeach
@stop