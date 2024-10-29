<?php

// function my_callback($item) {
//   return strlen($item);
// }

// $strings = ["apple", "orange", "banana", "coconut"];

// $lengths = array_map("my_callback", $strings);
// print_r($lengths);

$array = [4, 5, 3, 3, 2, 54, 7, 8, 98];

// binary sort:

function compare($a, $b) {
  if($a == $b) {
    return 0; // 
  }
  return ($a < $b) ? -1 : 1; // true
}

usort($array, 'compare');

print_r($array);

