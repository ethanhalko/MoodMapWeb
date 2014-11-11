@extends('default')
@section('content')
<div class="form-panel center-block">
	<a href="/logout">Logout</a>

	{{Form::open(['url'=>'add'])}}
		<div id="mood">
			Dear Mood Map, right now I am feeling <input type="text" name="mood" id="mood" value="Mood"/>
		</div>
		<div id="submit">
			{{Form::submit('Submit Mood')}}
		</div>
</div>
	<div id="log" class="center-block">
		@foreach($moods as $mood)
			<p>You were feeling {{$mood->mood}} on {{date("D, F j, Y", strtotime($mood->entrydate))}}</p>
		@endforeach
	</div>
	{{Form::close()}}
@stop