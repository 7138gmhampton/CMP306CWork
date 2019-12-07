<?php
require_once '../../../config.php';
require_once ROOT.'scripts/server/view/view_iot.php';

$current = IoTView::current();

$response = json_encode($current);
echo $response;
?>