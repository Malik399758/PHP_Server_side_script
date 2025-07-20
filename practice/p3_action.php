<?php

// get

$name = $_POST['Name']; // name
$password = $_POST['Password']; // password
$tableName = 'p2_table';


include('p1_connection.php');

$sql = "INSERT INTO $tableName (Name,Password) VALUES ('$name','$password')";

// column == values  1 column name  2 column password


mysqli_query($con,$sql);

echo 'Data added Successfully';

















?>