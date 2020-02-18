<!DOCTYPE html>
<html>
<head>
	<title>Code Homework 2</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
<style>
	body {
	background-color: white;
	color: #778899;		
	font-family: 'Roboto Mono', monospace;
	font-size: 14px;
	margin-left: 200px;
	margin-right: 200px;
	max-width: 800px;
	padding: 0;
	}
	h1 {
	color: #FFA07A;
	}
	h2 {
	color: #FFA07A;
	}
	p {
	font-size: 16px;
	}
	a {
	color: #FFA07A;		
	}
</style>

<h1>Challenge 1: ISBN Validation</h1>

<?php

//valid ISBN
$isbn = 1472154665; 

//invalid ISBN
// $isbn = 1472154664; 

echo "<p>Checking ISBN: $isbn for validity...</p>";

$temp = str_split($isbn);
// print_r($temp);
echo "<br/>";

$check = ((10*$temp[0])+(9*$temp[1])+(8*$temp[2])+(7*$temp[3])+(6*$temp[4])+(5*$temp[5])+(4*$temp[6])+(3*$temp[7])+(2*$temp[8])+(1*$temp[9]));

// echo $check;

if ($check % 11 > 0)
{
	echo "<p>This is NOT a valid ISBN!</p>";
}
else {
	echo "<p>This is a valid ISBN!</p>";
	echo "<p>Check it out <a href=\"https://isbnsearch.org/isbn/$isbn\" target=\"_blank\">here</a>.</p>";
}

echo "<br/><br/>";

?>


<h1>Challenge 2: Coin Toss</h1>

<p>A: Simulation of a series of random coin tosses for 1, 3, 5, 7, and 9 flips.</p><br/>


<?php

// The mt_rand() function returns a random value; optionally you may enter a mix and max number to be returned.


// begin test section

$heads = 0;
$tails = 1;

echo "<p>Flipping a coin 1 times...</p>";
if (mt_rand(0,1) == 0)
{
	echo "<img src=\"images/heads.jpg\" width=\"70px\">";
}
else {
	echo "<img src=\"images/tails.jpg\" width=\"70px\">";
}
echo "<br/><br/>";

echo "<p>Flipping a coin 3 times...</p>";
echo "<img src=\"images/heads.jpg\" width=\"70px\">";
echo "<img src=\"images/tails.jpg\" width=\"70px\">";
echo "<br/><br/>";

echo "<p>Flipping a coin 5 times...</p>";
echo "<img src=\"images/heads.jpg\" width=\"70px\">";
echo "<img src=\"images/tails.jpg\" width=\"70px\">";
echo "<br/><br/>";

echo "<p>Flipping a coin 7 times...</p>";
echo "<img src=\"images/heads.jpg\" width=\"70px\">";
echo "<img src=\"images/tails.jpg\" width=\"70px\">";
echo "<br/><br/>";

echo "<p>Flipping a coin 9 times...</p>";
echo "<img src=\"images/heads.jpg\" width=\"70px\">";
echo "<img src=\"images/tails.jpg\" width=\"70px\">";
echo "<br/><br/>";
echo "<br/><br/>";

?>

<p>B: Loop that tosses the coin repeatedly until you have flipped exactly two heads in a row. Stop the loop and print out to the page the number of tosses this took.</p><br/>

<?php

echo "<p>Beginning the coin flipping...</p>";
echo "<br/>";

echo "<img src=\"images/heads.jpg\" width=\"70px\">";
echo "<img src=\"images/tails.jpg\" width=\"70px\">";
echo "<br/><br/>";

echo "<p>Flipped two heads in a row, in X flips!</p>";
echo "<br/><br/>";

?>

</body>
</html>