<!DOCTYPE html>
<html lang="he">
<head>
	<title>DogON Clinic By Sagi & Netta</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link rel="stylesheet" href="includes/style.css">
	<script src="includes/js/script_cli2.js" async></script>
</head>
<body>
	<div class="wrapper">
		<header>
			<div id="tools"><p>English<br>מחובר: <u>ד״ר סטפן וייס</u></p></div>
			<div id="logoBar">
				<a href="index.html" id="theLogo"></a>
				<span id="theSearch">
					<label><input name="search" placeholder="חיפוש"></label>
				</span>
				<nav id="logoNav">
					<ul>
						<li><a href="#">+ ביקור חדש</a></li>
						<li><a href="new_cust.html">+ לקוח חדש</a></li>
						<li><a href="#">+ תזכורת</a></li>
						<li id="logOut"><a href="#">התנתק</a></li>
					</ul>
				</nav>
			</div>
			<div class="clear"></div><br>
			<nav id="mainNav">
				<ul>
					<li><a href="index.html">דף הבית</a></li><li class="borderNav">|</li>
					<li><a href="#">לקוחות</a></li><li class="borderNav">|</li>
					<li><a href="#">בעלי-חיים</a></li><li class="borderNav">|</li>
					<li><a href="#">ביקורים</a></li><li class="borderNav">|</li>
					<li><a href="#">יומן</a></li><li class="borderNav">|</li>
					<li><a href="medicine.html">חיסונים ותרופות</a></li><li class="borderNav">|</li>
					<li><a href="#">אבחון התנהגות</a></li><li class="borderNav">|</li>
					<li><a href="#">לקוחות</a></li><li class="borderNav">|</li>
					<li><a href="#">תזכורות</a></li><li class="borderNav">|</li>
					<li><a href="#">כלים</a></li><li class="borderNav">|</li>
					<li><a href="#">הגדרות</a></li>
				</ul>
			</nav>
		</header>
		<main id="vacpage">
			<span id="breadcrumbs">
				<a href="index.html">דף הבית</a>&nbsp;>&nbsp;<a href="medicine.html">חיסונים ותרופות</a>&nbsp;>&nbsp;<a href="client.php">דף לקוח</a>
			</span>
				<div id="vaccine2" class="mainBox">
					<section class="darkArea">
						<i class="fa fa-user-md fa-lg icon" aria-hidden="true"></i>
						<h2>חיסונים</h2>
					</section>
					<div class="clear"></div><br><br>
					<table>
					  <thead>
					    <tr>
					      <td></td>
					      <td>
					        <span><b>שם החיסון</b></span>
					      </td>
					      <td>
					        <span><b>תאריך:</b></span>
					      </td>
					    </tr>
					  </thead>
					  <tbody>
						<?php
							include('db.php');
							$query1 = "SELECT * FROM td_vaccines_206";
							$result = mysqli_query($connection, $query1);
							if (!$result)
							{
								die("DB query failed");
							}
							while($row = mysqli_fetch_assoc($result)) {
								echo '<tr class="row-height">';
								echo '<td class="hour" rowspan="1"><span><i class="fa fa-list" aria-hidden="true"></i>&nbsp;<i class="fa fa-plus-square" id="add1" aria-hidden="true"></i>&nbsp;<i class="fa fa-minus-circle" aria-hidden="true"></i></span></td>';
								echo '<td><span>'. $row["title"] .'</span></td>';
								echo '<td><span>'. $row["date"] .'</span></td>';
								echo '</tr>';
							}
							
						?>

					  </tbody>
					</table>
				</div>
				<div id="add-form" class="mainBox">
					<section class="darkArea">
						<i class="fa fa-plus-circle fa-lg icon" aria-hidden="true"></i>
						<h2>הוספת חיסון חדש</h2>
					</section>
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
					<form action="#" method="post"><br><br>
						<table>
							<tr>
								<td>שם חיסון:</td><td><input class="form-vac" name="title" title="Vaccine name"></td>
							</tr>
							<tr>
								<td>תאריך:</td><td><input class="form-vac" type="date" name="date"></td>
							</tr>
							<tr>
								<td>שעה:</td><td><input class="form-vac" type="time" name="time"></td>
							</tr>
							<tr>
								<td>הערות:</td><td><textarea class="form-vac textForm" name="text" rows="5" cols="40"></textarea></td>
							</tr>
							<tr>
								<td></td><td><input type="submit" id="button" class="form-vac" name="send" value="שלח"></td>
							</tr>
						</table>
					</form>
				</div>
				<div id="sideMenu">
					<nav id="sideNav">
					<ul>
						<li><a href="index.html">דף הבית</a></li>
						<li><a href="#">לקוחות</a></li>
						<li><a href="#">בעלי-חיים</a></li>
						<li><a href="#">ביקורים</a></li>
						<li><a href="#">יומן</a></li>
						<li><a href="medicine.html">חיסונים ותרופות</a></li>
						<li><a href="#">אבחון התנהגות</a></li>
						<li><a href="#">לקוחות</a></li>
						<li><a href="#">תזכורות</a></li>
						<li><a href="#">כלים</a></li>
						<li><a href="#">הגדרות</a></li>
					</ul>
				</nav>
				</div>
				<div class="container" id="hamburger2" onclick="myFunction(this)">
				  <div class="bar1"></div>
				  <div class="bar2"></div>
				  <div class="bar3"></div>
				</div>
				<div class="clear"></div>
		</main>
		<footer><br><b>DogON - Clinic</b><br>&copy;כל הזכויות שמורות</footer>
	</div>
</body>
</html>