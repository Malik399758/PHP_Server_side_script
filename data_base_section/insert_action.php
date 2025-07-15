<?php

// Get form values
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Connect to the database
$con = mysqli_connect("localhost", "root", "", "first_database");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert query
$sql = "INSERT INTO first_table (Name, Email, Password) VALUES ('$name', '$email', '$password')";

// Run the query
if (mysqli_query($con, $sql)) {
    echo "Record added successfully";
} else {
    echo "Error: " . mysqli_error($con);
}

// Close the connection
mysqli_close($con);
?>
