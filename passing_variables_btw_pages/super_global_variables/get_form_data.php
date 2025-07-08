<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get data from form</title>
</head>
<body>
    <h3>Get data from form</h3>
    <form action="" method="get">
        Name: <input type="text" name="name"><br><br>
        Password: <input type="text" name="password"><br><br>

        Which of the following languages do you know?<br>
        <input type="checkbox" name="languages[]" value="C"> C
        <input type="checkbox" name="languages[]" value="C++"> C++
        <input type="checkbox" name="languages[]" value="dart"> Dart <br><br>

        Gender:<br>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other <br><br>

        Your Domicile:<br>
        <select name="dom">
            <option value="punjab">Punjab</option>
            <option value="kpk">KPK</option>
            <option value="sindh">Sindh</option>
            <option value="balochistan">Balochistan</option>
        </select><br><br>

        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        if (!empty($_GET['name']) && !empty($_GET['password'])) {
            $name = $_GET['name'];
            $password = $_GET['password'];
            $languages = isset($_GET['languages']) ? $_GET['languages'] : [];
            $gender = isset($_GET['gender']) ? $_GET['gender'] : 'Not selected';
            $domicile = $_GET['dom'];

            echo "<h3>Submitted Data:</h3>";
            echo "Your name is: $name <br>";
            echo "Password is: $password <br>";
            echo "Languages you know: " . implode(", ", $languages) . "<br>";
            echo "Gender: $gender <br>";
            echo "Domicile: $domicile <br>";
        } else {
            echo 'First you should fill the form';
        }
    }
    ?>
</body>
</html>
