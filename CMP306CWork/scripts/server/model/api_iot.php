<?php
require_once '../../../config.php';
require_once ROOT.'scripts/server/model/database.php';

class IoTAPI extends Database
{
    public static function createReading($reading_data)
    {
        $command = 'INSERT INTO iot_reading (device, sensors) '.
            'VALUES (:device_id, :sensor_readings)';
        $reading_array = json_decode($reading_data, true);

        try {
            $statement = self::prepareStatement($command);
            $statement->bindParam(':device_id', $reading_array['device']);
            $statement->bindParam(':sensor_readings', $reading_array['sensors']);

            $statement->execute();
        }
        catch (PDOException $e) {
            echo 'Error: '.$e->getMessage();
            return null;
        }
    }
}
?>