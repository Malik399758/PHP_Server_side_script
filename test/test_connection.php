<?php

// connection

 $con = mysqli_connect('localhost','root','', 'test_db');

 if(!$con){
    die('Connection failed : '.mysqli_connect_error());
 }



?>