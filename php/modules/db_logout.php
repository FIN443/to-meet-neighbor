<?php
    session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);
    unset($_SESSION["useremail"]);
    unset($_SESSION["userdate"]);
    unset($_SESSION["userdimg"]);
    unset($_SESSION["usernum"]);
    echo("
        <script>
            history.go(-1);
        </script>
    ")
?>  