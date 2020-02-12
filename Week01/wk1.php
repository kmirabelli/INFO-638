<!DOCTYPE html>
<html>
<head>
	<title>Week 1</title>
	<style>
		body {
		background-color: HoneyDew;
		color: DarkSlateGray;
		font-family: courier; 
		font-size: 14px;
		margin: 20px;
		padding: 0;
		}
		table {
			border-collapse: collapse;
		}
		th, td {
			border: 1px solid DarkSlateGray;
			padding: 10px;
		}
		a { 
		color: DarkSlateGray;
		}
	</style>
</head>
<body>
<h1>Page Title</h1>
<h2>Some content</h2>
<hr>
<p>A table:</p>
<table>
	<tr>
		<td>1</td>
		<td>2</td>
	</tr>
	<tr>
		<td>3</td>
		<td>4</td>
	</tr>

</table>
<p>A list:</p>
<ul>
<li>Item 1</li>
<li>Item 2</li>
<li>Item 3</li>
</ul>
<a href="#">Link</a>
<p>PHP tests:</p>
<?php
echo "<p>A String</p>";
echo "10 * 10 = ";
echo 10*10;	
?>
</body>
</html>

