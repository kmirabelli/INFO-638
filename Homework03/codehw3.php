<!DOCTYPE html>
<html>
<head>
	<title>Code Homework 3</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
<style>
	body {
	background-color: #F0FFFF;
	color: #1D3557;		
	font-family: 'Karla', sans-serif;
	font-size: 14px;
	margin: 20px;
	padding: 0;
	}
	h1 {
	color: #191970;
	}
	h2 {
	color: #191970;
	}
	p {
	color: #4169E1;
	font-size: 16px;
	}
</style>

<h1>Challenge 1</h1>

<?php

echo "<h1>Book Data</h1>";

$books = array (
	'title' => array ("PHP and MySQL Web Development
","Web Design with HTML, CSS, JavaScript and jQuery","PHP Cookbook: Solutions & Examples for PHP Programmers","JavaScript and JQuery: Interactive Front-End Web Development","Modern PHP: New Features and Good Practices","Programming PHP"
	),
	'author' => array ("Luke Welling","Jon Duckett","David Sklar","Jon Duckett","Josh Lockhart","Kevin Tatroe"
	),
	'pages' => array (144,135,14,251,7,26
	),
	'type' => array ("Paperback","Paperback","Paperback","Paperback","Paperback","Paperback"
	),
	'price' => array (31.63,41.23,40.88,22.09,28.49,28.96
	)
);

echo "<pre>";
print_r ($books);
echo "<pre>";

?>

</body>
</html>