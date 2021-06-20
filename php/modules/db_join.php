<?php
    include './php/modules/db_config.php';

    if(isset($_POST["join_btn"])) {
        $user_id = $_POST["user_id"];
        $user_pass = $_POST["user_pass"];
        $user_name = $_POST["user_name"];
        $user_email = $_POST["user_email"];
        $check_id = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM users WHERE u_id = '$user_id'"));
        $check_name = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM users WHERE u_nickname = '$user_name'"));

        if(!isset($check_id) && !isset($check_name)) {
            $options = [
                'cost' => 10,
            ];
            $hash = password_hash($user_pass, PASSWORD_BCRYPT, $options);
            $insert = mysqli_query($connect, "INSERT INTO `users` (`u_id`, `u_pass`, `u_nickname`, `u_email`, `u_image_url`) VALUES ('$user_id', '$hash', '$user_name', '$user_email', '')");
            $select_all = mysqli_query($connect, "SELECT * FROM users WHERE u_id = '$user_id'");
            $row = mysqli_fetch_array($select_all);
            session_start();
            $_SESSION["usernum"] = $row["u_num"];
            $_SESSION["userid"] = $row["u_id"];
            $_SESSION["username"] = $row["u_nickname"];
            $_SESSION["useremail"] = $row["u_email"];
            $u_date = $row["u_create_date"];
            $_SESSION["userdate"] = date("Y년 m월 d일", strtotime($u_date));
            $_SESSION["userimg"] = $row["u_image_url"];
            ?>
            <script>
                alert("정상가입되었습니다. 환영합니다 '<?= $user_name ?>'님");
                location.href = "./";
            </script>
            <?php
        }
    }
?>