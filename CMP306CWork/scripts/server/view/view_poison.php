<?php
require_once ROOT.'scripts/server/model/api_poison.php';
require_once ROOT.'scripts/server/view/poison.php';

class PoisonView
{
    public static function singlePoison($id)
    {
        $poison_data = PoisonAPI::getPoisonById($id);
        $poison_array = json_decode($poison_data, true);

        $poison = new Poison(
            $poison_array['poison'],
            $poison_array['name'],
            $poison_array['alternative'],
            $poison_array['description'],
            $poison_array['source'],
            $poison_array['title'],
            $poison_array['alttext']);

        return $poison;
    }

    public static function allPoisons()
    {
        $poison_data = PoisonAPI::getAllPoisons();
        //var_dump($poison_data);
        $poison_array = json_decode($poison_data, true);
        //var_dump($array_of_poisons);
        $all_poisons = array();

        foreach ($poison_array as $each_poison) {
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