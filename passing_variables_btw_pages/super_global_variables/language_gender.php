<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Get data of language and gender</h3>
    <form action="" method = 'post'>
        Which of the following language do you know ?<br>
        <input type="checkbox" name = 'language' value = 'c'> c
        <input type="checkbox" name = 'language' value = 'c++'> c++
        <input type="checkbox" name = 'language' value = 'dart'> dart
        <input type="checkbox" name = 'language' value = 'python'> python <br>

        Gender : <br>
        <input type="radio" name = 'gender' value = 'male'>male
        <input type="radio" name = 'gender' value = 'female'>female

        <input type='submit' value = 'submit'>
    </form>

    <?php
    echo "<h3> Show data ".'<br>';
    $language = $_POST['language'];
    echo 'You know this language'.'<br>',$language.'<br>';
    
    $gender = $_POST['gender'];
    echo 'Gender :'.'<br>',$gender;


?>
</body>
</html>