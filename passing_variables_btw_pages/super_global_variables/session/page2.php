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
    ?>
    <h3>Welcome to the second page</h3>
    <a href="page3.php">go to the third page</a>

    <?php
   echo "The session value received here ",$_SESSION['name'];
    ?>
</body>
</html>