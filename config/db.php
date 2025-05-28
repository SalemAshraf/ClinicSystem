<?php

$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'clinic_system';

$conn = new mysqli($host, $username, $password, $database);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
