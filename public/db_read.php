<?php
require("db.php");

// Create connection
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title FROM Articles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      foreach ($row as $key => $value) {
          echo "$key - $value ";
      }
    echo  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>