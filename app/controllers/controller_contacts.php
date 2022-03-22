<?php
class Controller_contacts extends Controller{
    public function __construct()
    {
        $this->view = new View();
    }
    public function action_index() {

        $data = [];
       
        if(isset($_POST['username'])){
            $cont = $this->model = new Model_test();
            $cont ->pametrs($_POST['username'],$_POST['email'],$_POST['text']);
            $mess = $cont->mess();
           if($mess == "все верно"){
            header('Location://'); 
           }else {
            $data["messenge"] = $mess;
           }
        }
        $this->view->generate('contacts_view.php','template_view.php');
    }
}
// данная функция не работает))
?>
