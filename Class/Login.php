<?php

namespace class;
use Academy01\Semej\Semej;
class login {


        protected $data;
        protected $connection ;

        public function  __construct($data){
                $this->data = $data ; 
                $this->connection = new Database();

                $this->loginUser();
        }

        public function loginUser (){
                
          $email = $this->data['email'];

          $user = $this->connection->select('users',"email='$email'" );
           if (!$user){
                Semej::set('danger', 'Error', 'user or password not incorrect');
                header('location: login.php');die();
           } 

           if (md5($this->data['password']) !== $user['password']){
                Semej::set('danger', 'Error', 'user or password not incorrect');
                header('location: login.php');die();
           }else{
 
                header('Location: index.php') ;die();
           } 
        }

}
























?>