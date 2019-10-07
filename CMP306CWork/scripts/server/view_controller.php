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

    protected static function scrubArray($raw_array)
    {
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