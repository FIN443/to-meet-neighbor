<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8" />
    <title>To meet Neighbor | 게시글</title>
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

    <main class="post-screen area">
      <!-- 게시글 댓글 나열 -->
      <?php include './php/partials/comment_list.php'; ?>
      <!-- 댓글 등록했을 때 -->
      <?php include './php/partials/comment_submit.php'; ?>

      <!-- 로그인 됬을 때 -->
      <?php
        if(isset($_SESSION['userid'])) {
      ?>
        <form action="" method="POST">
          <input type="text" placeholder="댓글을 입력해주세요." name="text" minlength="2" required>
          <input type="submit" value="등록" name="submit">
        </form>
      <?php
        }
        else {
      ?>
        <!-- 로그인 안됬을 때 -->
        <span>로그인 해주세요.</span>
      <?php
        }
      ?>
    </main>

    <footer class="area"></footer>
  </body>
</html>
