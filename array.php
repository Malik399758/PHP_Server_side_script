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
echo $multiarray[1][0];


?>