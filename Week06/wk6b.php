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

//File Handling
$fh = fopen("testfile.txt", 'w') or die("Failed to
create file");
$texttow = "Test";

fwrite($fh, $texttow);
fclose($fh);

$fh = fopen("testfile.txt", 'a') or die("Failed open
file for appending");
$text = "\nHere's a new line.\n";
fwrite($fh, $text) or die("Could not append to file");
fclose($fh);

?>

</body>
</html>
