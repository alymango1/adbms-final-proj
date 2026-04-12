<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_db";

$conn = mysqli_connect($servername, $username, $password, $dbname, 3307);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>