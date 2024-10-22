<?php

if(isset($_GET['query'])) {
  
  $searchQuery = htmlspecialchars($_GET['query']);

  $fakeDatabase = ['apple', 'banana', 'orange', 'grape', 'mongo'];

  echo "Search Result for: " . $searchQuery . "<br><br>";

  $results = array_filter($fakeDatabase, function($item)  use ($searchQuery) {
     
    return stripos($item, $searchQuery) !== false;

  });

  if(count($results) > 0) {
      foreach($results as $result) {
        echo $result . "<br>";
      }
  }
  else {
    echo "NOT FOUND";
  }
}