<?php
$servername="localhost";
$username="root";
$password="";
$dbname="designpage";

$conn = mysqli_connect("localhost","root","","designpage");
if (!isset($conn)) {
	die("Database conection error");
	exit();
}
?>