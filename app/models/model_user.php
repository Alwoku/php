<?php
class Model_user extends Model {
    public function exi(){
        setcookie('login' , $_COOKIE["login"] , time()-3600 , "/");
        unset($_COOKIE['login']);
        header("Location: /auth");  
    }
}