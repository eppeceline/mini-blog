<?php

/**
 * Class C_User
 */
class C_User extends C_Base
{
    /**
     * @var M_Users|null
     */
    private $userModel = null;

    /**
     *
     */
    public function __construct()
    {
        $this->userModel = new M_Users();
    }

    /**
     * @return array
     */
    public function collect()
    {
        return ['data' => null, 'view' => 'collect_user.php'];
    }

    /**
     * @param $email
     * @param $password
     */
    private function create($email, $password)
    {
        $this->userModel->createUser($email, $password);
        $this->connect(['email'=>$email]);
    }

    /**
     * @param $user
     */
    private function connect($user)
    {
        $_SESSION ['user'] = $user['email'];
        $_SESSION ['connected'] = 1;
        header('Location: http://localhost');
    }

    /**
     *
     */
    public function disconnect()
    {
        session_destroy();
        unset($_SESSION ['user']);
        unset($_SESSION ['connected']);
        header('Location: http://localhost');
    }

    /**
     *
     */
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