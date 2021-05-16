<?php
    include "./db_config.php";

    if (isset($_POST["login_btn"])) {
        $user_id = $_POST["user_id"];
        $user_pass = $_POST["user_pass"];
        $select_all = mysqli_query($connect, "SELECT * FROM users WHERE u_id = '$user_id' AND u_pass = '$user_pass'");
        $row = mysqli_fetch_array($select_all);
        if(isset($row)) {
            session_start();
            $_SESSION["userid"] = $row["u_id"];
            // $_SESSION["userpass"] = $row["u_pass"];
            $_SESSION["username"] = $row["u_nickname"];
            // $_SESSION["useremail"] = $row["u_email"];
            echo("
                <script>
                    location.href = './../../index.php';
                </script>
            ");
        } else {
            echo("
                <script>
                    history.go(-1);
                </script>
            ");
        }
    }
?>
