<?php
// Database configuration
$servername = "localhost"; // Replace with your database server hostname or IP address
$username = "dara1799_dummy"; // Replace with your database username
$password = "4215kurnia"; // Replace with your database password
$database = "dara1799_dummy"; // Replace with your database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally, you can set the character set (UTF-8 in this example)
$conn->set_charset("utf8");

// You can now use the "$conn" variable for database queries

// Example query
$query = "SELECT * FROM your_table";
$result = $conn->query($query);

// Close the database connection when you're done
$conn->close();
?>