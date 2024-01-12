<?php
$servername = "localhost:3360"; // Change the port number to the one you've configured

$username = "root";  // Replace with your MySQL username
$password = "";  // Replace with your MySQL password
$dbname = "blood_bank_db";    // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
