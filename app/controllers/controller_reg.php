<?php
class Controller_reg extends Controller{
      
    function __construct(){
        $this->view = new View();
    }
    public function action_index() { 
        
       if(isset($_POST['login'])){
        $data = [];
            $user = $this->model = new Model_reg();
            $user -> parametr($_POST['email'], $_POST['login'],$_POST['pass']);
            $valid = $user->checkForm();
            
            if($valid == "все верно"){
               
                $user->addUser();
            }  else {
                
                $data["messenge"] = $valid;
            }

       }
      
          $this->view->generate('reg_view.php','template_view.php' , $data);
    }

       
    


}