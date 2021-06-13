<?php
define("DB_SERVER", "remotemysql.com");
define("DB_USER", "Qp9kPzLSUN");
define("DB_PASS", "DQ6R8gXgqH");
define("DB_NAME", "Qp9kPzLSUN");

function db_connect()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>
