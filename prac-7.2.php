<?php

class MyClass {
    public $name;
    public $age;

    public function sayHello() {
        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.<br>";
    }

}
$obj = new MyClass();
$obj->name = "Jainam";
$obj->age = 17;
echo "<h1> Vora Jainam (216090307030)</h1>";
$obj->sayHello();
?>
