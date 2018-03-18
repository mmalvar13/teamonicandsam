@extends('layout')

@section('content')
    <section class="actions-purple-section">
        <div class="container">
            <h1 class="header-text white">Actions</h1>
            <br>
            <br>
            @foreach($actions as $action)
                <div class="row gray-bg actions">
                    <div class="col-sm-12 col-lg-4">
                        <h5 class="actions-date">{{ $action->date }}</h5>
                    </div>
                    <div class="col-sm-12 col-lg-8">
                        <h3>{{ $action->title }}</h3>
                        <p>{{ $action->description }}</p>
                        <a href="{{ $action->website }}">
                            <div class="button-wrap">
                                <button type="button" class="btn btn-green">Learn More + Take Action</button>
                            </div>
                        </a>
                        <br>
                        <p><strong>Call your representative: </strong>{{ $action->phone_number }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@stop