<?php
require_once ROOT.'scripts/server/model/database.php';
require_once ROOT.'scripts/server/view/user.php';

class UserAPI extends Database
{
    public static function createUser($user_data)
    {
        $commmand = 'INSERT INTO psn_user (email, username, password) '.
            'VALUES (:email, :username, :password)';
        $user_array = json_decode($user_data, true);

        try {
            $statement = self::prepareStatement($commmand);
            $statement->bindParam(':email', $user_array['email']);
            $statement->bindParam(':username', $user_array['username']);
            $statement->bindParam(':password', $user_array['password']);

            $statement->execute();
        }
        catch (PDOException $e) {
            echo 'Error: '.$e->getMessage();
            return null;
        }
    }

    public static function getUserByEmail($email)
    {
        $command = 'SELECT user, email, username, password '.
            'FROM psn_user '.
            'WHERE email = :email';

        $response = self::selectWhere($command, ':email', $email);

        return $response;
    }
}
?>