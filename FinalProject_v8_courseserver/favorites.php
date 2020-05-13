<!DOCTYPE html>
<html>
<body>

<?php
session_start();
require_once 'includes/auth.php';
include_once 'includes/header.php';
require_once 'includes/login.php';
require_once 'includes/functions.php';

# Make the connection to mysql using the credentials above
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

# Construct the query for the results we'd like
$query = "SELECT recipe_id, title, image_path, servings, cook_time, estimated_cost, diet_name FROM favorites NATURAL JOIN recipes NATURAL JOIN diets";

# Modify for user id and session 

# Run our query, making sure we received results back
$result = $conn->query($query);
if (!$result) die($conn->error);

# Determine the number of rows returned so we can loop through them
$rows = $result->num_rows;

# Get and print out each row returned from the database
while ($row = $result->fetch_assoc()) {
    echo "<div class='wrapper'>";
	echo "<div class='tile2'>";
	echo "<img width='100%' alt='recipe photo' src='";
    echo $row['image_path'];
    echo "'/> ";
    echo "<br>";
    echo "<h2>";
    echo $row['title'];
    echo "</h2>";
    echo "Recipe ID: ";
    echo $row['recipe_id'];
    echo "<br>";
    echo "Diet: ";
    echo $row['diet_name'];
    echo "<br>";
    echo "Servings: ";
    echo $row['servings'];
    echo "<br>";
    echo "Cook Time: ";
    echo $row['cook_time'];
    echo "<br>";  
    echo "Estimated Cost: $";  
    echo $row['estimated_cost'];
    echo "<br><br>";  
    echo "<a href=\"addschedule.php\"><button>Add to Schedule</button></a>";
    echo "<a href=\"removefavorites.php\"><button>Remove from Favorites</button></a>";
	echo "</div>";
    echo "</div>";
}

include_once 'includes/footer.php';

# close the database connection
$result->close();
$conn->close();
?>
</body>
</html>