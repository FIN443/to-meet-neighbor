<div class="post_view">
    <h1 class="post_view__title"><?=$p_title?></h1>
    <div class="post_view__info">
        <span class="post_view__name"><?=$p_nickname?></span>
        <span> • </span>
        <span class="post_view__date"><?=$p_new_date?></span>
    </div>
    <div class="post_view__content">
        <?php
        if($p_image_url == "") {
            echo "No image";
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
