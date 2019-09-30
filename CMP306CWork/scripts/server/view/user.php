<?php
class User
{
    private $user;
    private $email;
    private $username;
    private $password;

    function __construct($email, $username, $password, $user=null)
    {
        $this->user = $user;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }
}
?>