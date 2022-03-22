<?php

class Controller_delet extends Controller{

  public function __construct() {
    
    $this->view = new View();
  
    
}
  public function action_index() {
     if(isset($_POST['id'])){

      $data = $this->model = new Model_delet();
      $data ->dell($_POST['id']);
     }
    
   
     
    
  }
     
     
}
 ?>
