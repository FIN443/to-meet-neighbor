<div class="post_view">
    <div class="post_view__title">
        <h1 ><?=$p_title?></h1>
        <?php
        if(isset($_SESSION['username']) && $_SESSION['username'] == $p_nickname) {
        ?>
            <div class="post_view__btns">
                <form action="write.php?num=<?=$p_num?>" method="post">
                    <input class="post_view__modifybtn" type="submit" name="modify_post" value="수정">
                </form>
                <form action="" method="post">
                    <input class="post_view__delbtn" type="submit" name="del_post" value="삭제">
                </form>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="post_view__info">
        <span class="post_view__name"><?=$p_nickname?></span>
        <span> • </span>
        <span class="post_view__date"><?=$p_new_date?></span>
    </div>
    <div class="post_view__content">
        <?php
        if($p_image_url == "") {
            // echo "No image";
        } else {
        ?>
            <img class="post_view__img" src="uploads/<?=$p_image_url?>" >
        <?php
        }
        ?>
        <p class="post_view__text"><?=nl2br($p_content)?></p>
    </div>
    <hr>
</div>
