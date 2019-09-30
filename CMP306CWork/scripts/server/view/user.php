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

    //Access Functions
    public function getID() { return $this->user; }
    public function getEmail() { return $this->email; }
    public function getUsername() { return $this->username; }
    public function getPassword() { return $this->password; }
}
?>