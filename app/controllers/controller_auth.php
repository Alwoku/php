<?php

class Controller_auth extends Controller{
    function __construct(){
       
        $this->view = new View();
       
    }
    function action_index()  {
        if(isset($_POST['login_au'])) {
            $data=[]; 
            $auth = $this->model = new Model_auth();
            $auth->paramt($_POST["login_au"] , $_POST["pass_au"]);
            $data["mess"] = $auth->chek();
        } 
        
            $this->view->generate('auth_view.php' , 'template_view.php',$data);

           
    }

}