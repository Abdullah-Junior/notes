<?php
$host = "localhost"; // usually localhost
$user = "your_db_username";
$pass = "your_db_password";
$db   = "profix";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
