<?php
require_once ROOT.'scripts/server/model/api_user.php';
require_once ROOT.'scripts/server/view/user.php';

class UserView
{
    public static function valid($email)
    {
        $user_data = UserAPI::getUserByEmail($email);
        $user_array = json_decode($user_data, true);

        $valid = count($user_array) == 1;

        return $valid;
    }

    public static function singleByEmail($email)
    {
        $user_data = UserAPI::getUserByEmail($email);
        $user_array = json_decode($user_data, true);

        $user = new User(
            $user_array[0]['email'],
            $user_array[0]['username'],
            $user_array[0]['password'],
            $user_array[0]['user']);

        return $user;
    }
}
?>