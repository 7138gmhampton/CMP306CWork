<?php
class ViewController
{
    protected static function scrub($raw)
    {
        $clean = trim($raw);
        $clean = stripslashes($clean);
        $clean = htmlspecialchars($clean, ENT_COMPAT|ENT_HTML5, ini_get('default_charset'), false);

        return $clean;
    }

    protected static function scrubArray($raw_array)
    {
        $clean_array = array();
        if ($raw_array == null || $raw_array == false) return $clean_array;

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