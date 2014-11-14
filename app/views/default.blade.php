<!doctype html>
	<head>
		<title>Mood Map</title>
		{{HTML::style('css/style.css');}}
	</head>
	<body>
		<div id="content">
			<div id="wrap" class="row center-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="header script">
					<h3 class="title"><a href="/">Mood Map</a></h3>
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/about">About</a></li>
						@if( Auth::check() )
						<li><a href="/statistics">Statistics</a></li>
						<li><a href="/logout">Logout</a></li>
						@endif
					</ul>
				</div>
				@yield('content')
			</div>
		</div>
	</body>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
</html>



