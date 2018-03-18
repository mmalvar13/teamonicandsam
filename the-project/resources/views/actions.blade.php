@extends('layout')

@section('content')
    <section class="actions-purple-section">
    <div class="container">
            <h1 class="header-text white">Actions</h1>
        <br>
        <br>
        @foreach($actions as $action)
            <div class="row gray-bg actions">
                <div class="col-sm-12 col-lg-2">
                    <h4 class="actions-date">{{ $action->date }}</h4>
                </div>
                <div class="col-sm-12 col-lg-10">
                    <h3>{{ $action->title }}</h3>
                    <p>{{ $action->description }}</p>
                    <a href="{{ $action->website }}">
                        <div class="button-wrap">
                            <button type="button" class="btn btn-green">Take Action</button>
                        </div>
                    </a>
                    <p>{{ $action->phone_number }}</p>
                </div>
            </div>
        @endforeach
    </div>
    </section>
@stop