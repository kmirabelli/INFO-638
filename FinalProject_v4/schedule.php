
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
$query = "SELECT DATE_FORMAT(sched_date, \"%W, %M %e, %Y\") as 'sched_date', title, image_path, servings, cook_time, estimated_cost FROM schedule NATURAL JOIN recipes";


# Run our query, making sure we received results back
$result = $conn->query($query);
if (!$result) die($conn->error);

# Determine the number of rows returned so we can loop through them
$rows = $result->num_rows;

# Get and print out each row returned from the database
while ($row = $result->fetch_assoc()) {
    echo "<div class='wrapper'>";   
    echo "<div class='headline'>";
    echo "<h2 class='schedule'>";
    echo $row['sched_date'];
    echo "</h2>";
    echo "</div>";
    echo "<div class='tile3'>";
    echo "<div class='small_image'>";    
	echo "<img width='100%' alt='recipe photo' src='";
    echo $row['image_path'];
    echo "'/> ";
    echo "</div>";
    echo "<div class='inline_text'>";
    echo "<h2>";
    echo $row['title'];
    echo "</h2>";
    echo "Servings: ";
    echo $row['servings'];
    echo "<br>";
    echo "Cook Time: ";
    echo $row['cook_time'];
    echo "<br>";  
    echo "Estimated Cost: $";  
    echo $row['estimated_cost'];
    echo "<br><br>";  
    echo "<button>Edit Date</button>";
    echo "<button>Remove from Schedule</button>";
    echo "</div>";
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