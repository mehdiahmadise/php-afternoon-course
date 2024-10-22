<?php

// $x = 5;
// $name = "John";
// $is_single = false;
// $names = array('mehdi', 'ali','sara', 'narges', 'mohammad');
// $height = 3.4;
// $x = "Hello world!";
// $x = null;

// $name = "Mehdi";

// echo "My name id $name";


// echo strlen("Hello world!");

// echo str_word_count("Hello world! and Good by live");

// $text = "My name is mehdi";
// echo $text[1];

// echo strpos("Hello world!", "world");

// $x = "Hello World!";
// echo strtoupper($x);

// echo strtolower($x);

// $x = "Hello World!";
// echo str_replace("World", "Dolly", $x);

// $x = "Hello World!";
// echo strrev($x);


// $x = "   Hello World!   ";
// // echo strlen($x);
// $x = trim($x);
// echo strlen($x);


// $x = "Hello ";
// $y = "World";
// $z = $x . $y;
// echo $z;

// $x = "Hello";
// $y = "World";
// $z = "$x $y";
// echo $z;

// $x = "We are the so-called \"Vikings\" from  \nthe north.";
// echo $x;

// $x = 10;
// $x = 2.4;

// echo(is_int($x));
// var_dump(is_int($x));

// var_dump(is_int($x));

// $number = 3.4;
// $number = 4;
// var_dump(is_float($number));

// $x = 4;
// not a number
// var_dump(is_nan($x));

// $x = acos(90);
// var_dump(is_nan($x));

// $name = "mehdi";
// $number = 10;
// $number = 2.3;

// var_dump(is_numeric($number));

// $x = 23465.768;

// $int_cast = (int)$x;

// var_dump($int_cast);

// $x = "5.6";

// $y = (float)$x;
// var_dump($y);


// $x = 4;
// $x = (string)$x;
// var_dump($x);


// echo(pi());

// echo(min(0, 150, 30, 20, -8, -200));
// echo "<br>";
// echo(max(0, 150, 30, 20, -8, -200));

// echo abs(-5);
// echo sqrt(81);

// echo round(5.4555);

// echo rand();

// echo(rand(10, 100));

// define("TAX_RATE", 0.15);

// const TAX_RATE = 0.15;

// function calculateTax ($amount) {
//   return $amount * TAX_RATE;
// }

// $price = 1000;

// echo "Price: " . $price . "\n";
// echo '<br>';
// echo "Tax: " . calculateTax($price);

// class TestClass {
//   public function sum() {
//       echo __CLASS__;
//   }
// }

// $test = new TestClass();
// $test->sum();


// echo __DIR__;

// echo __FILE__; 

// function showMessage() {
//   echo __FUNCTION__;
// }
// showMessage();

// echo "This is my Country" . __LINE__;

// class TestClass {
//   public function myMethod() {
//     echo __METHOD__;
//   }
// }

// $test = new TestClass();
// $test->myMethod();

// $a = 8;
// $b = 3;
// $z = $a % $b;

// echo $z;

// $a = 8;
// $b = 3;

// $z = $b ** $a;

// echo $z;

// $a = 2;
// $b = 3;

// $a = $a + $b;
// $a = $a - $b;
// $a = $a / $b;
// $a = $a % $b;
// $a = $a ** $b;

// $a += $b;
// $a -= $b;
// $a /=$b;
// $a %=$b;
// $a **=$b;

// echo $a;

// $number = 0;

// if($number > 0) {
//   echo "$number is Positive";
// }elseif($number == 0) {
//   echo "$number is neutral";
// }
// else {
//   echo "$number is Negative";
// }

// $day = 3;

// switch($day) {
//   case 1: 
//     echo "Saturday";
//     break;
//   case 2: 
//     echo "Sunday";
//     break;
//   case 3:
//     echo "Monday";
//     break;
//   case 4: 
//     echo "Tuesday";
//     break;
//   default: 
//   echo "Invalid day";
// }


// ternary operator
// ?:

// $age = 6;

// if($age >= 18) {
//   echo "Adult";
// }else {
//   echo "Baby";
// }

// $result = ($age >= 18) ? "Adult" : "Baby";

// echo $result;


// $a = 13;

// if ($a > 10) {
//   echo "Above 10";
//   if ($a > 20) {
//     echo " and also above 20";
//   } else {
//     echo " but not above 20";
//   }
// }