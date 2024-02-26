<?php

session_start();

$host = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'hackadia';
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

?>