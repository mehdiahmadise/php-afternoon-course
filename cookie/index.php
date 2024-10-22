<?php

$cookie_name = "username";
$cookie_value = "Mehdi";

$cookie_expiration = time() + (30);

setcookie($cookie_name, $cookie_value, $cookie_expiration);

if(isset($_COOKIE[$cookie_name])) {
    echo "Hello " . $_COOKIE[$cookie_name] . "!";
}else {
  echo "Welcome, guest!";
}