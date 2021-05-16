<?php
    include './db_config.php';

    if(isset($_POST["join_btn"])) {
        $user_id = $_POST["user_id"];
        $user_pass = $_POST["user_pass"];
        $user_name = $_POST["user_name"];
        $user_email = $_POST["user_email"];
        if(empty($user_id) || empty($user_pass) || empty($user_name) || empty($user_email)) {
            echo("
            <script>
                history.go(-1);
            </script>
            ");
        } else {
            $insert = mysqli_query($connect, "INSERT INTO `users` (`u_id`, `u_pass`, `u_nickname`, `u_email`, `u_role`) VALUES ('$user_id', '$user_pass', '$user_name', '$user_email', '0')");
            ?>
            <h1>가입되었습니다.</h1>
            <a href="./../../index.php">돌아가기</a>
            <?php
        }
    }
?>