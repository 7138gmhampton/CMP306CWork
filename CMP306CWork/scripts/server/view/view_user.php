<?php
require_once ROOT.'scripts/server/view_controller.php';
require_once ROOT.'scripts/server/model/api_user.php';
require_once ROOT.'scripts/server/view/user.php';

class UserView extends ViewController
{
    public static function valid($email)
    {
        $user_data = UserAPI::getUserByEmail(self::scrub($email));
        $user_array = json_decode($user_data, true);

        $valid = count($user_array) == 1;

        return $valid;
    }

    public static function singleByEmail($email)
    {
        $user_data = UserAPI::getUserByEmail(self::scrub($email));
        $user_array = json_decode($user_data, true);
        $scrubbed_array = self::scrubArray($user_array);
        //var_dump($scrubbed_array);

        $user = new User(
            $scrubbed_array[0]['email'],
            $scrubbed_array[0]['username'],
            $scrubbed_array[0]['password'],
            $scrubbed_array[0]['user']);

        return $user;
    }
}
?>