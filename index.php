<?php

use Class\Database;
use Class\testClass;

require_once 'autoloader.php';

 
$dbs = new Database();

$data = [
        'name'  => 'ali',
        'email'  => 'alim.009@gmail.com',
        'password' => md5('cslsdv#45274')

];


 $result =   $dbs->insert('users',$data); 

var_dump($result);










?>