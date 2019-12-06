<?php
require_once '../../../config.php';
require_once ROOT.'scripts/server/model/api_iot.php';

class IoTController extends ViewController
{
    public static function create($device_id, $readings)
    {
        $reading_array = array(
            'device' => $device_id,
            'sensors' => $readings);
        $reading_data = json_encode($reading_array);

        IoTAPI::createReading($reading_data);
    }
}
?>