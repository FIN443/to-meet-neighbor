<?php
    session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);

    echo("
        <script>
            history.go(-1);
        </script>
    ")
?>