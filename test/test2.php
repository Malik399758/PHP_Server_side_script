<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>


    <h3>Registration</h3>
    <form action="test1.php" method="post">
        <input type="text" name="Name" placeholder="Name"><br><br>
        <input type="text" name="Password" placeholder="Password"><br><br>
        <button type="submit">Submit</button>
        <span>
            <h1 style="color: red;">
    <?php
    error_reporting(0);
    echo htmlspecialchars($_GET['regmsg']);
    ?>
</h1>

        </span>
    </form>

</body>
</html>