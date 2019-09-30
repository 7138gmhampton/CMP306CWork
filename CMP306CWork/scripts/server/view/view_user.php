<?php
require_once ROOT.'scripts/server/model/api_user.php';

class UserView
{
    public static function valid($email)
    {
        $user_data = UserAPI::getUserByEmail($email);
        $user_array = json_decode($user_data, true);

        $valid = count($user_array) == 1;

        return $valid;
    }
}
?>