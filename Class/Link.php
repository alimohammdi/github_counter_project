<?php 


namespace class;
use Academy01\Semej\Semej;
use Academy01\AuthToken\AuthToken;



class Link {


        protected $data;
        protected $connection ;

        public function  __construct($data){
                $this->data = $data ; 
                $this->connection = new Database();

               
        }

        public function addLink(){
              $title  = $this->data;
              $id = $_SESSION['id'];
              $uuid = uniqid('create_newlink_');

                $linkData = [
                    'user_id' => $id, 
                    'title'  => $title,
                     'uuid'  => $uuid
                ];

                $add_link  = $this->connection->insert('links',$linkData);
                if($add_link){
                        Semej::set('success','ok','add link successfuly');
                        header('Location: dashboard.php');
                }
        }


}



?>