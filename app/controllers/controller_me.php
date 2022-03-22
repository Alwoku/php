<?php 
class Controller_me extends Controller{
    function action_index()
    {
        $this->view->generate('me_view.php' , 'template_view.php');
    }
}