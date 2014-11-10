@extends('default')
@section('content')
	<div class="row form-panel center-block" >
		<h4>Login</h4>
		{{ Form::open(['url'=>'login']) }}
		<div id = "username" >
			{{form::input('text', 'username' ) }}
		</div>
		<div id = "password" >
			{{form::password('password') }}
		</div>
		<div id = "submit" >
			{{form::submit('Login') }}
		</div>
		<a href="/register">Register</a>
		{{ Form::close() }}
	</div>
@stop