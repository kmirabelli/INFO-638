<!DOCTYPE html>
<html>
<head>
	<title>Week 5</title>	
</head>
<style>
	body {
		font-family: arial;
	}
</style>
<body>
<h1>INFO-638-01 Web Development</h1>
<h2>Week 5</h2>

<!-- Forms are submitted as a GET or a POST -->

<form action="" method="GET">
	Enter the ISBN:
	<input name="ISBN" type="text">
	<input name="submit" value="submit" type="submit">
</form>

<?php

print_r($_GET); //grabs data from form and adds to Super Array.

if(isset($_GET["ISBN"])) {
	echo "you entered ".$_GET["ISBN"];
}
?>



<?php

// $weatherrecord = array("sunny","brisk",34,22);

$weatherrecord = array(
	"Condition"=>"sunny",
	"Wind"=>"brisk",
	"Temperature"=>34,
	"Humidity"=>22);

// echo $weatherrecord[0];
// $weatherrecord["Wind"] = 24.4;
// echo $weatherrecord["Wind"]." mph";


// array_push($weatherrecord, .02);
// $weatherrecord[3] = "hello";

$weatherrecord["Pressure"] = 1024.4;


foreach ($weatherrecord as $k=>$v) {
	echo "<p>$k is $v</p>";
}

echo sizeof($weatherrecord);

for ($c=0;$c<sizeof($weatherrecord);$c++);


echo "<pre>";
print_r ($weatherrecord);
echo "<pre>";

// 

echo "<br/><br/>";

$studentdata = array(
233255435=>95.9,
234832893=>82.33,
238385555=>85.2,
272727237=>72.0,
334844855=>86.5
);

$sumofgrades = 0;

foreach ($studentdata as $id=>$grade) {
	echo "<p>Student ID $id received a $grade</p>";
	$sumofgrades += $grade;
	// echo $sumofgrades."<br/>"; //test sum
}

	echo "Average grade is ".round($sumofgrades/sizeof($studentdata),2)."<br/>";
	echo "Minimum grade is ".min($studentdata)."<br/>";
	echo "Maximum grade is ".max($studentdata);

?>
</body>
</html>
