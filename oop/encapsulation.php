<?php

// protected
// private -> customer -> employee
// public

class Student {
  private $name;
  private $studentID;
  private $gpa;

  public function __construct($name, $studentID, $gpa)
  {
    $this->name = $name;
    $this->studentID = $studentID;
    $this->gpa = $gpa;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getGpa() {
    return $this->gpa;
  }

}


$student = new Student("Ali", '345353', 3.4);
echo $student->getName();
echo "<br>";
$student2 = new Student("Reza", '5345345', 4.5);
echo $student2->getName();
echo $student2->getGpa();


