

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<!-- Bootstrap -->
<link href="bootstrap-3.3.4-dist/css/bootstrap.min.css?ver=1" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style.css?ver=1">




<link href='fullcalendar-3.4.0/fullcalendar.min.css' rel='stylesheet' />
<link href='fullcalendar-3.4.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='fullcalendar-3.4.0/lib/moment.min.js'></script>
<script src='fullcalendar-3.4.0/lib/jquery.min.js'></script>
<script src='fullcalendar-3.4.0/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			defaultDate: '2017-05-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2017-05-01'
				},
				{
					title: 'Long Event',
					start: '2017-05-07',
					end: '2017-05-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-05-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-05-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2017-05-11',
					end: '2017-05-13'
				},
				{
					title: 'Meeting',
					start: '2017-05-12T10:30:00',
					end: '2017-05-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2017-05-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2017-05-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2017-05-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2017-05-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2017-05-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2017-05-28'
				}
			]

		});



	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>

  <div class="container">
    <header class="jumbotron text-center">
      <a href="index.php"><img src="logo.png" alt="LOGO" class="img-rounded" id="logo"></a>
      <h1 color=red>HOME</h1>
    </header>

    <nav>
      <ul class="nav nav-pills nav-tabs nav-stacked nav-justified">
        <li class="btn-Lavender"><a href="index.php?id=cal">달력</a></li>
        <li class="btn-LightBlue"><a href="index.php?id=gas">가스</a></li>
        <li class="btn-LemonChiffon"><a href="index.php?id=elec">전기</a></li>
      </ul>
    </nav>


    </div>
<?php
if(empty($_GET['id'])){
#  crd($s);
echo "<div id='calendar'></div>";


}
else {
if ($_GET['id']=='cal') {
  echo "<div id='calendar'></div>";
}
if ($_GET['id']=="gas") {
  echo "gas";
}
elseif ($_GET['id']=="elec") {
  echo "elec";
}
}
?>
  </div>

</body>
</html>
