<?php
include 'database.php';

session_start();

error_reporting(0);
$password = $_POST['password'];
 
$number = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
 
if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
    header("Location: register.php");} 
				else {
    header("Location: login.php");}
?>
