<?php
ob_start(); // Turns on o/p buffering.
session_start(); // Starts session.

date_default_timezone_set("Asia/Kolkata");

try {
    $con = new PDO("mysql:dbname=watchflix1;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {   
    exit("Connection falied:" . $e->getMessage());
}

?>