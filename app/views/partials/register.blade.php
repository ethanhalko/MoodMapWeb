@extends('default')
@section('content')
<div class="form-panel center-block">
	{{Form::open(['url'=>'register'])}}
		<div id="Username">
			{{Form::label('username', 'Username: ' )}}
			{{Form::text('username')}}
		</div>
		<div id="Password">
			{{Form::label('password', 'Password: ' )}}
			{{Form::password('password')}}
		</div>
		<div id="Username">
			{{Form::label('confirm', 'Confirm: ' )}}
			{{Form::password('confirm')}}
		</div>
		<div id="submit">
			{{Form::submit('Register')}}
		</div>
	{{Form::close()}}
	</div>
@stop