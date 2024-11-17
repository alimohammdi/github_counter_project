 <?php 
require_once 'autoloader.php';

use class\Link;


if(!isset($_GET['uuid']) || empty($_GET['uuid'])){
        header('HTTP/1.0 404 not found!');
        echo '404 not found';
        die();
}

$uuid = $_GET['uuid'];
$link  = new Link();
$view_incriment = $link->incrementCounter($uuid);

if ($view_incriment === false){
        header('HTTP/1.0 404 not found!');
        echo '404 not found';
        die();
}

$font_path = '';
$font_size = '';
$width = 200;
$height = 100;
$background_color = [1,1,1];
$text_collor = [0,125,0];





?>