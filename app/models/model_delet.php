<?php
require 'DB.php';
class Model_delet extends Model {
    private $del ; 
    private $_db = null ;
    public function __construct()
    {
       $this->_db = DB::getInstence();
    }
    
    public function dell($del){
         
        $SQL="DELETE FROM `reduction` WHERE `id` = \"$del\"";
        $que= $this->_db->query($SQL);
        header('Location: /');

    }

}