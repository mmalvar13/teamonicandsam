@extends('layouts.master')

@section('content')
    {{--@foreach($organizations as $organization)--}}
        {{--<p>{{ $organization->name }}</p>--}}
    {{--@endforeach--}}
    <p>{{ $organizations->name }}</p>
@stop