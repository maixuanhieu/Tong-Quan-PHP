<?php
class Circle{
    public $name;
    public $radius;
    public $color;
    public function __construct($name,$radius,$color)
    {
        $this->name = $name;
        $this->radius = $radius;
        $this->color = $color;
    }
    public function color(){
        return $this->color;
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
   
    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
}
?>