<?php

// $_SESSION['username'] = "Mehdi";

if(isset($_SESSION['username'])) {
    echo "Hello, " . $_SESSION['username'] . '! You are logged in';
}else {
  echo "you are not logged in";
}
