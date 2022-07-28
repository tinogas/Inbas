<?php
$host     = "localhost"; // Database Host
$user     = "inbasmx_firespam"; // Database Username
$password = "FireSpam2020"; // Database's user Password
$database = "inbasmx_firespam"; // Database Name
$prefix   = "fire_"; // Database Prefix for the script tables

$mysqli = new mysqli($host, $user, $password, $database);

// Checking Connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$mysqli->set_charset("utf8mb4");

$site_url             = "http://inbas.mx";
$projectsecurity_path = "http://inbas.mx/firewall";
?>