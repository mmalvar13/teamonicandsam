@extends('layout')

@section('content')
    @foreach($types as $type)
        <p>{{ $type->name }}</p>
    @endforeach
@stop