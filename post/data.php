<?php


if($_SERVER["REQUEST_METHOD"] == "POST") {

  // validation


  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $hash_password = password_hash($password, PASSWORD_DEFAULT);

  echo "<h3>Submitted Information</h3>";
  echo "<p>Name:" . htmlspecialchars($name) . "</p>";
  echo "<p>Email:" . htmlspecialchars($email) . "</p>";
  echo "<p>Password:" . htmlspecialchars($hash_password) . "</p>";

  // pdo

}

// xss -> cross site scripting