<?php
    session_start();

    if(isset($_SESSION["userid"])) {
        $userid = $_SESSION["userid"];
    }

    if(isset($_SESSION["username"])) {
        $username = $_SESSION["username"];
    }
?>