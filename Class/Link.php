<?php 


namespace class;
use Academy01\Semej\Semej;
use Academy01\AuthToken\AuthToken;



class Link {


        protected $data;
        protected $connection ;

        public function  __construct(){
                
                $this->connection = new Database();

               
        }

        public function addLink($data){
              $this->data = $data ; 
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

        public function showLink(){

                $uuid = $_SESSION['id'];
                $links  = $this->connection->selectAllcondition('links','user_id='.$uuid);

                return $links;
        }

        public function incrementCounter($uuid){
              
        $link =  $this->connection->select('links',"uuid='$uuid'");
        if ($link === false){
                echo 'Error connection to database';
        }

        $updatdata = [
                'counter'  => ++$link['counter']
        ];

        $update  = $this->connection->update('links',$updatdata,"uuid='$uuid'");

        var_dump($update);

        }


}



?>