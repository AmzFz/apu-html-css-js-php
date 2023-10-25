<?php
session_start();
mysqli_report(MYSQLI_REPORT_STRICT);
define("ENVIROMENT", "DEV");

set_include_path(get_include_path().PATH_SEPARATOR."./classes");

if (ENVIROMENT == "DEV") {
    ini_set("display_errors", "Yes");
    error_reporting(E_ALL);
    define("SHOW_MYSQL_ERROR",true);
    define("SERVER", "localhost");
    define("USER", "app");
    define("PASSWORD", "zareef");
    define("DBNAME", "apu");
}


if (ENVIROMENT == "PROD") {
    ini_set("display_errors", "No");
    error_reporting(0);
    define("SHOW_MYSQL_ERROR",false);
    define("SERVER", "localhost");
    define("USER", "app");
    define("PASSWORD", "zareef");
    define("DBNAME", "apu");
}

///// Please do not change anything after this line, unless you know what you are doing !!! 
/*
require_once("classes/class.Utility.php");
require_once("classes/class.Page.php");
require_once("classes/class.User.php");
require_once("classes/class.Book.php");
require_once("classes/class.Order.php");

require_once("class.Utility.php");
require_once("class.Page.php");
require_once("class.User.php");
require_once("class.Book.php");
require_once("class.Order.php");
*/



spl_autoload_register("myAutoLoadFunction");

function myAutoLoadFunction($class_name) {
    require_once("class.".$class_name . '.php');
}

require_once("PEAR.php");
