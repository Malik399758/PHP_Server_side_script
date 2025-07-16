<?php

$name = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';


include('test_connection.php');
$tableName = 'test_db';

$sql = "INSERT INTO $tableName (Name,Password) VALUES ('$name','$password')";

mysqli_query($con,$sql);

echo "Data inserted successfully";

?>