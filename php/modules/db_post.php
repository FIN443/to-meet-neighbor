<?php
    include "php/modules/db_config.php";
    
    $p_num = $_GET['num'];

    if(isset($_POST['del_post'])) {
        $del_sql = "DELETE FROM posts WHERE p_num=$p_num";
        $result = mysqli_query($connect, $del_sql);

        ?>
        <script>
            alert("게시글을 삭제하였습니다.");
            history.go(-2);
        </script>
        <?php
    } else {
        $post_sql = "SELECT * FROM posts WHERE p_num=$p_num";
        $post_select = mysqli_query($connect, $post_sql);
        $post_array = mysqli_fetch_array($post_select);
        if(isset($post_array)) {
            $p_title = $post_array["p_title"];
            $p_nickname = $post_array["p_nickname"];
            $p_content = $post_array["p_content"];
            $p_image_url = $post_array["p_image_url"];
            $p_create_date = $post_array["p_create_date"];
            $p_new_date = date("Y년 m월 d일", strtotime($p_create_date));
            include "php/partials/post_view.php";
        } else {
            ?>
            <script>
                alert("불러오기 실패");
                history.go(-2);
            </script>
            <?php
        }
    }
?>