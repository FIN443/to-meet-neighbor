<?php
    // fakeDB
    include './php/modules/fake_db.php';

    foreach($comments as $item) {
        echo $item['user']." -> ".$item['content']."<br>";
        // $item 사용해서 HTML로 만들어주세요.
        // db는 php/modules/fake_db.php 사용해주세요.
    }

    // $comments = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM comments WHERE c_post_no = '$p_num'")) 사용 예정
?>