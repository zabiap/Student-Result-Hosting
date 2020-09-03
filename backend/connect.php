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

$sql = "SELECT link from link WHERE id=1";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $link = "$row[link]";
    }

?>