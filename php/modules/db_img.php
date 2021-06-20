<?php
     $data_img = mysqli_query($connect, "SELECT u_image_url FROM users WHERE u_nickname = '$c_nickname' ");
     $img_arr = mysqli_fetch_row($data_img);
     $user_img = $img_arr[0];
?>