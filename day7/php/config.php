<?php 
mysqli_report(MYSQLI_REPORT_STRICT);


//ini_set("display_errors","No");
define("servername","localhost");
define("username","app");
define ("password","zareef");
define("dbname","apu");

$conn = new mysqli(servername, username, password, dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
require_once("common.php");
?>