<?php
require "db.php";

// Create connection

$sql = "SELECT * FROM Articles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        foreach ($row as $key => $value) {
            echo "$key - $value ";
        }
        echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
