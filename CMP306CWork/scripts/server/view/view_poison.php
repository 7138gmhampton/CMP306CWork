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

        $poison = new Poison(
            $poison_array[0]['poison'],
            $poison_array[0]['name'],
            $poison_array[0]['alternative'],
            $poison_array[0]['description'],
            $poison_array[0]['source'],
            $poison_array[0]['title'],
            $poison_array[0]['alttext']);

        return $poison;
    }

    public static function all()
    {
        $poison_data = PoisonAPI::getAllPoisons();
        $poison_array = json_decode($poison_data, true);

        $all_poisons = array();
        foreach ($poison_array as $each_poison) {
            $next_poison = new Poison(
                $each_poison['poison'],
                $each_poison['name'],
                $each_poison['alternative'],
                $each_poison['description'],
                $each_poison['source'],
                $each_poison['title'],
                $each_poison['alttext']);
            array_push($all_poisons, $next_poison);
        }

        return $all_poisons;
    }
}
?>