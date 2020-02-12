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

// This section done with Elizabeth Phyle's help during code review 

$remain_dollar = $change % 100;
$change_dollar = intval($change/100);

$remain_quarter = $change % 25;
$change_quarter = intval($remain_dollar/25);

$remain_dime = $change % 10;
$change_dime = intval($remain_quarter/10);

$remain_nickel = $change % 5;
$change_nickel = intval($remain_dime/5);

$remain_penny = $change % 1;
$change_penny = intval($remain_nickel/1);

// End partner help section. 

echo "<p>Your are due $change cents back in change total.";

echo "<p>Your change is: ".
($change_dollar)." dollar(s), ".
($change_quarter)." quarter(s), ".
($change_dime)." dime(s), ".	
($change_nickel)." nickel(s), and ".
($change_penny)." pennie(s)</p>";	
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