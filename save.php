<?php
$first_name= $_POST["first_name"];
$last_name=$_POST["last_name"];
$user_name=$_POST["username"];
$password=$_POST["Password"];

$con=mysqli_connect("localhost","root","","designpage");
if (!isset($con)) {
	die("Database conection error");
	exit();
}
$qry="insert into user set first_name='$first_name', last_name='$last_name',password='$password',user_name='$user_name';";

mysqli_query($con,$qry);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>  data is saved.For logine please <a href="akash.html"> click</a> here</h3>
</body>
</html>
