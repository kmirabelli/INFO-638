
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
$query = "SELECT title, image_path, servings, cook_time, estimated_cost FROM recipes";

# Run our query, making sure we received results back
$result = $conn->query($query);
if (!$result) die($conn->error);

# Determine the number of rows returned so we can loop through them
$rows = $result->num_rows;

# Get and print out each row returned from the database
while ($row = $result->fetch_assoc()) {
	echo "<div class='tile'>";
	echo "<img width='300px' alt='recipe photo' src='";
    echo $row['image_path'];
    echo "'/> ";
    echo "<br>";
    echo "<b>";
    echo $row['title'];
    echo "</b>";
    echo "<br>";
    echo "Servings: ";
    echo $row['servings'];
    echo "<br>";
    echo "Cook Time: ";
    echo $row['cook_time'];
    echo "<br>";  
    echo "Estimated Cost: $";  
    echo $row['estimated_cost'];
	echo "</div>";
}

include_once 'includes/footer.php';

# close the database connection
$result->close();
$conn->close();
?>
</body>
</html>