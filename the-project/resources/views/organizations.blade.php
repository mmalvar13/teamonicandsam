{{--view all actions posted by an organization--}}

@extends('layout')

@section('content')
    <section class="actions-purple-section">
        @foreach($organizations as $organization)


        <div class="col-md-6">
            <a href="{{'/organizations/' . $organization->id}}" class="btn-links-to-actions">
                <div class="service">
                    <div class="icon-holder">
                        <img src="img/icons/calendar-alt.svg" alt="" class="icon">
                    </div>
                    <h4 class="heading">{{$organization->name}}</h4>
                    <p class="description">Community led events for open participation</p>
                </div>
            </a>
        </div>
        @endforeach




        </div>
    </section>
@stop
