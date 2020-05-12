
<!DOCTYPE html>
<html>
<body>
<?php
include_once 'includes/header.php';
require_once 'includes/login.php';

 # Make the connection to mysql using the credentials from login file
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

# Construct the query for the results we'd like
$query = "SELECT recipe_id, title, image_path, servings, cook_time, estimated_cost, diet_name FROM recipes NATURAL JOIN diets";

# Run our query, making sure we received results back
$result = $conn->query($query);
if (!$result) die("Database access failed: " . $conn->error);

# Determine the number of rows returned so we can loop through them
$rows = $result->num_rows;

# Get and print out each row returned from the database
while ($row = $result->fetch_assoc()) {
    echo "<div class='wrapper'>";
    echo "<div class='tile1'>";
	echo "<img width='100%' alt='recipe photo' src='";
    echo $row['image_path'];
    echo "'/> ";
    echo "<br>";
    echo "<h2>";
    echo "<a href=\"recipe.php?recipe_id=".$row["recipe_id"]."\">".$row["title"]."</a>";
    echo "</h2>";
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
    echo "<a href=\"addfavorites.php?recipe_id=".$row["recipe_id"]."\"><button>"."Add to Favorites"."</button></a>";

	echo "</div>";
    echo "</div>";
}

include_once 'includes/footer.php';

?>
</body>
</html>