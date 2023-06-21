<?php
echo "<h1>Result:</h1>";
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$operator=$_POST['operator'];
switch($operator){
    case "add":
        echo "The addition of $num1 and $num2 is: ".($num1 + $num2);
        break;
    case "sub":
        echo "The subtraction of $num2 from $num1 is: ".($num1 - $num2);
        break;
    case "mul":
        echo "The multiplication of $num1 and $num2 is: ".($num1 * $num2);
        break;
    case "div":
            echo "The division of $num1 by $num2 is: ".($num1 / $num2);
        break;
        case "mod":
            echo "The division of $num1 by $num2 is: ".($num1 % $num2);
        break;
    default:
        echo "Invalid operation selected!";
}
?>