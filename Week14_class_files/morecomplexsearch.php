<!DOCTYPE html>
<html>
	<head>
	<title>Search</title>
	</head>
<body>
<?php
# This form uses the Publications db on the LMS at:
#    https://lms.pratt.edu/mod/resource/view.php?id=459716
# This form will search for a term across  
# a book title, author, or customer name 
# which requires joining classics to customers
# then checking for the search term in each of 
# those 3 fields 
# check for submit in GET to tell if form was submitted by user
# and make sure they put in a search term 
if (isset($_GET["submit"]) && isset($_GET["term"]) && !empty($_GET["term"]) ) {
	# connect to db
	# NOTE - include your db include here for your own creds!
	$conn = new mysqli("localhost", "root", "", "publications");
	if ($conn->connect_error) die($conn->connect_error);
	# sanitize data from form search box 
	$term = sanitizeMySQL($conn,$_GET["term"]);

	# construct query
	# using a left join here to get all classics, even unpurchased ones
	$query = 'SELECT * FROM `classics` LEFT JOIN `customers` ON classics.isbn=customers.isbn WHERE (author LIKE \'%'.$term.'%\' OR title LIKE \'%'.$term.'%\' OR name LIKE \'%'.$term.'%\')';
	# if checkbox was "on" then append to our query 
	if (isset($_GET["fo"]) && !empty($_GET["fo"])) {
		$fo = sanitizeMySQL($conn,$_GET["fo"]);
		if ($fo=="on") {
			$query .= " AND category=\"Fiction\"";
		}
	}
	# send to db
	$result = $conn->query($query);
	if (!$result) die($conn->error);
	# output to user 
	print("<h1>Results</h1>");
	while ($row=$result->fetch_assoc()) {
		echo "<p>".implode(", ", $row)."</p>";
	}
	print("<h1>Search again</h1>");
}

# sanitizing functions 

function sanitizeString($var)
{
	$var = stripslashes($var);
	$var = strip_tags($var);
	$var = htmlentities($var);
	return $var;
}
function sanitizeMySQL($connection, $var)
{
	$var = sanitizeString($var);
	$var = $connection->real_escape_string($var);
	return $var;
}

?>

<form action="morecomplexsearch.php" method="GET">
	Search classics and customers: <input type="text" name="term">
	Fiction only: <input type="checkbox" name="fo">
	<input type="submit" name="submit" value="Search!">
</form>
</body>
</html>