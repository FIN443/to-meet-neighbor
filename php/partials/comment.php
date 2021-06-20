<?php include "php/modules/db_img.php";?>
<div class="comment_section">
   <div class="comment_user_img">
   <?php
      if($user_img == "") {
      ?>
         <i class="fas fa-user u_img"></i>
      <?php
      } else {
      ?>
         <img class="u_img" src="<?php echo "uploads/"."$user_img"?>">
      <?php
      }
      ?>
   </div>
   <div class="comment_view"> 
      <div class="comment_user">
         <span class="comment_user_name"><?php echo $c_nickname ?></span>
         <span class="comment_date"><?php echo $c_new_date ?></span>
      </div>
   </div>
</div>
<div class="comment_content">
         <p><?=nl2br($c_content)?></p>
</div>  
<hr>

