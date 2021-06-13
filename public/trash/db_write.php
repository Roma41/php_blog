<?php
require "db.php";

// Create connection
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$title = "Весна!";
$sql = "INSERT INTO Articles (title, body)
VALUES ('$title', 'Снего только растаял')";

if ($conn->query($sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
