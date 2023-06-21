<?php

class MyClass {
    private $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}
echo "<h1> Vora Jainam (216090307030)</h1>";
$obj = new MyClass();
$obj->setName("Jainam");
echo "The name of the object is: " . $obj->getName() . "<br>";

?>
