{{--view all actions posted by an organization--}}

@extends('layout')

@section('content')
    <section class="actions-purple-section">
        <div class="container">
            @foreach($organizations as $organization)
                <h1 class="header-text white">{{ $organization->name }}</h1>
                <br>
                <br>
                <p>{{ route ('get_your_actions', ['id' => $organization->id])}}</p>
    @endforeach
@stop
