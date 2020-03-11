<!DOCTYPE html>
<html>
<head>
	<title>Code Homework 3</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
<style>
	body {
	color: #1D3557;		
	font-family: 'Karla', sans-serif;
	font-size: 14px;
	margin: 20px;
	padding: 0;
	}
	h1 {
	font-family: 'Karla', sans-serif;
	color: #191970;
	}
	h2 {
	font-family: 'Karla', sans-serif;	
	color: #191970;
	}
	p {
	font-family: 'Karla', sans-serif;
	color: #4169E1;
	font-size: 16px;
	}
	table {
	border-collapse: collapse;
	}
	td {
	border: gray 1px solid;
	padding: 10px;
	}
</style>

<h1>Challenge 1: Book Data</h1>

<?php

// Put the following book data into a multi-dimensional array, then use your array to print out the books on the web page in an attractive table (e.g. you may want to color alternating rows differently, etc.) Somewhere on your page, you should also include the total price, if the user were to purchase all the books listed.

$books = array (
	array ("PHP and MySQL Web Development","Web Design with HTML, CSS, JavaScript and jQuery","PHP Cookbook: Solutions & Examples for PHP Programmers","JavaScript and JQuery: Interactive Front-End Web Development","Modern PHP: New Features and Good Practices","Programming PHP"
		),
	array ("Luke Welling","Jon Duckett","David Sklar","Jon Duckett","Josh Lockhart","Kevin Tatroe"),
	array (144,135,14,251,7,26
		),
	array ("Paperback","Paperback","Paperback","Paperback","Paperback","Paperback"
		),
	array (31.63,41.23,40.88,22.09,28.49,28.96
	)
);

echo "<table>
		<tr>
		<td>Title</td>
		<td>Author</td>
		<td>Number of Pages</td>
		<td>Type</td>
		<td>Price</td>
		</tr>";
	

for ($a=0; $a<6; $a++) 
{
	echo "<tr>";
	for ($b=0; $b<5; $b++) 
	{
		echo "<td>";
		echo $books[$b][$a];
		echo "</td>";
	}
	echo "</tr>";

}

echo "</table>";

//Couldn't figure out how to get the array elements into a table. 
 

?>

<?php

// Repeat the coin exercise from HW2, but modify your program to 1) be a function that takes one argument – the number of heads in a row you'd like to flip and then 2) modify your code to use this argument to allow a variable number of heads in a row to be chosen. E.g. coinToss(8); will flip the coin until 8 heads in a row are obtained. You should print out the number of heads in a row you are seeking and the total number of flips it took.

echo "<h1>Challenge 2: Coin Toss, Continued</h1>";


//need to add loop logic to check if each flipPenny is a 1 continue until 3 1's in a row occurs.

function random ()
	{
	return mt_rand(0,1); //return 0 or 1
}

while 
function flipPenny($h) {

echo "<p>Beginning the coin flipping, looking for $h heads in a row...</p>";

	$numtosses = null;
	$headcount = null;

    
	if  == 0) {
		echo "<img src=\"images/heads.jpg\" width=\"70px\">";
		$headcount
	}
	else { 
		echo "<img src=\"images/tails.jpg\" width=\"70px\">";
	}

}

flipPenny();

//adding a number in the parentheses doesn't appear to increase the flip so I got a bit stuck. I reviewed your feedback from last week and understand it in theory, but struggled to implement.

echo "<p>Flipped $headsinrow heads in a row, in ".count($numtosses)." flips!</p>";


?>

</body>
</html>