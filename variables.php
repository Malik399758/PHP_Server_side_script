<?php

// variables
$no = 10;
$name = 'Yaseen Malik';
$decimal = 20.5;
$isActive = true;


echo $no.'<br>';
echo $name.'<br>';
echo $decimal.'<br>';
echo $isActive.'<br>';


// get type
$no = 10;
echo gettype($no).'<br>';
settype($no ,'String').'<br>';
echo gettype($no).'<br>';


// types determination
$number = 10;
$text = 'Malik';
$active = true;


echo is_integer($number).'<br>';
echo is_bool($active).'<br>';
echo is_string($text);

?>