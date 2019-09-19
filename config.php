<?php
$servername = "localhost";
$user = "root";
$password = "";
$db = "teambravologin";

// Creating connection
$conn = mysqli_connect($servername, $user, $password, $db);

// Checking connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>