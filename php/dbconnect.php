<?php

# php and db connection
$domain = "http://127.0.0.1/HackExit0x0";
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "hackexit0x0_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>