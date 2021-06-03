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

    <?php
    if(isset($_POST['submit'])) {
      include "php/modules/db_comment.php";
    }
    ?>
    
    <header class="area"></header>

    <main class="post-screen area">
      <div class="screen_whole">
      <?php
        include './php/modules/db_post.php';
        include './php/partials/comment_write.php';
        include './php/partials/comment_list.php';
      ?>
      </div>
    </main>
        
    <footer class="area"></footer>
    <script src="js/clock.js"></script>
  </body>
</html>
