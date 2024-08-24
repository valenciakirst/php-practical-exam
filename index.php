<?php

include('functions.php');

echo "Current Date and Time:" . date('Y/m/d h:i:sa');

$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'World';

echo greetingMessage($name);

?>