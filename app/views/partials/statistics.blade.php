@extends('default')
@section('head')
	<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Mood');
        data.addColumn('number', 'Occurrences');
        var moods = JSON.parse('{{$moodNames}}');
        var moodArray = [];
        for( var m in moods ){
        	moodArray.push([m, moods[m]]);
        }
        data.addRows(moodArray);

        // Set chart options
        var options = {
        				'forceIframe':false,
        				'height': '500',
        				'backgroundColor': { fill : 'transparent'},
        				'legend': {position: 'bottom'},
        				'titleTextStyle': { fontName: 'helvetica',
											fontSize: 25}
        			}

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
      </script>
@stop
@section('content')
	<div id="chart" class ="row col-lg-5 col-md-8 col-sm-8 col-xs-12 center-block" style="float: none" >
		<div id="chart_div"></div>
	</div>
@stop