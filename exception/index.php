<?php

// division by zero

// 10/20
// 0/10
// 10/0 -> exception -> این مساله راه حل ندارد

function divide($number1, $number2) {

  if($number2 == 0) {
    throw new Exception('Division by zero error');
  }
  return $number1 / $number2;
}


try{
  
  echo divide(10,2);
  echo '<br>';
  echo divide(0,4);
  echo "<br>";
  echo divide(4,0);

}catch(Exception $e){
  echo "Caught exception: " . $e->getMessage();
}