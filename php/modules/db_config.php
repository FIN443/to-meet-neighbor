<?php
    $db_server = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db = 'to_meet_neighbor';

    $connect = mysqli_connect($db_server, $db_user, $db_pass) or die("error");

    $select_db = mysqli_select_db($connect, $db) or die("error")
?>