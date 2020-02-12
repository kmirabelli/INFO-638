<!DOCTYPE html>
<html>
<head>
	<title>Week 3</title>	
</head>
<style>
	body {
		font-family: arial;
	}
	table {
			border-collapse: collapse;
		}
		td {
			border: 1px solid DarkSlateGray;
			padding: 10px;
		}
		.square {
			background-color : yellow;
		}
</style>
<body>
<h1>INFO-638-01 Web Development</h1>
<h2>Week 3</h2>

<table>
<!-- <tr>
<th colspan="12">My 12 Times Table</th>
</tr> -->

<?php

// $my_speed = 80;
// $bday = "0205";

// Loop Example

// do {
// 	echo "You are going $my_speed";
// 	--$my_speed;
// } while ($my_speed > 60);


// While Loop 

// $knownuser = true;
// while ($knownuser) {
// 	$knownuser = false;
// }

// For Loop

// for ($c = 1); $c < 11; ++$c) {
// 	echo "\$c is $c";
// }

// Conditional Example

// if ($bday == date("md")) {
// 	# get to go 5 mph faster
// 	$my_speed = $my_speed-5;  
// }

// #61 or less
// if ($my_speed < 61)  
// 	{
// 	echo "<p>no ticket</p>";
// 	}
// #81 or greater
// 	elseif ($my_speed > 81)
// 	{
// 	echo "<p>big ticket</p>";
// 	}
// #everyone else
// 	else
// 	{
// 	echo "<p>small ticket</p>";
// 	}
	

// echo date("<p>md</p>");

// Times Table Loop 

//for (counter; condition; increment counter)

//first attempt 

// $count = 1;
// while ($count <= 12)
// {
// echo "<tr><td>".$count * $count."</td></tr>";
// ++$count; 
// }

// answer

for ($outer = 1;$outer<=12;++$outer) {
	# Outer loop 
	echo "<tr>";
	for ($inner = 1;$inner<=12;++$inner) {
		if ($outer == $inner) {
		echo "<td class=\"square\">".($outer*$inner)."</td>";
		} else {		
		echo "<td>".($outer*$inner)."</td>";
		}
	}
	echo "</tr>";
}

?>
</body>
</html>
