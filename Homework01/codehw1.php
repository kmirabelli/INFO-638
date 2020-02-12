<!DOCTYPE html>
<html>
<head>
	<title>Code Homework 1</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
<style>
	body {
	background-color: #F1FAEE;
	color: #1D3557;		
	font-family: 'Catamaran', sans-serif;
	font-size: 14px;
	margin: 20px;
	padding: 0;
	}
	h1 {
	color: #E63946;
	}
	h2 {
	color: #457B9D;
	}
	p {
	font-size: 16px;
	}
</style>

<h1>Challenge 1: Correct Change</h1>

<?php

$change = 159;

echo "<p>Your are due $change cents back in change total.";

echo "<p>Your change is: ".
($change/100)." dollar(s), ".
($change/25)." quarter(s), ".
($change/10)." dime(s), ".	
($change/5)." nickel(s), and ".
($change/1)." pennie(s)</p>";	
?>

<h1>Challenge 2: 99 Bottles of Beer</h1>

<?php

for ($count = 99; $count >= 1; --$count) {

	echo "<p>".$count." bottles of beer on the wall, ".$count." bottles of beer!<br/>".
	"Take one down, pass it around, ".($count-1)." bottles of beer on the wall.</p>";	
}
?>

</body>
</html>