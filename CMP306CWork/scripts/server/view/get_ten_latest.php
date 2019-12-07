<?php
require_once '../../../config.php';
require_once ROOT.'scripts/server/view/view_iot.php';

$latest = IoTView::recent(10);
$recent_array = array();

foreach ($latest as $each_reading) {
    $next_reading = array(
    'timestamp' => $each_reading->getTime(),
    'device' => $each_reading->getId(),
    'voltage' => $each_reading->getVoltage(),
    'internal' => $each_reading->getIntTemp(),
    'external' => $each_reading->getExtTemp(),
    'light' => $each_reading->getLight());
    array_push($recent_array, $next_reading);
}

$response = json_encode($recent_array);
echo $response;
?>