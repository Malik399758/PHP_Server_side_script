<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Same File Form</title>
</head>
<body>

    <form action="" method="get">
        <input type="text" name="name" placeholder="Enter name">
        <input type="text" name="password" placeholder="Enter password">
        <input type="submit" value="Submit">
    </form>

    <br>

    <?php
    if (!empty($_GET['name']) && !empty($_GET['password'])) {
        $name = $_GET['name'];
        $password = $_GET['password'];

        echo 'Your name is: ' . $name . '<br>';
        echo 'Your password is: ' . $password;
    } else {
        echo 'Please fill out the form first.';
    }
    ?>

</body>
</html>
