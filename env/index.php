<?php

if(file_exists('.env')) {
   $lines = file('.env');
   foreach($lines as $line) {
    if(trim($line) != '' && strpos(trim($line), '#') !== 0) {
      list($key, $value) = explode('=', $line, 2);
      $_ENV[trim($key)] = trim($value);
    }
   }
}

$db_host = $_ENV['DB_HOST'];
$db_name = $_ENV['DB_NAME'];
$db_user = $_ENV['DB_USER'];
$db_pass = $_ENV['DB_PASS'];
$db_key = $_ENV['API_KEY'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1><?php echo $db_name ?></h1>
</body>
</html>