<?php
echo "<h1>Vora Jainam(216090307030)</h1>";
$string = "hello my name is vora jainam ";
echo "String is: " . $string . "<br>";
echo ctype_lower($string) ? "String is in lower case" : "String is not in lower case". "<br>";
echo "Reversed string is: " . strrev($string) . "<br>";
echo "String without white spaces: " . str_replace(' ', '', $string) . "<br>";
echo "Replacing jainam with Hello:". str_replace('jainam', 'Hello', $string) . "<br>";


?>