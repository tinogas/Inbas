<?php
include "../config.php";

$table   = $prefix . 'settings';
$queryst = $mysqli->query("SELECT email FROM `$table` LIMIT 1");
$rowst   = mysqli_fetch_array($queryst);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project SECURITY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../assets/img/favicon.png">
    <meta charset="utf-8">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
  </head>
  <body>

    <div class="container">