@extends('default')
@section('content')
<div class="form-panel center-block">
	<a href="/"><-Back</a>
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
		@if( $errors->any() )
			<p class="error">{{$errors->first()}}</p>
		@endif
	{{Form::close()}}
	</div>
@stop