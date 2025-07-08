<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Hello</h3>
    <?php
    session_start();

    ?>
    <h3>Welcome to the first page</h3>
    <a href="page2.php">go to the next page</a>

    <?php
    $_SESSION['name'] = 'Yaseen Malik';
?>
</body>
</html>