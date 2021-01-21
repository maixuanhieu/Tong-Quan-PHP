<?php
include_once ('Circle.php');
class Cylinder extends Circle {
 public $height;

 public function __construct($name, $radius,$color, $height)
 {
     parent::__construct($name, $radius,$color);
     $this->height = $height;
 }
 public function color()
 {
     return parent::color();
 }

 public function calculateArea()
 {
     return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
 }

 public function calculateVolume(){
     return parent::calculateArea() * $this->height;
 }
}
?>