<?php
$servername = getenv("WP_DB_HOST");
$username = getenv("WP_DB_USER");
$password = getenv("WP_DB_PASS");

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>