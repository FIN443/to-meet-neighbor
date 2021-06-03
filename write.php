<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8" />
    <title>To meet Neighbor | 글쓰기</title>
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

    <?php
      if(!isset($_SESSION['userid'])) {
      ?>
        <script>
          alert("로그인 후 이용해주세요.")
          location.href = "login.php";
        </script>
      <?php
      }

      if(isset($_POST['submit'])) {
        include "php/modules/upload_post.php";
      }
    ?>

    <header class="area"></header>

    <main class="mypage-screen area">
        <?php include 'php/partials/post_write.php' ?>
    </main>

    <footer class="area"></footer>
    <script src="js/clock.js"></script>
  </body>
</html>
