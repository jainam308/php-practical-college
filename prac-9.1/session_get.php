
<?php
session_start(); // start the session
echo "<h1>Vora Jainam(216090907030)</h1>";
// retrieve the session variable
$name = $_SESSION['name'];
$email = $_SESSION['email'];

echo "Name: " . $name . "<br>";
echo "Email: " . $email;
?>
