<?php
class Master{
   function show(){
     echo "I am Master class<br>";
   }
   
}

class Student extends Master{
    function show(){
     echo "I am  Student class with same method of master class<br>";
    }
}
echo "<h1> Vora Jainam (216090307030)</h1>";
$obj = new Master;
$obj->show();

$obj = new Student;
$obj->show();

?>