<?php
$databaseName = "namuna_college";
$conn = new mysqli("localhost","root","");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE $databaseName";
if ($conn->query($sql) === true) {
    echo "Database '$databaseName' created successfully.";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
?>
