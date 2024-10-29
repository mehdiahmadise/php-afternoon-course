<?php

abstract class Animal {
  protected $name;
  
  public function __construct($name)
  {
    $this->name = $name;    
  }

  abstract public function makeSound();
}

class Dog extends Animal {

   public function makeSound() {
      return 'Pars';
   }

   public function b() {
    return "Something";
   }
}

class Cat extends Animal {
  public function makeSound() {
      return 'Mew Mew';
   }

   public function c() {
    return "something2";
   }
}

$dog = new Dog("Rex");

echo $dog->makeSound();

echo "<br>";

$cat = new Cat('Black Cat');
echo $cat->makeSound();