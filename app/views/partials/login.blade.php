@extends('default')
@section('content')
	<div class="row form-panel center-block" >
		<h3 class="script">Login</h3>
		{{ Form::open(['url'=>'login']) }}
		<div id = "username" >
			{{form::input('text', 'username' ) }}
		</div>
		<div id = "password" >
			{{form::password('password') }}
		</div>
		@if( $errors->any() )
			<p class="error">{{$errors->first()}}</p>
		@endif
		<div id = "submit" >
			{{form::submit('Login') }}
		</div>
		<a href="/register" class="script">Register</a>
		{{ Form::close() }}

	</div>
@stop