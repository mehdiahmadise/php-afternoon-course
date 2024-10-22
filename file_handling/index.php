<?php

$file = 'example.txt';

// echo file_exists($file);
if(!file_exists($file)) {
   $handle = fopen($file, "w");
   $content = "This Content is Test";
   fwrite($handle, $content);
   fclose($handle);
   echo "Successfully created!!!";

}else {
  echo "file already is exsisted";
}

$handle = fopen($file, 'r');

$content = fread($handle, filesize($file));

fclose($handle);
echo "<br>";
echo "file Content" . $content;