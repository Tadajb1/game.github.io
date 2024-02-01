<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];
$phone_number = ""; // Add code to get phone number from the login page if needed

// Insert the login information into the database
$sql = "INSERT INTO users (email, password, phone_number, login_date) VALUES ('$email', '$password', '$phone_number', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Login information saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
