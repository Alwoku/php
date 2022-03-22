<?php
    class Model_test extends Model {
        private $username;
        private $email;
        private $text;

        public function pametrs($username,$email,$text){
            $this->username = $username;
            $this->email = $email;
            $this->text = $text;
        }

        public function mess(){
        
            if(strlen($this->username) < 3){
                return "Введите имя";
            } else if(strlen($this->email) < 3){
                return "Введите email";
            }else if(strlen($this->text) < 20){
                return "Сообщение слишком короткое";
            }else{
                mail('panda55505@mail.ru' , 'сайт', $this->text, $this->email);
                return "все верно";
            }
            
        }
  
    };
?>