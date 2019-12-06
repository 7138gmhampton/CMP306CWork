<?php
require_once '../../../config.php';
require_once ROOT.'scripts/server/controller/control_iot.php';

$device_id = $_POST['device'];
$sensor_readings = $_POST['sensors'];

IoTController::create($device_id, $sensor_readings);
?>