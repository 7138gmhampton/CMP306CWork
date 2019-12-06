<?php
//Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../../../config.php';
require_once ROOT.'scripts/server/controller/control_iot.php';

//$device_id = $_POST['this_device'];
//$sensor_readings = $_POST['sensors'];
$http_body = file_get_contents('php://input');
$post = json_decode($http_body);

IoTController::create($post->this_device, $post->sensors);
?>