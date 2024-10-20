<?php
$servername = "localhost";
$username = "root";  // Assuming you're using the default root user
$password = "";      // Enter your MySQL root password if applicable
$dbname = "job_portal";    // Database name is 'pro1'

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
