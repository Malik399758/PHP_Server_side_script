<?php

// first program of php

echo 'Hello World'.'<br>';
echo "Welcome to Php programming language".'<br>';

print('Hello world using print'.'<br>');

printf('Hello world using printf'.'<br>');


// user information

// how to declare variable in php using $
$id = 01;
$name = 'Yaseen Malik';
$password = 2211;


// print or display on local host 

echo 'User Id : ',$id.'<br>';
echo 'User Name : ',$name.'<br>';
echo 'Password :',$password.'<br>'; 



// increment and decrement

$a = 1;
$a++;

echo 'Increment value is :',$a.'<br>';

$b = 2;
$b--;

echo 'Decrement value is :',$b.'<br>';


// pre increment and post increment

// pre increment

/*$x = 5;
$y= ++$x;

echo "x = $x, y = $y";
*/

// post increment

$x = 5;
$y = $x++;

echo "x = $x, y = $y";







?>