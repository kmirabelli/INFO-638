
<!DOCTYPE html>
<html>
<body>

<?php
include_once 'includes/header.php';
require_once 'includes/login.php';
 
# Make the connection to mysql using the credentials above
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

# Construct the query for the results we'd like
$query = "SELECT title, image, sched_date FROM schedule NATURAL JOIN recipes";


# Run our query, making sure we received results back
$result = $conn->query($query);
if (!$result) die($conn->error);

# Determine the number of rows returned so we can loop through them
$rows = $result->num_rows;

# Get and print out each row returned from the database
while ($row = $result->fetch_assoc()) {
	echo $row["image"]." ".$row["title"]." ".$row["sched_date"];
}

include_once 'includes/footer.php';

# close the database connection
$result->close();
$conn->close();
?>
</body>
</html>