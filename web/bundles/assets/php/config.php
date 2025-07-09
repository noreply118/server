<?php
$baseurl = "https://www.ratetrade.ca/";
$hostname = "localhost";
$username = "ratetrad_webs";
$password = "ratetrade@123";
$dbname = "ratetrad_webs";
define('DB_CHARSET', 'utf8mb4');

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set charset
if (!mysqli_set_charset($conn, DB_CHARSET)) {
    die("Error loading character set " . DB_CHARSET . ": " . mysqli_error($conn));
}

// echo "Connected successfully!";
?>
