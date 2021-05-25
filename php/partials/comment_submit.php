<?php
    include './php/modules/db_config.php';

    if(isset($_POST['submit'])) {
        $comment = $_POST['text'];
        $user = $_SESSION['username'];
        echo $user." -> ".$comment."<br>";
        // $date = date() 현재 시간 받아올 예정
        // $u_num = $_SESSION['user_num'] 에서 댓글 등록자 넘버 받음 <- int로 바꿔야 함
        // $p_num = $_GET['post_num'] 에서 게시글 넘버 받음 <- int로 바꿔야 함
        // mysqli_query($connect, "INSERT INTO `comments` (`c_content`, `c_date`, `c_option`, `c_user_no`, `c_post_no`) VALUES ('$comment', '$date', '0', '$u_num', '$p_num')")
    }
?>