<?php


// echo "Array Functions";

// $names = array('mehdi','ali','reza', 'sara');

// echo $names;
// var_dump($names[3]);

// $person = ['name' => 'Mehdi', "age" => 12, 'salary' => 12000];

// echo $person['name'];

// $array1 = array('color' => 'red', 0 => 3, 1 =>   5, 2 => true);

// echo $array1['color'];

// 0 -> false
// 1 -> true


// array_merge()

// $names = array('mehdi', 'ali', 'mohammad', 'reza');
// $names2 = array('sara', 'naser');

// $result = array_merge($names, $names2);

// var_dump($result);

// array_filter()

// $numbers = array(2, 3, 4, 6, 7, 9, 8, 9, 0, 10, 20, 60, 17);

// $even = array_filter($numbers, function($num) {
//     return $num % 2 == 1;
// });

// var_dump($even);

// array_unique()

// $numbers = array(1,1,1, 5,6,7,8,7,4, 8, 9, 1);

// $result = array_unique($numbers);

// var_dump($result);

// ------------------------------
//array_sum()
// $numbers = array(1,1,1, 5,6,7,8,7,4, 8, 9, 1);

// $sum = array_sum($numbers);

// echo  $sum;

//array_reverse()

// $fruits = array('apple', 'banana', 'cherry', 'orange');

// $result = array_reverse($fruits);

// var_dump($result);


// array_push()

// $fruits = array('apple', 'banana', 'cherry');

// array_push($fruits, 'orange', 'raspberry');

// var_dump($fruits);

//array_pop()

// $fruits = array('apple', 'banana', 'cherry');

// array_pop($fruits);
// array_pop($fruits);
// array_pop($fruits);

// var_dump($fruits);

// array_key_exists()

// $person = array('name' => "Mehdi", 'salary' => 30000, 'age' => 20);

// if(array_key_exists('job', $person)) {
//   echo "Key job exists!";
// }else {
//   echo "Key job not exists!n";
// }


// $person = array('name' => "Mehdi", 'salary' => 30000, 'age' => 20);

// $result = array_search('Mehdi', $person);

// echo "Mehdi is exists $result";

// $fruits = array('apple', 'banana', 'cherry');

// $result = array_search('orange', $fruits);

// var_dump($result);