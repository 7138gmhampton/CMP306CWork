<?php
require_once ROOT.'scripts/server/view_controller.php';
require_once ROOT.'scripts/server/model/api_iot.php';
require_once ROOT.'scripts/server/view/reading.php';

class IoTView extends ViewController
{
    public static function recent($no_of_readings)
    {
        $readings_data = IoTAPI::getMostRecentReadings($no_of_readings);
        $readings_array = json_decode($readings_data, true);
        $all_readings = array();

        foreach ($readings_array as $each_reading) {
            $sensors = json_decode($each_reading['sensors'], true);
            $next_reading = new Reading(
                $each_reading['timestamp'],
                $each_reading['device'],
                $sensors['voltage'],
                $sensors['internal'],
                $sensors['external'],
                $sensors['light']);
            array_push($all_readings, $next_reading);
        }

        return $all_readings;
    }

    public static function current()
    {
        $most_recent = self::recent(1);

        return $most_recent[0];
    }
}
?>