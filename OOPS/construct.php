<?php
class Fruit{
    public $name;
    public $color;
    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    public function hello(){
        echo "Hello from Fruit class <br>";
    }
    function __destruct(){
        echo "the fruit is {$this->name} and color is {$this->color} <br>";
    }
}
$apple=new Fruit("Apple","Red");
$banana=new Fruit("Banana","Yellow");
$apple->hello();
$banana->hello();
?>