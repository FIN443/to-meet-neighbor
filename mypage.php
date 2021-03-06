<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8" />
    <title>To meet Neighbor | 마이페이지</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/FortAwesome/Font-Awesome@5.14.0/css/all.min.css"
    />
  </head>
  <body>
    <nav class="sidebar">
      <?php include './php/partials/sidebar.php'; ?>
    </nav>

    <a class="gotop-btn" href="#">
      <?php include './php/partials/top_btn.php'; ?>
    </a>

    <header class="area"></header>

    <main class="mypage-screen area">
    <?php
    if(!isset($_SESSION['userid'])) {
    ?>
    <script>
      alert("로그인 해주세요.");
      location.href = "login.php";
    </script>
    <?php
    }
    include 'php/modules/db_config.php';
    
    if (isset($_SESSION['userid'])) {
    ?>
    <div class="mypage_whole_section">
      <div class="mypage_section">
        <div class="section_top">
          <div class="user_img">
            <?php
            if(isset($_POST['submit'])){
              include 'php/partials/mypage2.php';
            }
            $user_id = $_SESSION['userid'];
            $data_img = mysqli_query($connect, "SELECT u_image_url FROM users WHERE u_id = '$user_id' ");
            $img_arr = mysqli_fetch_row($data_img);
            $user_img = $img_arr[0];
            ?>
            <form class="img_form" id="test" method="post" action="" enctype="multipart/form-data">
              <label for="image">
                <div class="mypage__info--img">
                <img alt="프로필 사진 바꾸기" style='cursor:pointer' src="<?php echo "uploads/"."$user_img"?>">
                </div>
              </label>
              <input class="profile_img" type="file"  id="image" name="my_image">
            </form>
            <button class="img_submit" type="submit" name="submit" form="test">Upload</button>
          </div>
          <div class="user_summary_info">
            <div class="user_id">
              <span class="id"><?php echo $_SESSION['userid'] ?></span>
            </div>
            <div class="user_subtitle">
              <span class="sub_title"><?php echo $_SESSION['username'] ?></span>
            </div>
          </div>
        </div>
        <?php 
          include 'php/modules/db_load_mypage.php'; 
        ?>
        <div class="user_info">
          <div class="user_email">
          <span class="email"><?php echo "e-mail : ".$_SESSION['useremail'] ?></span>
          </div>
          <div class="user_join">
          <span class="join_date"><?php echo "생성 날짜 : ".$_SESSION['userdate'] ?></span>
          </div>
          <div class="user_post_num">
          <span class="post_num"><?php echo "게시글 수 : ".$post_num ?></span>
          </div>
          <div class="user_comment_num">
          <span class="comments_num"><?php echo "댓글 수 : ".$comment_num ?></span>
          </div>
        </div>
        <div class="user_post">
        
        </div>
      </div>
    </div>
      
    <?php } ?>

    </main>

    <footer class="area"></footer>
    <script src="js/clock.js"></script>
  </body>
</html>