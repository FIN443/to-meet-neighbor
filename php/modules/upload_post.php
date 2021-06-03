<?php
    include 'php/modules/db_config.php';
    $title = $_POST['title'];
    $content = $_POST['content'];
    $nickname = $_SESSION['username'];
    if(is_uploaded_file($_FILES['image']['tmp_name']) && $_FILES['image']['error'] === 0) {
        // 이미지 업로드 했을 때
        $img_name = $_FILES['image']['name'];
        $img_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $error = $_FILES['image']['error'];
        if($img_size > 5000000) {
            ?>
            <script>
                alert("파일 용량이 너무 큽니다.");
                history.go(-1);
            </script>
            <?php
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lower = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");
            
            if(in_array($img_ex_lower, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).".".$img_ex_lower;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                // SQL Database
                $sql = "INSERT INTO `posts` (`p_title`, `p_content`, `p_image_url`, `p_nickname`) VALUES('$title', '$content', '$new_img_name', '$nickname')";
                mysqli_query($connect, $sql);
                ?>
                <script>
                    alert("게시글이 등록되었습니다.");
                    location.href = "board.php";
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
        $sql = "INSERT INTO `posts` (`p_title`, `p_content`, `p_image_url`, `p_nickname`) VALUES('$title', '$content', '', '$nickname')";
        mysqli_query($connect, $sql);
        ?>
        <script>
            alert("게시글이 등록되었습니다.");
            location.href = "board.php";
        </script>
        <?php
    }
?>