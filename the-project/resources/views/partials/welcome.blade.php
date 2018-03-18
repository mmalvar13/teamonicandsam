@extends('layouts.master')
@section('content')
    @foreach($types as $type)
            <div class="col-md-4">
                <div class="intro-table intro-table-1 intro-table-hover">
                    <h5 class="white heading">{{$type->name}}</h5>
                    <div class="bottom">
                        <h4 class="white heading small-heading no-margin regular">Register Today</h4>
                        <h4 class="white heading small-pt">20% Discount</h4>
                        <a href="#" class="btn btn-white-fill expand">Register</a>
                    </div>

                </div>
            </div>

    @endforeach
@stop