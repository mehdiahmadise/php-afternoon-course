<?php

// interface A {
//   public function a();
//   public function f();
//   public function z();
// }

// abstract class B {
//   private $name;

//  abstract protected function b();

//  public function c($a, $b) {
//   return $a + $b;
//  }

// }


interface ShapeInterface {
  public function area();
}

class Circle implements ShapeInterface {

  private $radius;

  public function __construct($radius)
  {
    $this->radius = $radius;
  }

  public function area() {
    // pi() * pow(radius , 2)
    return pi() * pow($this->radius, 2);
  }
}

class Rectangle implements ShapeInterface {

  private $width;
  private $height;

  public function __construct($width, $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  public function area() {
    return $this->width * $this->height;
  }
}

$circle = new Circle(5);
$rectangle = new Rectangle(4,7);


function printArea(ShapeInterface $shape) {
  echo "Area " . $shape->area() . '<br>';
}


printArea($circle);
printArea($rectangle);
