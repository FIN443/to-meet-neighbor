<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="lib/jquery-3.6.0.js"></script> 
    <script src="js/reply.js"></script>
</head>
<body>
<?php include './php/partials/comment_list.php'; ?> 
<div id="root">
    <div class="whole_section">
      <div class="post header_section">
      
      </div>
      <div class="post main_section">

      </div>
      <div class="post comment_section">
          <div class="comment_area">
            <form class="comment_box" action="" method="POST">
              <input class="comment_text" type="text" placeholder="댓글을 입력해주세요." name="text" minlength="2" required><br>
              <div class="btn_wrapper">
              <input class="comment_btn" type="submit" value="댓글 작성" name="submit">
              </div>
            </form>
            <div class="comment_list_top">
            <div class="comment_list">
                <div class="user_area">
                    <div class="id_section">
                        <div class="user_profile">
                            <!--a href -> 유저 이미지 업로드시 사용 -->
                            <div class="comment_info">
                                <div class="user_name"><?php echo $item['user']; ?></div>
                                <div class="date"><!-- date 업데이트시 사용 --></div>
                            </div>
                        </div>
                    </div>
                    <div class="content_section_1st">
                        <div class="content_section_2nd">
                            <div class="content_section_3rd">
                                <div class="content_section_4th">
                                    <?php echo $item['content']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          </div>
      </div>
    </div>
</div>
    
</body>
</html>