<?php
$servername = "localhost";
$username = "inbasmx_bowar";
$password = "Sanchez2020+";
$dbname = "inbasmx_martaisa_inbas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "ALTER TABLE proyectos ADD video TEXT AFTER imagen;";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>