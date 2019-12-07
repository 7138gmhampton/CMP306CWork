<?php
//Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../../../config.php';
require_once ROOT.'scripts/server/view/view_iot.php';

$current = IoTView::current();
$current_array = array(
    'timestamp' => $current->getTime(),
    'device' => $current->getId(),
    'voltage' => $current->getVoltage(),
    'internal' => $current->getIntTemp(),
    'external' => $current->getExtTemp(),
    'light' => $current->getLight());

$response = json_encode($current_array);
echo $response;
?>