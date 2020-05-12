<?php
include_once 'includes/header.php';
require_once 'includes/login.php';

if (isset($_POST['submit'])) { //check if the form has been submitted
	if ((empty($_POST['name'])) || (empty($_POST['age'])) || (empty($_POST['sex'])) || (empty($_POST['species'])) ) {
		echo "<p>Please fill out all of the form fields!</p>";
	} else {
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error) die($conn->connect_error);
		$title = sanitizeMySQL($conn, $_POST['title']);
		$fave_id = sanitizeMySQL($conn, $_POST['fave_id']);
		$id = sanitizeMySQL($conn, $_POST['id']);			
		$recipe_id = sanitizeMySQL($conn, $_POST['recipe_id']);
		$query = "INSERT INTO favorites VALUES(\"$fave_id\", \"$id\", \"$recipe_id\")";
		$result = $conn->query($query);
		if (!$result) {
			die ("Database access failed: " . $conn->error);
		} else {
			echo "<p>Successfully added new favorite recipe named $title! <a href=\"index.php\">Return to home page</a></p>";
		}
	}
}
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
<form method="post" action="addfavorites.php">
<!-- 	<fieldset>
		<input type="submit" name="submit">
	</fieldset> -->
<?php
include_once 'includes/footer.php';
?>
</form>
</body>
</html>
