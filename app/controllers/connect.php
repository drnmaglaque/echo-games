<?php 

$host = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_chillis";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn) {
	die("Connection Failed: " . mysqli_error($conn));
}