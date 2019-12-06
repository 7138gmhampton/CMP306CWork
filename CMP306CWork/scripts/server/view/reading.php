<?php
class Reading
{
    private $time;
    private $device_id;
    private $voltage;
    private $internal_temp;
    private $external_temp;
    private $light_level;

    function __construct($time, $device_id, $voltage, $int_temp, $ext_temp, $light_lvl)
    {
        $this->time = $time;
        $this->device_id = $device_id;
        $this->voltage = $voltage;
        $this->internal_temp = $int_temp;
        $this->external_temp = $ext_temp;
        $this->light_level = $light_lvl;
    }

    //Access Functions
    public function getTime() { return $this->time; }
    public function getId() { return $this->device_id; }
    public function getVoltage() { return $this->voltage; }
    public function getIntTemp() { return $this->internal_temp; }
    public function getExtTemp() { return $this->external_temp; }
    public function getLight() { return $this->light_level; }
}
?>