<?php
include_once 'includes/header.php';
require_once 'includes/login.php';

if (isset($_POST["submit"])) {
	if ((empty($_POST['id'])) || (empty($_POST['recipe_id']))) {
		echo "<p>Please fill out all of the form fields.</p>";
	} else {
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error) die($conn->connect_error);
		$user = sanitizeMySQL($conn, $_POST['id']);
		$recipe = sanitizeMySQL($conn, $_POST['recipe_id']);
		$query = "INSERT INTO `favorites` (`fave_id`, `id`, `recipe_id`) VALUES (NULL, $user, $recipe)";
		$result = $conn->query($query);
		if (!$result) {
			die ("Database access failed: " . $conn->error);
		} else {
		echo "<p>Successfully added new favorite recipe!</p>";
		}
	}
}
?>

<form action="" method="post">
	Enter User ID <input type="text" name="id">
	Enter Recipe ID<input type="text" name="recipe_id">
	<input type="submit" name="submit">
</form>

<?php
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

<?php
include_once 'includes/footer.php';
?>
</form>
</body>
</html>
