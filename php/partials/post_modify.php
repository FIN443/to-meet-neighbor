<?php
    include "php/modules/db_config.php";

    if(isset($_GET["num"])) {
        $p_num = $_GET["num"];

        $select_sql = "SELECT * FROM posts WHERE p_num=$p_num";
        $result = mysqli_query($connect, $select_sql);
        $row = mysqli_fetch_array($result);
        if($_SESSION['username'] == $row['p_nickname']) {
            ?>
                <div class="write-content">
                    <form class="write__form" action="" method="post" enctype="multipart/form-data">
                        <input class="write__form--title" type="text" value="<?=$row['p_title']?>" name="title" placeholder="제목을 입력하세요" required>
                        <div class="write-line"></div>
                        <div class="write__form--filebox">
                            <label for="file">이미지 업로드</label>
                            <input type="file" id="file" name="image" accept=".png, .jpeg, .jpg">
                            <div class="filebox-text">
                                <span>파일 이름</span>
                            </div>
                        </div>
                        <textarea class="write__form--content" name="content" placeholder="내용을 입력해주세요." required><?=$row['p_content']?></textarea>
                        <div class="write__form--btn">
                            <button class="write__form--exit">← 나가기</button>
                            <input class="write__form--submit" type="submit" name="submit_modify" value="등록 ✔">
                        </div>
                        
                    </form>
                    <script src="js/file_upload.js"></script>
                </div>
            <?php
        } else {
            ?>
            <script>
                alert("잘못된 접근입니다.");
                location.href = "index.php";
            </script>
            <?php
        }
    }
?>
