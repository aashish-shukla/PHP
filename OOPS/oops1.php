<?php
class Fruit{
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
$apple=new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");
echo "Name of fruit is ".$apple->get_name()."<br>";
echo "Color of fruit is ".$apple->get_color();
?>