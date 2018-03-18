@extends('layout')

@section('content')
    <div class="container">
        <div class="table">
        <div class="header-text">
            <div class="row">
                <div class="col-md-12">
            <h1>Actions</h1>
                </div>
            </div>
        </div>
        </div>
        @foreach($actions as $action)
            <div class="row gray-bg actions">
                <div class="col-sm-12 col-lg-2">
                    <h4>{{ $action->date }}</h4>
                </div>
                <div class="col-sm-12 col-lg-10">
                    <h3>{{ $action->title }}</h3>
                    <p>{{ $action->description }}</p>
                    <a href="{{ $action->website }}">
                        <div class="button-wrap">
                            <button type="button" class="btn btn-info">Take Action</button>
                        </div>
                    </a>
                    <p>{{ $action->phone_number }}</p>
                </div>
            </div>
        @endforeach
    </div>
@stop