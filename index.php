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

