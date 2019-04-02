<?php
if(!isset($_POST["user_name"]) && !isset($_POST["password"])){
	header("location:akash.php");
}
 require_once 'config.php';
 $user_name = $_POST['user_name'];
 $password  = sha1($_POST['password']);
 $query = $conn->prepare("SELECT * FROM user where user_name=? and password =?");
 $query->bind_param("ss",$user_name,$password);
 $query->execute();
 $query->bind_result($first_name,$last_name,$user_name,$password);
 $query->fetch();
 if (!isset($user_name)&& !isset($password)){
 	header("location:akash.php?log=wrong");
 }
 else{
 	session_start();
 	$_SESSION["user_name"]=$user_name;
 	header("location:welcome.php");
 }
?>