<?php

class University {

  private $name;
  private $location;

  public function __construct($name, $location)
  {
    $this->name = $name;
    $this->location = $location;
  }

  public function mehdi() {
    return $this->name . " " . $this->location;
  }

}

$university = new University('Kabul', "Karte 4"); // x234



