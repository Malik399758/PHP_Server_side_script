<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
     <?php
     session_start();
      echo $_SESSION = [];
     session_destroy();
     echo "<h3>You have been logged out.</h3>";
    
     if(isset($_SESSION['name'])){
        echo 'Name : '.$_SESSION['name'];
     }else{
        echo "Session name is no longer avaliable";
     }
    ?>

    
</body>
</html>