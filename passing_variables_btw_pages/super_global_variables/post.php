<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

     <form action="" method="post">
        <input type="text" name="name" placeholder="Enter name">
        <input type="text" name="password" placeholder="Enter password">
        <input type="submit" value="Submit">
    </form>

    <?php

   if(!empty($_POST['name']) && !empty($_POST['password'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

    echo 'Name :',$name.'<br>';
    echo 'Password :',$password,'<br>';
   }else{
    echo 'Please fill out the form';
   }





?>
</body>
</html>