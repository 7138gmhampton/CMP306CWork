<?php
require_once ROOT.'scripts/server/view_controller.php';
require_once ROOT.'scripts/server/model/api_user.php';

class UserController extends ViewController
{
    public static function create($email, $username, $raw_password)
    {
        $password = password_hash($raw_password, PASSWORD_DEFAULT);
        $user_array = array('email' => self::scrub($email), 
            'username' => self::scrub($username), 
            'password' => $password);
        $user_data = json_encode($user_array);

        UserAPI::createUser($user_data);
    }
}
?>