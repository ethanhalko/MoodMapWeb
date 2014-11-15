@extends('default')
@section('content')
	<div class="row col-lg-5 col-md-8 col-sm-8 col-xs-12 center-block" style="float: none" >
		<div class="form-panel">
		<?$message?>
		{{Form::open(['url'=>'add'])}}
			<div id="mood">
				Dear Mood Map, right now I am feeling {{form::input('text', 'mood', null, array('class'=>'text')) }}
			</div>
			<div id="submit">
				{{Form::submit('Submit Mood')}}
			</div>
		{{Form::close()}}
		</div>
		<div id="log">
			@foreach($moods as $mood)
				<p>You were feeling {{$mood->mood}} on {{date("D, F j, Y", strtotime($mood->entrydate))}}</p>
			@endforeach
		</div>
	</div>

@stop