<?php

// sorting array

$no = [4,2,1,5,3];

// sort
sort($no);

foreach($no as $num){
    echo $num.'<br>';
}

//rsort
rsort($no);

foreach($no as $num){
    echo $num.'<br>';
}


$number = array(8,5,4,6,3,2,1,7,9,10);
echo 'Ascending order :';

//sort
sort($number);


// for each loop
foreach($number as $num){
    echo $num.'<br>';
}

echo 'Descending Order:'.'<br>';
rsort($number);
foreach($number as $num){
    echo $num.'<br>';
}

?>
