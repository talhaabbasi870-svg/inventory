<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "inventory_db"; // apne database ka naam likho

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
