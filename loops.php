
<?php

// for loop in php

for($i =0; $i<5; $i++){
    echo 'Php Programing'.'<br>';
}


for ($i = 1; $i<=10; $i++){
    echo $i.'<br>';
}


// while loop
$i=10;
while($i<=20){
    echo $i;
    $i++.'<br>';
}

// do while loop
$i = 30;
do{
    echo $i.'<br>';
    $i++;
}while($i<40);

// for each loop

$numbers = array(1,2,3,4,5);

foreach($numbers as $num){
    echo $num.'<br>';
}


?>
