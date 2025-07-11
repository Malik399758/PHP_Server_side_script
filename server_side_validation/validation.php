<?php

echo 'Hello';

$name = $_POST['name'];

$name1 = '/^[a-z]{1,6}$/';

 if(!preg_match($name1,$name)){
    echo 'Name is invalid';
}else{
    echo 'Name is valid : ',$name;
}


?>