<?php
session_start(); // start the session

// set the session variable
$_SESSION['name'] = 'Jainam vora';
$_SESSION['email'] = 'jainam@gmail.com';

echo "Session variables are set.";
?>
