<?php

// connection

$con = mysqli_connect('localhost','root','', 'test_db');

if(!$con){
    echo 'Connection failed'. mysqli_error();
}

?>