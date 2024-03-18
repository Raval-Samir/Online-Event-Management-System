<?php
// Establish connection to your database
$servername = "localhost"; // Change this to your server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "event_management"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$event = $_POST['event'];

// SQL to insert data into database
$sql = "INSERT INTO registrations (fullname, email, event) VALUES ('$fullname', '$email', '$event')";

if ($conn->query($sql) === TRUE) {
  echo "Registration successful";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
