<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "freefire";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$uid = $_POST['uid'];
$screenshot = $_POST['screenshot'];

// Insert into table
$sql = "INSERT INTO registrations (name, email, mobile, uid, screenshot)
VALUES ('$name', '$email', '$mobile', '$uid', '$screenshot')";

if ($conn->query($sql) === TRUE) {
  echo "✅ Registration successful!";
} else {
  echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
