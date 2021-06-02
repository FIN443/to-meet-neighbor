<div class="board">
    <div class="board__posts">
    <?php
        include "php/modules/db_config.php";
    
        $posts_sql = "SELECT * FROM posts ORDER BY p_num DESC";
        $posts_select_all = mysqli_query($connect, $posts_sql);
        $posts_rows = mysqli_num_rows($posts_select_all);
        $count = 0;
    
        if ($posts_rows > 0) {
            while($posts = mysqli_fetch_assoc($posts_select_all)) {
                if($count > 10)
                    break;
                $post_num = $posts['p_num'];
                $title = $posts['p_title'];
                $content = $posts['p_content'];
                $image_url = $posts['p_image_url'];
                $date = $posts['p_create_date'];
                $new_date = date("y년 m월 d일", strtotime($date));
                $nickname = $posts['p_nickname'];
                // $comments_sql = "SELECT * FROM comments WHERE c_post_no=$post_num";
                // $comments_select = mysqli_query($connect, $comments_sql);
                // $comments_rows = mysqli_num_rows($comments_select);
                ?>
                <div onclick="location.href='./post.php?num=<?=$post_num?>'" class="thumbnail-content">
                    <div class="thumbnail--img">
                    <?php
                    if($image_url == "") {
                            echo "<p>".$content."</p>";
                        } else {
                            ?>
                            <img src="uploads/<?=$image_url?>" >
                            <?php
                        }
                            ?>
                    </div>
                    <span class="thumbnail--title"><a href=""><?php echo $title; ?></a></span>
                    <div class="thumbnail__meta">
                        <span class="thumbnail__meta--date"><?php echo $new_date; ?></span>
                        <span> • </span>
                        <span class="thumbnail__meta--comment">14개의 댓글</span>
                    </div>
                    <div class="thumbnail--writer"><span>by </span><span><?php echo $nickname; ?></span></div>
                </div>
                <?php
                $count++;
            }
        }
    ?>
    </div>
</div>
