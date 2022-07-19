<?php
include_once("dbconnection.php");
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$query="insert into register(name,email,password) values ('$name','$email','$password')";
mysqli_query($mysql,$query);
header("Location:index.php");
?>