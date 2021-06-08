<?php 
    // SESSION에서 comments테이블의 c_nickname애트리뷰트와 일치하는 usernickname의 코멘트 수를 가져옴
    // mysqli_query함수를 사용하여 쿼리를 진행하고 그 결과를 mysqli_fetch_row를 통해 배열에 저장함
    $username = $_SESSION['username'];
    $result = mysqli_query($connect, "SELECT COUNT(*) FROM `comments` WHERE c_nickname='$username'");
    $row_result = mysqli_fetch_row($result);
    $comment_num = $row_result[0];

    $result2 = mysqli_query($connect, "SELECT COUNT(*) FROM `posts` WHERE p_nickname='$username'");
    $row_result2 = mysqli_fetch_row($result2);
    $post_num = $row_result2[0];


?>