<?php

abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "<b>bhav bhav!</b>" ;
    }
}



echo "<h1> Vora Jainam (216090307030)</h1>";
$dog = new Dog();
$dog->makeSound(); 
 

?>
