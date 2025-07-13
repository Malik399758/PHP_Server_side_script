<?php


$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

if($firstName === '' && $lastName === '' && $email === '' && $password === ''){
    echo 'Please fill the form first';
}else if(isset($firstName) && isset($lastName) && isset($email) && isset($password)){
    echo 'Welcome'.'<br>';
    echo 'First name :',$firstName.'<br>';
    echo 'Last name :',$lastName.'<br>';
    echo 'Email :',$email.'<br>';
    echo 'Password :',$password.'<br>'; 
}else{
    echo 'something went wrong';
}


?>