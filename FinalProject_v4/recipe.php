<?php
include_once 'includes/header.php';
require_once 'includes/login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if (isset($_GET['recipe_id'])) {
    $id = sanitizeMySQL($conn, $_GET['recipe_id']);
    $query = "SELECT recipe_id, image_path, title,diet_name, servings, cook_time, estimated_cost, instructions, ingredient_amt, ingredient_desc FROM recipes 
        NATURAL JOIN diets 
        NATURAL JOIN ingredients 
        NATURAL JOIN ing_to_recipe 
        WHERE recipe_id=".$id;
    $result = $conn->query($query);
    if (!$result) die ("Invalid recipe id.");
    $rows = $result->num_rows;
    $ing = $result->num_rows;
    if ($rows == 0) {
        echo "No recipe found with id of $id<br>";
    } else {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='wrapper'>";
            echo "<div class='tile1'>";
            echo "<img width='100%' alt='recipe photo' src='";
            echo $row['image_path'];
            echo "'/> ";
            echo "<br>";
            echo "<h2>";
            echo $row["title"];
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
            echo "<h2>";
            echo "Ingredients";
            echo "</h2>";
            while ($ing = $result->fetch_assoc()) {
            echo $ing['ingredient_amt']." ".$ing['ingredient_desc']."<br>";
            }
            echo "<br>";  
            echo "<h2>";
            echo "Instructions";
            echo "</h2>";
            echo $row['instructions'];
            echo "<br>";  
            echo "</div>";
            echo "</div>";       
        }
    }
    echo "<p class=\"return\"><a href=\"index.php\">Return to Home</a></p>";
} else {
    echo "No recipe id passed";
}

include_once 'includes/footer.php';

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