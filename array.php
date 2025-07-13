<?php

// indexed array (Numeric array)

 $color = ['orange','red','blue'];


 echo "Indexed Array".'<br>';
 echo "Color Names".'<br>';
 echo $color[0].'<br>';
 echo $color[1].'<br>';
 echo $color[2].'<br><br>';


 echo "Days".'<br><br>';
 $days = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
 

  for($i = 0; $i < count($days); $i++){
    echo $days[$i].'<br>';
  }


// Associative array (key ,value)

$student = array(
    'name' => 'Yaseen Malik',
    'age' => 22,
    'course' => 'App Development',
);

echo 'Associative Array'.'<br>'.'<br>';

echo $student['name'].'<br>';
echo $student['age'].'<br>';
echo $student['course'].'<br><br>';


// multidimension array
$multiarray = [
    ['Yaseen',22,'app'],
    ['Malik','24','web'],
];
echo "Multi Dimension array :".'<br>';
echo $multiarray[0][2].'<br>';
echo $multiarray[1][0].'<br>';



$numbers = array(1,2,3,4,5,6,7,8,9,10);
$sum = 0;
$count = count($numbers);

for($i=0; $i < $count ; $i++){
  $sum = $sum + $numbers[$i];
}
echo 'The sum of array is :',$sum;


$even = array(1,2,3,4,6);
$evenCount = count($even);
$evenSum = 0;
for($i=0; $i<$evenCount; $i++){
  if($even[$i] % 2 == 0){
    $evenSum = $evenSum + $even[$i];
  }
}
echo 'The even number of sum is ',$evenSum;


?>