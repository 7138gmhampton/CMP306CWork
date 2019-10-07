<?php
require_once ROOT.'scripts/server/view_controller.php';
require_once ROOT.'scripts/server/model/api_poison.php';
require_once ROOT.'scripts/server/view/poison.php';

class PoisonView extends ViewController
{
    public static function single($id)
    {
        $poison_data = PoisonAPI::getPoisonById(self::scrub($id));
        $poison_array = json_decode($poison_data, true);
        $scrubbed_array = self::scrubArray($poison_array);

        $poison = new Poison(
            $scrubbed_array[0]['poison'],
            $scrubbed_array[0]['name'],
            $scrubbed_array[0]['alternative'],
            $scrubbed_array[0]['description'],
            $scrubbed_array[0]['source'],
            $scrubbed_array[0]['title'],
            $scrubbed_array[0]['alttext']);

        return $poison;
    }

    public static function all()
    {
        $poison_data = PoisonAPI::getAllPoisons();
        //var_dump($poison_data);
        $poison_array = json_decode($poison_data, true);
        //var_dump($array_of_poisons);
        $scrubbed_array = self::scrubArray($poison_array);

        $all_poisons = array();
        foreach ($scrubbed_array as $each_poison) {
            //var_dump($each_poison);
            $next_poison = new Poison(
                $each_poison['poison'],
                $each_poison['name'],
                $each_poison['alternative'],
                $each_poison['description'],
                $each_poison['source'],
                $each_poison['title'],
                $each_poison['alttext']);
            //$next_poison = new Poison();
            //foreach ($each_poison as $key => $value) $next_poison->{$key} = $value;
            array_push($all_poisons, $next_poison);
        }

        return $all_poisons;
    }
}
?>