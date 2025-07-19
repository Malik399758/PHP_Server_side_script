<?php


$name = $_POST['Name'] ?? '';
$password = $_POST['Password'] ?? '';
$tableName = 'test_db';

// reg

$regPassword = '/^[0-9]{4}$/';


include('test1_connection.php');

if(!preg_match($regPassword,$password)){
    header('location:test2.php?regmsg=password should be at least 4 character');
    exit();
}


$sql = "INSERT INTO $tableName (Name,Password) VALUES ('$name','$password')";

mysqli_query($con,$sql);

echo "Data added Successfully";

?>