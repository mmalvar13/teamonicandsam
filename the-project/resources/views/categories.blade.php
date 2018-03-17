@extends('master.layout')

@section('content')
    @foreach($categories as $category)
        <p>{{ $category->name }}</p>
    @endforeach
@stop