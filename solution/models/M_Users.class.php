<?php

/**
 * Class M_Users
 */
class M_Users extends Model{
    /**
     * @param $email
     * @param $password
     * @return mixed
     */
    public function getUser($email,$password){
        $sql = 'SELECT * FROM users WHERE email=:email AND password=:password';
        $pdost = $this->connexion->prepare($sql);
        $pdost->execute([':email'=>$email,':password'=>$password]);
        return $pdost->fetch();
    }

    /**
     * @param $email
     * @param $password
     * @return bool
     */
    public function createUser($email, $password){
        $sql = 'INSERT INTO users(email, password) VALUES(:email, :password)';
        try{
            $pdost = $this->connexion->prepare($sql);
            $pdost->execute([':email'=>$email,':password'=>$password]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}