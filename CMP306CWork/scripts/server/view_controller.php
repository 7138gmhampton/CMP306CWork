<?php
class ViewController
{
    protected static function scrub($raw)
    {
        $clean = trim($raw);
        $clean = stripslashes($clean);
        $clean = htmlspecialchars($clean);

        return $clean;
    }

    protected static function scrubRecord($raw_record)
    {
        $clean_record = array();

        foreach ($raw_record as $key => $value) {
            $clean_value = self::scrub($value);
            $clean_record[$key] = $clean_value;
        }

        return $clean_record;
    }

    protected static function scrubArray($raw_array)
    {
        if ($raw_array = null) return null;
        
        $clean_array = array();

        foreach ($raw_array as $entry) {
            $clean_entry = array();
            foreach ($entry as $key => $value) {
                $clean_value = self::scrub($value);
                $clean_entry[$key] = $clean_value;
            }
            array_push($clean_array, $clean_entry);
        }

        return $clean_array;
    }
}
?>