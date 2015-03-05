<?php

class C_User extends C_Base
{
    private $userModel = null;

    function __construct()
    {
        $this->userModel = new M_Users();
    }

    public function collect()
    {
        return ['data' => null, 'view' => 'collect_user.php'];
    }

    private function create($email, $password)
    {
        $this->userModel->createUser($email, $password);
    }

    private function connect($user)
    {
        $_SESSION ['user'] = $user['email'];
        $_SESSION ['connected'] = '1';
        $_SESSION ['connected'] = 1;
        header('Location: http://localhost');
    }

    public function disconnect()
    {
        session_destroy();
        unset($_SESSION ['user']);
        unset($_SESSION ['connected']);
        header('Location: http://localhost');
    }

    public function check()
    {
        if(empty($_REQUEST['login'])||empty($_REQUEST['password']))
        {
            die('oops');
        }
        $user = $this->userModel->getUser($_REQUEST['login'], sha1($_REQUEST['password']));
        if ($user) {
            $this->connect($user);
        } else {
            $this->create($_REQUEST['login'], sha1($_REQUEST['password']));
        }
    }


}