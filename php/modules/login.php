<?php
    include "./fake_db.php";
    $id = $_POST["id"];
    $password = $_POST["password"];

    foreach($db as $user) {
        if($id == $user['id'] && $password == $user['password']) {
            session_start();
            $_SESSION["userid"] = $user['id'];
            $_SESSION["username"] = $user['name'];
            echo("
                <script>
                    location.href = './../../index.php';
                </script>
            ");
            break;
        }
    }

    echo("
            <script>
                history.go(-1);
            </script>
        ");
?>
