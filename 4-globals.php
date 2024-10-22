<?php

// $name = "Mehdi Ahmadi";

// function showName() {
//   echo $GLOBALS['name'];
// }

// showName();

$GLOBALS['config'] = [
   'site_name' => "Google",
   'email' => "mehdi@gmail.com",
   'maintenance_mode' => false,
];

function getSiteName() {
  return $GLOBALS['config']['site_name'];
}

function isMaintenanceMode() {
  return $GLOBALS['config']['maintenance_mode'];
}
function enableMaintenanceMode() {
  $GLOBALS['config']['maintenance_mode'] = true;
}


echo "My site name is " . getSiteName() . "<br>";

echo "Is Maintenance Mode On?" . (isMaintenanceMode() ? "Yes" : 'No');

enableMaintenanceMode();

echo "<br>";

echo "Is Maintenance Mode On?" . (isMaintenanceMode() ? "Yes" : 'No');