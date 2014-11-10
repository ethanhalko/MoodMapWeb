@extends('default')
@section('content')
	<a href="/logout">Logout</a>

	{{Form::open(['url'=>'add'])}}
		<div id="mood">
			{{Form::label('mood', 'Mood: ' )}}
			{{Form::text('mood')}}
		</div>
		<div id="submit">
			{{Form::submit('Submit Mood')}}
		</div>
		@foreach($moods as $mood)
			<p>You were {{$mood->mood}} at {{$mood->entrydate}}</p>
		@endforeach
	{{Form::close()}}
@stop