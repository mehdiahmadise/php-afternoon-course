<?php

function logError($errorMessage) {
  
  $logFile = "error_log.txt";

  $currentTime = date('Y-m-d H:i:s');

  $logEntry = "[" . $currentTime . "]" . $errorMessage . "\n";

  $handle = fopen($logFile, 'a');
  
  fwrite($handle, $logEntry);

  fclose($handle);
}

try {
    throw new Exception("This is Test Error");

}catch(Exception $e) {
  logError($e->getMessage());
  echo "Error successfully save in log";
}