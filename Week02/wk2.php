<!DOCTYPE html>
<html>
<head>
	<title>Week 2</title>
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

	</style>	
</head>
<body>
<h1>INFO-638-01 Web Development</h1>
<h2>Week 2</h2>
<div></div>
<?php

// variable is always $ - reserved character 
// \ for literal $ instead of variable 

$wind_speed = 30.4;
$wind_character = "Light";
$current_condition = "It is $wind_character and $wind_speed and your lunch was \$11.50";

echo $current_condition;

$is_nice_out = true; 

echo $is_nice_out;

/* $mycalc = (int) 2453/255;
print "<p>Result is: ".$mycalc."</p>"; */

/* function show_weather() {
	echo "It is 20 degrees";
} */

// $weather_structure = array(40.7,"Sunny");

// print_r($weather_structure);
// print_r($_SERVER);

echo "<p>In Class Exercises</p>";

$first_name = "Katelyn";
$last_name = "Mirabelli"; 
$middle_name = "Marie";
$my_age = (int) 32;
$full_name = $last_name . ', ' . $first_name . ' ' . $middle_name . ' (' . $my_age . ')';
$age_five_years = $my_age + 5;
$age_2034 = 2034-2020;
$age_months = $my_age * 12;

echo "<p>$last_name, $first_name $middle_name ($my_age)</p>";

echo "<li>$last_name, $first_name $middle_name ($my_age)</li>";

$name_parts = array("Katelyn", "Marie", "Mirabelli");

echo $first_name = (int) "<p>Katelyn</p>";

echo "<p>$full_name</p>";

echo "<p>$age_five_years</p>";

echo "<p>$age_2034</p>";

echo "<p>$age_months</p>";

echo "Before: " .++$my_age .'<br>';

echo "After: " .$my_age++;


?>
</body>
</html>





