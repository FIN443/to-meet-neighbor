<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php 
    include 'php/modules/db_config.php';
    $usernum = $_SESSION['usernum'];

    if(isset($_POST['submit']) && isset($_FILES['my_image'])) {
        
        echo "<pre>";
        print_r($_FILES['my_image']);
        echo "</pre>";

        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
        $error = $_FILES['my_image']['error'];

        if($img_size > 5000000) {
            ?>
            <script>
                alert("파일 용량이 너무 큽니다.");
                history.go(-1);
            </script>
            <?php
        }   else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lower = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");
            
            if(in_array($img_ex_lower, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).".".$img_ex_lower;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                // SQL Database
                $sql = "UPDATE `users` SET `u_image_url` = '$new_img_name' WHERE `u_num` = '$usernum'";
                mysqli_query($connect, $sql);
                ?>
                <script>
                    alert("이미지가 등록되었습니다.");
                    location.href = "mypage.php"; 
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("jpg, jpeg, png 파일만 가능합니다.");
                    history.go(-1);
                </script>
                <?php
            }
        }
    } else {
        // 이미지 업로드 안했을 때
        $sql =  "UPDATE `users` SET `u_image_url` = '' WHERE `u_num` = '$usernum'";
        mysqli_query($connect, $sql);
        ?>
        <script>
            alert("이미지가 제거되었습니다.");
            location.href = "mypage.php";
        </script>
        <?php
    }
?>
</body>
</html>