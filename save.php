<?php
require_once ("config.php");

$first_name= $_POST["first_name"];
$last_name=$_POST["last_name"];
$user_name=$_POST["username"];
$password=sha1($_POST["Password"]);

$query =$conn->prepare ("INSERT INTO user (first_name, last_name , user_name , password) VALUES (?,?,?,?)");
$query->bind_param("ssss", $first_name, $last_name, $user_name, $password);
$query->execute();


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>  data is saved.For logine please <a href="akash.php"> click</a> here</h3>
</body>
</html>
