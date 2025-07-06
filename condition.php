<?php

// $marks = 80;

// if($marks <= 100){
//     echo "Sudent pass";
// }else{
//     echo "Student fail";
// }

/*
$no1 = 20;
$no2 = 20;

if($no1 == $no2){
    echo 'Yes both are equal';
}else {
    echo 'Both are not equal';
}
    */

    // if and else statement

$no = 100;

if($no%2 ==0){
    echo 'Even number'.'<br>';
}else{
    echo 'Odd number'.'<br>';
}

// if and else if statement

$marks = 100;

if($marks <= 90){
    echo 'First'.'<br>';
}else if($marks >= 85){
    echo 'Second'.'<br>';
}else if($marks >= 80){
    echo 'Third'.'<br>';
}else {
    echo 'Pass';
}


// switch statement

$num = 34;
$res = $num%2;

switch($res){
    case 0:
        echo 'Even';
        break;
        case 1:
            echo 'Not even';
            break;
}



?>