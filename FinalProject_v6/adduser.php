<?php 
require_once 'includes/login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
  
$salt1 = "qm&h*";  
$salt2 = "pg!@";  
$fname = 'Katelyn';  
$lname = 'Mirabelli';  
$username = 'kmirabelli';  
$password = 'mysecret';  
$token = hash('ripemd128', "$salt1$password$salt2");

$query  = "INSERT INTO users VALUES(NULL, '$fname', '$lname', '$username', '$token', 2)";    
$result = $conn->query($query);    
if (!$result) die($conn->error);  
?>
