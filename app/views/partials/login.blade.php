@extends('default')
@section('content')
	<div class="row col-lg-5 col-md-8 col-sm-8 col-xs-12 form-panel center-block" style="float: none;">
		<h3 class="script">Login</h3>
		{{ Form::open(['url'=>'login']) }}
		<div id = "username" >
			{{form::input('text', 'username') }}
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
		<div id = "register">
			<a href="/register" class="script">Register</a>
		</div>
		{{ Form::close() }}
	</div>
@stop