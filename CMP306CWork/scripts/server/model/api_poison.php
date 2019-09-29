<?php
require_once ROOT.'scripts/server/model/database.php';

class PoisonAPI extends Database
{
    public static function getAllPoisons()
    {
        $command = 'SELECT psn_poison.poison, psn_poison.name, psn_poison.alternative, '.
            'psn_poison.description, psn_image.source, psn_image.title, psn_image.alttext '.
            'FROM psn_poison '.
            'INNER JOIN psn_image '.
            'ON psn_poison.main_pic = psn_image.image';
        $result = null;

        try {
            //$connection = self::makeConnection();
            //$statement = $connection->prepare($command);
            $statement = self::prepareStatement($command);

            $statement->execute();

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            echo 'Error: '.$e->getMessage();
            return null;
        }

        //var_dump($result);
        $response = json_encode($result);
        //var_dump($response);
        return $response;
    }

    public static function getPoisonById($id)
    {
        $command = 'SELECT psn_poison.poison, psn_poison.name, psn_poison.alternative, '.
            'psn_poison.description, psn_image.source, psn_image.title, psn_image.alttext '.
            'FROM psn_poison '.
            'INNER JOIN psn_image '.
            'ON psn_poison.main_pic = psn_image.image '.
            'WHERE poison = :id';
        //$result = null;

        //if (self::rowCount('psn_poison', 'poison', $id) == 1 ) {
        //    try {
        //        $connection = self::makeConnection();
        //        $statement = $connection->prepare($command);
        //        $statement->bindParam(':id', $id);

        //        $statement->execute();

        //        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        //    }
        //    catch (PDOException $e) {
        //        echo 'Error: '.$e->getMessage();
        //        return null;
        //    }
        //}

        //$response = json_encode($result);
        $response = null;

        if (self::rowCount('psn_poison', 'poison', $id) == 1) 
            $response = self::selectWhere($command, ':id', $id);

        return $response;
    }
}
?>