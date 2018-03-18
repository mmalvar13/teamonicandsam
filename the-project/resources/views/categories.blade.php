@extends('layout')

@section('content')
    @foreach($categories as $category)
        <div class="category-section">
            <p>{{ $category->name }}</p>
            <a href="{{ route('get_your_actions', ['id' => $category->id]) }}">Go Here</a>
        </div>
    @endforeach
@stop

