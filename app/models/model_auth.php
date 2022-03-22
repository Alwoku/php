<?php
require 'DB.php';
class Model_auth extends Model {
   private $login;
   private $pass;
   private $_db = null;

  public function __construct()
  {
      $this->_db = DB ::getInstence();
  }

  public function paramt($login , $pass){
      $this->login = $login;
      $this->pass = $pass;
  }

  public function chek(){
    $result = $this->_db->query("SELECT *FROM `users` WHERE `login` = \"$this->login\"");
    $user = $result->fetch(PDO::FETCH_OBJ);

    if($user->login == ''){
        return "Такого пользователя не существует";
    } else if(password_verify($this->pass, $user->pass)){
        setcookie('login' , $this->login , time()+3600 , "/");
        header('Location:  http://localhost/main');
    } else {
        print_r($result);
        return "Пароли не совпадают";
     
    }
    }
}
