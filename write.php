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

      if(isset($_POST['submit_modify'])) {
        include "php/modules/update_post.php";
      } else if(isset($_POST['submit'])) {
        include "php/modules/upload_post.php";
      }
    ?>

    <header class="area"></header>

    <main class="mypage-screen area">
        <?php
        if(isset($_POST['modify_post'])) {
          include 'php/partials/post_modify.php';
        } else if(isset($_POST['write'])) {
          include 'php/partials/post_write.php';
        } else {
          ?>
            <script>
              alert("잘못된 접근입니다.")
              location.href = "index.php";
            </script>
          <?php
        }
        ?>
    </main>

    <footer class="area"></footer>
    <script src="js/clock.js"></script>
  </body>
</html>
