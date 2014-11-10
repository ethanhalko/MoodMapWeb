
@extends('default')
@section('content')
	<h4>Login</h4>

	{{ Form::open(['url'=>'login']) }}

	<div id = "username" >
		{{form::label('username', 'Username:') }}
		{{form::input('text', 'username' ) }}
	</div>
	<div id = "password" >
		{{form::label('password', 'Password:') }}
		{{Form::password('password')}}

	</div>
	<div id = "submit" >
		{{form::submit('Login') }}
	</div>
	<a href="/register">Register</a>
	{{ Form::close() }}
@stop