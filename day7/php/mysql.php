<?php 
require_once("config.php");

// Create connection
$conn = new mysqli(servername, username, password, dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/// We keep doing work. 
print "If you came so far, it means db connection was created successfully.";
?>