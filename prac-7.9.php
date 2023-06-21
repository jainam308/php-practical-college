<?php
interface StudentInterface {
  public function setData($name, $age);
  public function showData();
}

class Student implements StudentInterface{
    private $name, $age;
     
    function setData($name, $age){
       $this->name=$name;
       $this->age=$age;
    }


    function showData(){
      echo "Hello $this->name your age is $this->age";
    }
}
echo "<h1> Vora Jainam (216090307030)</h1>";
$stu1 =new Student;
$stu1->setData("Jainam",17);
$stu1->showData();
?>