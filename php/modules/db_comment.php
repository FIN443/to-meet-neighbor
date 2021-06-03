<?php
    include "php/modules/db_config.php";

    if(isset($_SESSION['username'])) {
        $p_num = $_GET['num'];
        $content = $_POST['text'];
        $nickname = $_SESSION['username'];
        $sql = "INSERT INTO `comments` (`c_content`, `c_nickname`, `c_post_no`) VALUES('$content', '$nickname', '$p_num')";
        $insert = mysqli_query($connect, $sql);
    } else {
        ?>
        <script>
            alert("로그인 후 이용해주세요.");
            history.go(-1);
        </script>
        <?php
    }
?>
<script>
    location.href = "post.php?num=<?=$p_num?>";
</script>