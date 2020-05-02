
<!DOCTYPE html>
<html>
<body>

<?php
include_once 'includes/header.php';

# Create variables to store our db login information
$hn = 'localhost';
$db = 'kmirabel';
$un = 'kmirabel';
$pw = 'test';
 
# Make the connection to mysql using the credentials above
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

# Construct the query for the results we'd like
$query = "SELECT image_path, title FROM recipes";

# Run our query, making sure we received results back
$result = $conn->query($query);
if (!$result) die($conn->error);

# Determine the number of rows returned so we can loop through them
$rows = $result->num_rows;

# Get and print out each row returned from the database
while ($row = $result->fetch_assoc()) {
	echo $row["image_path"]." ".$row["title"]."<br>";
}

include_once 'includes/footer.php';

# close the database connection
$result->close();
$conn->close();
?>
</body>
</html>