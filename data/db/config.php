<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "manhtientest"; // Replace with your actual database name

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection fal" . $conn->connect_error);
}
echo "Database connection successful\n";?>