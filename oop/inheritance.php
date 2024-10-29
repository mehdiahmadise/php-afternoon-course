<?php

// class Animal {
//   public $name;
//   public $age;

//   public function __construct($name, $age)
//   {
//     $this->name = $name;
//     $this->age = $age;    
//   }

//   public function sound() {
//     return "This animal makes a sound";
//   }
// }

// class Dog extends Animal {
//   public function sound() {
//     return "Woof! woof!";
//   }
// }

// class Bird extends Animal {
  
//   public function flying() {
//     return 'fly';
//   }
// }

// $dog = new Dog('Rex', 2);

// echo $dog->name . " " . $dog->age;


class Person {
  protected $name;
  protected $isPhone;

  public function __construct($name, $isPhone)
  {
    $this->name = $name;
    $this->isPhone = $isPhone;
  }

  public function getInfo() {
    return "Name: $this->name, Phone Number: $this->isPhone";
  }
}

class Student extends Person {
  private $major;

  public function __construct($name, $isPhone, $major)
  {
    parent::__construct($name, $isPhone);
    $this->major = $major;
  }

  public function getInfo() {
    // name, phone, major
    return parent::getInfo() . ", Major: $this->major";
  }

}

class Teacher extends Person {
  private $department;

  public function __construct($name, $isPhone, $department)
  {
    parent::__construct($name, $isPhone);
    $this->department = $department;
  }

  public function getInfo() {
    return parent::getInfo() . ", Department: $this->department";
  }
}

// $student = new Student("Mehdi", "0786541234", "Computer Science");

// echo $student->getInfo();

$teacher = new Teacher("Naweed", "0765432", "Math");
echo $teacher->getInfo();
