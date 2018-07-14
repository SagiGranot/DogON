<!DOCTYPE html>
<html lang="he">
	<head>
		<title>DogON By Sagi & Netta</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="includes/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
	</head>
	<body class="vaccines">
		<header class="vaccines">	
			<section class="iconAndText">
				<i class="fa fa-medkit fa-5x" aria-hidden="true"></i>
				<h1 id="title">יומן חיסונים</h1>
			</section>
		</header>
		<main id="mainVac">
			<?php
				include('db.php');
				$query1 = "SELECT * FROM td_vaccines_206";
				$result = mysqli_query($connection, $query1);
				if (!$result)
				{
					die("DB query failed");
				}
				while($row = mysqli_fetch_assoc($result)) {
					echo '<div class="iconWrap">';
					echo '<section class="aIcon">';
					echo '<div class="vaccIcon">';
					echo '<i class="fa fa-thermometer-empty fa-5x" aria-hidden="true"></i>';
					echo '</div>';
					echo '<br><h2>' . $row["title"] . '</h2></section></div>';


				}
				
			?>
			<a href="newvac.html">
				<div class="iconWrap">
					<section class="aIcon">
						<div class="vaccIcon">
				  				<i class="fa fa-thermometer-empty fa-5x" aria-hidden="true"></i>
						</div>
						<br><h2>הוסף חיסון</h2>
					</section>
				</div>
			</a>
			<div id="icons">
				<a href="index.html" class="icon" id="icon1"><i class="fa fa-reply fa-4x fa-flip-horizontal" aria-hidden="true"></i></a>
			</div>

		</main>
	</body>
</html>