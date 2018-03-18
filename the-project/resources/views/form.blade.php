@extends('layout')

<section class="purple-section resources">
    <h1>Create An Action</h1>


    {!! Form::open(array('action' => 'ActionController@store')) !!}

<div>{{Form::label('date', 'Date of Action')}}</div>
<div>{{Form::date('date', \Carbon\Carbon::now())}}</div>
<div>{{Form::label('title', 'Title of Action')}}</div>
 <div>{{Form::text('title')}}</div>
<div>{{Form::label('description', 'Description of Action')}}</div>
 <div>{{Form::textarea('description')}}</div>
<div>{{Form::label('how_to_help', 'How To Help')}}</div>
 <div>{{Form::textarea('how_to_help')}}</div>
<div>{{Form::label('phone_number', 'Contact Number')}}</div>
 <div>{{Form::text('phone_number')}}</div>
<div>{{Form::label('website', 'Website URL')}}</div>
 <div>{{Form::text('website')}}</div>
<div>{{Form::label('category_id', 'Choose a Category')}}</div>
 <div>{{Form::select('category_id', array('1' => 'Food', '2' => 'Education', '3' => 'Homelessness', '4' => 'Health', '5' => 'Event'))}}</div>
<div>{{Form::label('type_id', 'Choose an Action Type')}}</div>
 <div>{{Form::select('type_id', array('1' => 'Policy', '2' => 'Volunteer', '3' => 'Donate'))}}</div>
 <div>{{Form::hidden('organization_id', '1')}}</div>

 {{Form::submit('Submit')}}


{!! Form::close() !!}

</section>