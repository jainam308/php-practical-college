<?php
echo "<h1>Vora Jainam(216090307030)</h1>";
date_default_timezone_set('Asia/Kolkata');
$now = time();

// Date formats
$date_format1 = 'd/m/Y'; // Example: 12/05/2023
$date_format2 = 'jS F Y'; // Example: 12th May 2023
$date_format3 = 'Y-m-d'; // Example: 2023-05-12

// Time formats
$time_format1 = 'H:i:s'; // Example: 15:30:00
$time_format2 = 'g:i A'; // Example: 3:30 PM
$time_format3 = 'H:i'; // Example: 15:30


// Display the formatted date and time
echo 'Current date and time:<br>';
echo 'Date format 1: ' . date($date_format1, $now) . '<br>';
echo 'Date format 2: ' . date($date_format2, $now) . '<br>';
echo 'Date format 3: ' . date($date_format3, $now) . '<br>';
echo 'Time format 1: ' . date($time_format1, $now) . '<br>';
echo 'Time format 2: ' . date($time_format2, $now) . '<br>';
echo 'Time format 3: ' . date($time_format3, $now) . '<br>';
?>