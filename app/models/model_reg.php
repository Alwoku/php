<?php
require 'DB.php';

class Model_reg extends Model {
    private $email;
    private $login;
    private $pass;
    private $_db = null;

    public function __construct(){
        $this->_db = DB::getInstence();
        

    }
    public function parametr($email,$login,$pass){
        $this->email = $email;
        $this->login = $login;
        $this->pass = $pass;
    }
    public function checkForm(){
        $str = $this->_db->prepare("SELECT `login` FROM `users` WHERE `login` = \"$this->login\"");
        $str ->execute();

        $requer = $str->fetch(PDO::FETCH_OBJ);


        if(strlen($this->email) < 3){
            return "Введите email";
        } else if(strlen($this->login) < 3){
            return "Логин слишком короткий";
        } else if($requer->login != 0){
            return "Такой логин уже занят";
        }else if(strlen($this->pass) < 3){
            return "Пароль слишком короткий";
        }else{
            return "все верно";
        }
        }
        
    public function addUser(){
        $pass = password_hash($this->pass , PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(email,login,pass) VALUES(\"$this->email\",\"$this->login\",\"$pass\")";
        $query = $this->_db->prepare($sql);
        $query->execute();
        setcookie('login' , $this->login , time()+3600 , "/");
        header('Location:  http://localhost/main');

    }

}