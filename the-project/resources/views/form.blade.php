{!! Form::open(array('action' => 'ActionController@create')) !!}

{{
 Form::date('date', \Carbon\Carbon::now()),
 Form::text('title'),
 Form::textarea('description'),
 Form::textarea('how_to_help'),
 Form::text('phone_number'),
 Form::text('website'),
 Form::text('username'),
 Form::select('category_id', array('1' => 'Food', '2' => 'Education', '3' => 'Homelessness', '4' => 'Health', '5' => 'Event')),
 Form::select('type_id', array('1' => 'Policy', '2' => 'Volunteer', '3' => 'Donate')),
 Form::hidden('organization_id', '1'),

 Form::submit('Click Me!')
 }}

{!! Form::close() !!}
