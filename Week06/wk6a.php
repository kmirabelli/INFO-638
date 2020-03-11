<!DOCTYPE html>
<html>
<head>
	<title>Week 6</title>	
</head>
<style>
	body {
		font-family: arial;
	}
</style>
<body>
<h1>INFO-638-01 Web Development</h1>
<h2>Week 6</h2>

<?php

$mynum = 1/6;
$name = "Katelyn";
print $mynum;
printf("<p> %d </p>", $mynum); //integer d=digit
printf("<p> %.2f </p>", $mynum,); //2 digit floating point (does not modify actual value, only display value)
printf("<p> %5.2f </p>", $mynum,); //Adds padding

printf("<p> %s you owe: %d </p>", $name, $mynum); 
printf("<p> %s you owe: %0.2f </p>", $name, $mynum); 

//colors 
printf("<span style='color:#%X%X%X'>Hello</span>",
65, 127, 245);
echo "<br><br>";

// printf("<span style='color:#%X%X%X'>Hello</span>",
// $r-20, $g-20, $b-20);

$hexstring = sprintf("%X%X%X", 65, 127, 245);
echo "#".$hexstring;
echo "<br><br>";


// time (UNIX) Unix epoc is January 1, 1970

echo time();
echo "<br><br>";

echo date("l F jS, Y g:ia", time());
echo "<br><br>";

//check date
$month = 9;
$day = 31;
$year = 2018;
if (checkdate($month, $day, $year)) echo "Date is valid";
else echo "Date is invalid";
echo "<br><br>";

echo date("m Y L", time());
echo "<br><br>";

// leap year check
if (date("L", time())) {
	echo "Leap year!";
}


?>
</body>
</html>
