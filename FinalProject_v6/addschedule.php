<?php
include_once 'includes/header.php';
require_once 'includes/login.php';

if (isset($_POST["submit"])) {
	if ((empty($_POST['id'])) || (empty($_POST['recipe_id'])) || (empty($_POST['sched_date']))) {
		echo "<p>Please fill out all of the form fields.</p>";
	} else {
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error) die($conn->connect_error);
		$user = sanitizeMySQL($conn, $_POST['id']);
		$recipe = sanitizeMySQL($conn, $_POST['recipe_id']);
		$sched_date = sanitizeMySQL($conn, $_POST['sched_date']);
		$query = "INSERT INTO `schedule` (`schedule_id`, `id`, `sched_date`, `recipe_id`) VALUES (NULL, $user, \"$sched_date\", $recipe)";
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
	Enter User ID <input type="text" name="id"><br>
	Enter Recipe ID<input type="text" name="recipe_id"><br>
	Enter Schedule Date (YYYY-MM-DD)<input type="text" name="sched_date"><br><br>
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
