<?php
$server = "localhost";
$username = "root";
$password = "chris";
$database = "users";


$conn = new mysqli($server, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
