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
            $insert = mysqli_query($connect, "INSERT INTO `users` (`u_id`, `u_pass`, `u_nickname`, `u_email`, `u_role`) VALUES ('$user_id', '$user_pass', '$user_name', '$user_email', '0')");
            session_start();
            $_SESSION["userid"] = $user_id;
            // $_SESSION["userpass"] = $user_pass;
            $_SESSION["username"] = $user_name;
            // $_SESSION["useremail"] = $user_email;
            ?>
            <script>
                alert("정상가입되었습니다. 환영합니다 '<?= $user_name ?>'님");
                location.href = "./";
            </script>
            <?php
        }
    }
?>