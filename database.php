<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "instyledecor";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("Connection failed : ".mysqli_connect_error());
}

?>