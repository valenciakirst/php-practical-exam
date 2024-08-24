<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP PRACTICAL EXAM</h1>
<?php

include('functions.php');

echo "Current Date and Time:" . date('Y/m/d h:i:sa');

$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'World';

echo greetingMessage($name);

?>

<form method = "POST" action = "">
    <label for = "name">Name:</label>
    <input type = "text" name ="name">
    <input type = "submit" value = "Submit">
</form>


</body>
</html>