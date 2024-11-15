<?php 
use   Academy01\Semej\Semej;

use class\Link;

$link = new Link();

$show_link = $link->showLink();
 

?>
<div class="row">
<div class="col-12">
<h3>Links</h3>
<a href="new.php" class="m-3">
        <button class="btn btn-primary"> Create New Link</button> 
</a><br>
<?php  
Semej::show() ; 
 ?> 
    <table class="table table-hover table-stripped m-2">
       <thead>
       <tr>
        <th>Title</th>
        <th>Link</th>
        <th>View</th>
        <th>Operation</th>
        </tr>
       </thead>
       <tbody>
       <?php 
      foreach($show_link as $link){
         ?>
         <tr>
        <td><?php echo $link['title'] ?></td>
        <td><?php echo $link['uuid'] ?></td>
        <td><?php echo $link['counter'] ?></td>
        <td><?php echo 'edit'?></td>
        </tr>
         <?php
      }
       ?>
       </tbody>
    </table>
</div>

</div>