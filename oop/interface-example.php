<?php

interface EmployeeInterface {
  public function calculateSalary();
}


class FullTimeEmployee implements EmployeeInterface {

  public $name;
  public $id;
  public $monthlySalary;
  
  public function __construct($name, $id, $monthlySalary)
  {
    $this->name = $name;
    $this->id = $id;
    $this->monthlySalary = $monthlySalary;
  }

  public function calculateSalary()
  {
    return $this->monthlySalary;
  }
}

class PartTimeEmployee implements EmployeeInterface {

  public $name;
  public $id;
  public $hourlyRate;
  public $hoursWorked;

  public function __construct($name, $id, $hourlyRate, $hoursWorked)
  {
    $this->name = $name;
    $this->id = $id;
    $this->hourlyRate = $hourlyRate;
    $this->hoursWorked = $hoursWorked;
  }

  public function calculateSalary()
  {
    return $this->hourlyRate * $this->hoursWorked;
  }
}

class ContractEmployee implements EmployeeInterface {

  public $name;
  public $id;
  public $contractAmount;

  public function __construct($name, $id, $contractAmount)
  {
    $this->name = $name;
    $this->id = $id;
    $this->contractAmount = $contractAmount;
  }

  public function calculateSalary()
  {
    return $this->contractAmount;
  }
}


function printSalary(EmployeeInterface $employee) {

  echo "Salary: " . $employee->name . " : " . $employee->calculateSalary() . "$ <br>";
  
}

$fullTimeEmployee = new FullTimeEmployee("Ali", 1, 40000);
printSalary($fullTimeEmployee);

echo "<br>";

$partTimeEmployee = new PartTimeEmployee("Mehdi", 2, 1000, 4);
printSalary($partTimeEmployee);

echo "<br>";

$contractEmployee = new ContractEmployee("Mohammad", 3, 3000);
printSalary($contractEmployee);