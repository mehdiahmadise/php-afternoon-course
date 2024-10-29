<?php

class A {
  public function a(){
    return "A";
  }
}

class B extends A {
  public function b() {
    return "B";
  }
}

class C extends B {
  public function c() {
    return 'C' . ' ' . parent::a() . " " . parent::b();
  }
}

$c = new C();
var_dump($c->c());