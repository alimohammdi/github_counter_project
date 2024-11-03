<?php
namespace Class;
require_once 'autoloader.php';


class Register{
        
     protected $data ;
     
     public function __construct($data)
     {
        $this->data  = $data;

        if($this->confirm_password()){
                $this->register();
        }else{
                echo 'پسوورد ها برابر نیست';
        }
        
     }


     protected function  register(){
        $userdata = [
                'name'  => $this->data['name'],
                'email'  => $this->data['email'],
                'password'  => md5($this->data['password']),

        ];
        $adduser = new Database();

       if( $adduser->insert('users',$userdata)){
            echo ' you are login ';
       }else{
             echo '  you are not login ';       
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