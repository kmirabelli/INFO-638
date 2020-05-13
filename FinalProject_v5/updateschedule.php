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
		$new_sched_date = sanitizeMySQL($conn, $_POST['sched_date']);
		$query = "UPDATE `schedule` SET `sched_date`=\"$new_sched_date\" WHERE `id`=$user AND `recipe_id`=$recipe";
		$result = $conn->query($query);
		if (!$result) {
			die ("Database access failed: " . $conn->error);
		} else {
		echo "<p>Successfully updated recipe schedule!</p>";
		}
	}
}
?>

<form action="" method="post">
	Enter User ID <input type="text" name="id">
	Enter Recipe ID<input type="text" name="recipe_id">
	Enter New Schedule Date (YYYY-MM-DD)<input type="text" name="sched_date">
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
