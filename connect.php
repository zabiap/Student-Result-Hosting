<?php
$servername = "localhost";
$username = "zabiap";
$password = "zeeshan1";
$dbname = "student_result";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>