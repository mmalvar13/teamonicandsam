{!! Form::open(array('action' => 'ActionController@store')) !!}

{{Form::label('date', 'Date of Action')}}
{{Form::date('date', \Carbon\Carbon::now())}}
{{Form::label('title', 'Title of Action')}}
 {{Form::text('title')}}
{{Form::label('description', 'Description of Action')}}
 {{Form::textarea('description')}}
{{Form::label('how_to_help', 'How To Help')}}
 {{Form::textarea('how_to_help')}}
{{Form::label('phone_number', 'Contact Number')}}
 {{Form::text('phone_number')}}
{{Form::label('website', 'Website URL')}}
 {{Form::text('website')}}
{{Form::label('category_id', 'Choose a Category')}}
 {{Form::select('category_id', array('1' => 'Food', '2' => 'Education', '3' => 'Homelessness', '4' => 'Health', '5' => 'Event'))}}
{{Form::label('type_id', 'Choose an Action Type')}}
 {{Form::select('type_id', array('1' => 'Policy', '2' => 'Volunteer', '3' => 'Donate'))}}
 {{Form::hidden('organization_id', '1')}}

 {{Form::submit('Click Me!')}}


{!! Form::close() !!}
