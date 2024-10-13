<?php
class Fruit {
    public $name;
    public $color;

    function set_name($name) {
        $this->name = $name;  // Corrected assignment
    }

    function get_name() {
        return $this->name;
    }

    function set_color($color) {
        $this->color = $color;  // Corrected assignment
    }

    function get_color() {
        return $this->color;
    }
}
class Car{
    public $name;
    public $color;
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color=$color;
    }
    function get_color(){
        return $this->color;
    }
}

// Creating objects of the Fruit class
$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");

$banana = new Fruit();
$banana->set_name("Banana");
$banana->set_color("Yellow");

$audi=new Car();
$audi->set_name("Audi");
$audi->set_color("Black");

$bmw=new Car();
$bmw->set_name("BMW");
$bmw->set_color("White");

// Output the fruit details
echo "Name of fruit is " . $apple->get_name() . "<br>";
echo "Color of fruit is " . $apple->get_color() . "<br>";
echo "Name of fruit is " . $banana->get_name() . "<br>";
echo "Color of fruit is " . $banana->get_color() . "<br>";
echo "Name of car is " . $audi->get_name() . "<br>";
echo "Color of car is " . $audi->get_color() . "<br>";
echo "Name of car is " . $bmw->get_name() . "<br>";
echo "Color of car is " . $bmw->get_color();


?>
