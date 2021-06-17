<?php
    // fakeDB
    include 'php/modules/db_config.php';
    include 'php/modules/db_img.php';

    $p_num = $_GET['num'];
    $comments_sql = "SELECT * FROM comments WHERE c_post_no=$p_num ORDER BY c_num DESC";
    $comments_select = mysqli_query($connect, $comments_sql);
    $comments_rows = mysqli_num_rows($comments_select);
    $count = 0;

    ?>
    <span class="comment-list--title"><?= $comments_rows ?> Comments</span>
    <div class="comment-line"></div>
    <?php

    if ($comments_rows > 0) {
        while($comments = mysqli_fetch_assoc($comments_select)) {
            if($count > 10)
                break;
            $c_num = $comments['c_num'];
            $c_content = $comments['c_content'];
            $c_nickname = $comments['c_nickname'];
            $c_date = $comments['c_create_date'];
            $c_new_date = date("m월 d일", strtotime($c_date));
            include 'php/partials/comment.php';
        }
    }
?>

     
