<!DOCTYPE html>
<html>
<head>
	<title>Week 4</title>	
</head>
<style>
	body {
		font-family: arial;
	}
</style>
<body>
<h1>INFO-638-01 Web Development</h1>
<h2>Week 4</h2>

<?php

$mylittlestring = "Hello World";

echo "<p>$mylittlestring</p>";

// Reverse String
echo "<p></p>";
echo strrev($mylittlestring);

// substr function substr(string, start, optional length);
echo "<p></p>";
echo substr($mylittlestring, 2, 3);
echo "<br/>";

// Class Exercise

$my_name = "katelyn marie mirabelli";

// full name together
echo "<br/>";
echo substr($my_name, 0, 23);
echo "<br/><br/>";

// full name separately
echo substr($my_name, 0, 7);
echo "<br/>";
echo substr($my_name, 8, 5);
echo "<br/>";
echo substr($my_name, 14, 9);
echo "<br/><br/>";

// first character of middle name capitalized
echo strtoupper(substr($my_name,8,5));
echo "<br/><br/>";

// shuffle the characters in your full name and print it out
echo str_shuffle($my_name);
echo "<br/><br/>";

//Functions 

/* function name_of_function(parameters) {
statements;
} */

// Welcome Header

/*function welcomeHeader() {
	echo "<h1>Welcome to my site!</h1>";
	echo "<h2>Thanks for visiting</h2>";
}

welcomeHeader();

echo "<br/><br/>"; */

// Welcome Header - with loop
/*function welcomeHeader() {
	echo "<h1>Welcome to my site!</h1>";
	echo "<h2>Thanks for visiting</h2>";
}

for ($i=1;$i<5;++$i) {
	welcomeHeader();
}

echo "<br/><br/>"; */


// Welcome Header - with loop & custom name

/*$fname = "Katelyn";

function welcomeHeader($fn, $yearjoin) // fn is a placeholder for local variable inside function
{ 
	echo "<h1>Welcome to my site, ".$fn."!</h1>";
	echo "<h2>Thanks for visiting since ".$yearjoin.".</h2>";
	return;
}

for ($i=1;$i<5;++$i) {
	// welcomeHeader("Bob");
	welcomeHeader($fname, 2018);

}

echo "<br/><br/>";*/

// Welcome Header - with loop & custom name

$fname = "Katelyn";

function welcomeHeader($fn, $yearjoin)
{ 
	$headhtml = "<h1>Welcome to my site, ".$fn."!</h1>";
	$headhtml .= "<h2>Thanks for visiting since ".$yearjoin.".</h2>";
	return $headhtml;
}

for ($i=1;$i<5;++$i) {
	$result = welcomeHeader($fname, 2018);
}

echo $result; 

echo "<br/><br/>"; 


// Tip Calculator

/* function calcTip($amt,$perc) {
	$tip = $amt * ($perc/100);
	$total = $amt + $tip;
	return round($tip,2);

}
echo calcTip(32.56,18);

echo "<br/><br/>"; */


// Tip Calculator with decrement loop 

function calcTip($amt,$perc) {
	$tip = $amt * ($perc/100);
	return round($tip,2);
}

echo calcTip(32.56,18);

for ($i=20;$i>0;--$i) {
	echo "<p>".calcTip(32.56,$i)."</p>";
}

echo "<br/><br/>"; 

?>

</body>
</html>
