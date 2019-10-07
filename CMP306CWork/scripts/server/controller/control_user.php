<?php
require_once ROOT.'scripts/server/model/api_user.php';

class UserController extends Controller
{
    public static function create($email, $username, $raw_password)
    {
        $password = password_hash($raw_password, PASSWORD_DEFAULT);
        $user_array = array('email' => $email, 'username' => $username, 'password' => $password);
        $user_data = json_encode($user_array);

        UserAPI::createUser($user_data);
    }
}
?>