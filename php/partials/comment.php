<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="lib/jquery-3.6.0.js"></script> 
    <script src="js/reply.js"></script>
</head>
<body>


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

              </div>
            </div>
          </div>
      </div>
    </div>
</div>
    
</body>
</html>