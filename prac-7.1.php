<?php
class MyClass {
    public function __construct() {
        echo "The constructor has been called.<br>";
    }

    public function __destruct() {
        echo "The destructor has been called.<br>";
    }

    public function display() {
        echo "code has been executed<br>";
    }
}
echo "<h1> Vora Jainam (216090307030)</h1>";
$obj = new MyClass();
$obj->display();
unset($obj);

?>
