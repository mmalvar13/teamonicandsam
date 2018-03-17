@extends('layouts.master')

@section('content')
    @foreach($categories as $category)
        <p>{{ $category->name }}</p>
    @endforeach
@stop

