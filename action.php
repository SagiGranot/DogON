<!DOCTYPE html>
<html lang="he">
	<head>
		<title>DogON By Sagi & Netta</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css" integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="includes/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="includes/js/form.js" async></script>
		
	</head>
	<body class="vaccines">
		<header class="vaccines">
		<a href="vaccine.php"><i class="fa fa-share" aria-hidden="true" id="backIcone"></i></a>	
			<div id="tools">
				<div id="searchAndSelect">
					<a href="#" id="iconLeft"><i class="fa fa-cog fa-4x fa-flip-horizontal" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="vaccIcon mid-icon">
				<i class="fa fa fa-user-plus fa-3x add" aria-hidden="true"></i>
			</div>
			<h1 id="title2">הוספת חיסון</h1>
		</header>
		<main>
<?php
	include('db.php');
	// $query1 = "INSERT INTO td_vaccines_206 (title,date) VALUES ('$ttl','$date')";
	// $result = mysqli_query($connection, $query1);
	// if (!$result)
	// {
	// 	die("DB query failed");
	// }

	if(isset($_POST['title']))
	{
		$ttle = mysqli_real_escape_string($connection, $_POST['title']);
		$date = mysqli_real_escape_string($connection, $_POST['date']);

		$query2 = "INSERT INTO td_vaccines_206 (title,date) VALUES ('$ttle','$date')";
		$result = mysqli_query($connection, $query2);
	}
?>
			<br><br><br>
			<h1>הצלחה</h1>
			<h2>הנתונים נשמרו</h2>
		</main>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js" integrity="sha384-54+cucJ4QbVb99v8dcttx/0JRx4FHMmhOWi4W+xrXpKcsKQodCBwAvu3xxkZAwsH" crossorigin="anonymous"></script>
	</body>
</html>