<?php

class Person {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
}

echo "<h1> Vora Jainam (216090307030)</h1>";
$person1 = new Person("Jainam");

// Clone the object and store it in a new variable
$person2 = clone $person1;

echo "Original object:" ;
var_dump($person1);


echo "Cloned object:" ;
var_dump($person2);

?>
