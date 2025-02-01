<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dzlapstore";

// Create connection
$conn = new MySQLi($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Connection is successful
// Additional code can be added here

?>
