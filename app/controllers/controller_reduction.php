<?php
class Controller_reduction extends Controller {
    function __construct()
    {
        $this->view = new View();
    }
    public function action_index() {
        $data = [];
        $ler = $this->model = new Model_reduction();
        $data = $this->model->contentLimit('id', 5 , $_COOKIE['login']);
        if(isset($_POST['link_r'])){
                $ler -> param($_POST['link_r'], $_POST['link_red']);
                $val = $ler->checkFor();
                
                if($val == "все верно"){
                    $ler->addLink();
                }  else {
                    $data["messenge"] = $val;
                }
               
           }
       if(isset($_GET["id"]))
       {
          
        $this->model->del($_GET["id"]);

       }

        $this->view->generate('reduction_view.php', 'template_view.php', $data);
        
    }
       
}


?>