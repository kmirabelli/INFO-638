<!DOCTYPE html>
<html>
<head>
<title>Meal Manager</title>
<link rel="stylesheet" type="text/css" href="includes/style.css" />
</head>
<div id="body">
<header>
<!-- 	<a href="index.php"><img src="images/logo.png" width="70" height="70"></a>
 -->	<h1>Meal Manager</h1>
	<nav>
		<a class="nav" href="index.php">RECIPES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a class="nav" href="favorites.php">FAVORITES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a class="nav" href="schedule.php">SCHEDULE</a>
	</nav>
	<?php
	if (isset($_SESSION['fname']) && isset($_SESSION['lname']) ) {
		echo "<h3>Welcome, ".$_SESSION['fname']." ".$_SESSION['lname'];
		echo " | <small><a href=\"sign_out.php\">Logout</a></small></h3>";
	}
	?>
</header>
</div id="body">
