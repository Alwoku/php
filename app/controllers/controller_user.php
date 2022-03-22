<?php
class Controller_user extends Controller{
    public function __construct() {
        $this->model = new Model_user();
        $this->view = new View();
    }
    public function action_index() {
       
        if(isset($_POST['ex_bt'])){
            $ex = $this->model->exi();  
            exit();
        }
        $this->view->generate('user_view.php', 'template_view.php');
        
    }
}