<?php
    include "./php/modules/db_config.php";

    if (isset($_POST["login_btn"])) {
        $user_id = $_POST["user_id"];
        $user_pass = $_POST["user_pass"];
        
        $select_all = mysqli_query($connect, "SELECT * FROM users WHERE u_id = '$user_id'");
        $row = mysqli_fetch_array($select_all);
        if(isset($row)) {
            if (password_verify($user_pass, $row["u_pass"])) {
                session_start();
                $_SESSION["userid"] = $row["u_id"];
                $_SESSION["username"] = $row["u_nickname"];
                $_SESSION["useremail"] = $row["u_email"];
                ?>
                    <script>
                        history.go(-2);
                    </script>
                <?php
            } else {
            ?>
                <script>
                    const something = document.querySelector(".login-screen__alert");
                    something.style.opacity = "1";
                </script>
            <?php
            }
        } else {
        ?>
            <script>
                const something = document.querySelector(".login-screen__alert");
                something.style.opacity = "1";
            </script>
        <?php
        }
    }
?>
