<?php


$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


 $conn = new mysqli('localhost','root','','e-school');
 if($conn->connect_error)
 {
 	die('Connection Failed : ' .$conn->connect_error);
 }
 else
 {
 	$stmt = $conn->prepare("insert into users(name,email,password) values(?,?,?)");

 	$stmt->bind_param("sss",$name,$email,$password);
 	$stmt->execute();
 	echo "Sign up successful";
 	$stmt->close();
 	$conn->close();
 }
      session_start();
      $_SESSION['username'] = $name;

 header('Location:home.php');
 exit;


?>