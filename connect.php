<?php
// Creating connection test is our database name
$conn = new mysqli('localhost', 'root', '','testing');
// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>