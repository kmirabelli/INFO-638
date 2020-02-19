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
	img {
		display: inline-block;
	}
</style>

<h1>Challenge 1: ISBN Validation</h1>

<?php

//valid ISBNs
$isbn = 1472154665; 
// $isbn = "156881111X"; //I couldn't figure out how to work out the X with the str_split function I used for the numeric-only ISBNs. 

//invalid ISBN
// $isbn = 1472154664; 

echo "<p>Checking ISBN: $isbn for validity...</p>";

$temp = str_split($isbn);
// print_r($temp); // for testing only 
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

echo "<p>Flipping a coin 1 times...</p>";

function flipPenny() {
    (mt_rand(0,1));
	if (mt_rand(0,1) == 0) {
		echo "<img src=\"images/heads.jpg\" width=\"70px\">";
	}
	else { 
		echo "<img src=\"images/tails.jpg\" width=\"70px\">";
	}
	echo "<br/><br/>";
}

flipPenny();


// Note: I could not figure out how to get all results in one row when multiple results appear. I wanted to create an empty array to fill with results, but that wasn't working out in the original function. Also, modifying the css for imgs didn't work. 

echo "<p>Flipping a coin 3 times...</p>";

for ($x = 0; $x <= 2; $x++) {
    flipPenny();
}

echo "<p>Flipping a coin 5 times...</p>";

for ($x = 0; $x <= 4; $x++) {
    flipPenny();
}

echo "<p>Flipping a coin 7 times...</p>";

for ($x = 0; $x <= 6; $x++) {
    flipPenny();
}

echo "<p>Flipping a coin 9 times...</p>";

for ($x = 0; $x <= 8; $x++) {
    flipPenny();
}

?>

<p>B: Loop that tosses the coin repeatedly until you have flipped exactly two heads in a row. Stop the loop and print out to the page the number of tosses this took.</p><br/>

<?php

echo "<p>Beginning the coin flipping...</p>";
echo "<br/>";

 //I couldn't figure out how to work out the count of flips with the original function I used. Would it be the "do while" loop? Where the mt_rand sum of two flips must equal 0? 


echo "<p>Flipped two heads in a row, in X flips!</p>";
echo "<br/><br/>";

?>

</body>
</html>