<?php
namespace Class;

use Academy01\Semej\Semej;

require_once 'autoloader.php';


class Register{
        
     protected $data ;
     
     public function __construct($data)
     {
        $this->data  = $data;
          
        if($this->confirm_password()){
                $this->register();
        }else{
                Semej::set('danger', 'Error', 'password not confirmed');  ;
        }
        header('location: register.php') ;die();
     }


     protected function  register(){
        $userdata = [
                'name'  => $this->data['name'],
                'email'  => $this->data['email'],
                'password'  => md5($this->data['password']),

        ];
        $adduser = new Database();

       if( $adduser->insert('users',$userdata)){
        Semej::set('success','Ok','user rigister successfuly .');
       }else{
        Semej::set('danger', 'Error', 'Rigister failed !');       
       }
 
     }
     

     protected  function confirm_password(){
   
        if($this->data['password'] === $this->data['confirm_password']){
                return true;
        }else{
                return false ; 
        }

     }




}







?>