<?php
require 'DB.php';
class Model_reduction extends Model{
    private $link_r;
    private $link_red;
    private $_db = null;

    public function __construct()
    {
        $this->_db = DB::getInstence();
        
    }

     public function param($link_r ,$link_red ){
         $this->link_r = $link_r ; 
         $this->link_red = $link_red;

     }

     public function checkFor(){
        $sth = $this->_db->query("SELECT * FROM `reduction` WHERE `link_red` = \"$this->link_red\"");
        $set = $sth->fetch(PDO::FETCH_OBJ);
        

        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$this->link_r)){
            return "Введите ссылку";
        } else if(strlen($this->link_red) < 1){
            return "Введите сокращение";
        }else if ($set->link_red and $set->id_us != 0 ) {
            return "Такое сокращение уже существует";
        }else{
            return "все верно";
        }
        }

      
     

     public function addLink(){
        $link_red = "localhost/".$this->link_red;
        $sql = "INSERT INTO reduction(link_r,link_red, id_us) VALUES(:link_r , :link_red , :id_us)";
        $query = $this->_db->prepare($sql);
        $query->execute(['link_r' => $this->link_r , 'link_red' => $link_red , 'id_us' => $_COOKIE['login']]);
         header('Location:/');
    }

    public function content(){
        $result =  $this->_db->query("SELECT*FROM `reduction`");
         return $result->fetchAll(PDO::FETCH_ASSOC);
     }

    public function contentLimit($order, $limit , $id_us){
        $result =  $this->_db->query("SELECT*FROM `reduction` WHERE `id_us` = \"$id_us\" ORDER BY $order DESC LIMIT $limit");
         return $result->fetchAll(PDO::FETCH_ASSOC);
        
     }

     public function del($del){
        $result = $this->_db->query("DELETE FROM `reduction` WHERE `id` = \"$this->del\"");;
    }

}


?> 