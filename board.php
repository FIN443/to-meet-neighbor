<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8" />
    <title>To meet Neighbor | 게시판</title>
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

    <main class="board-screen area">
      <?php 
        if(isset($_SESSION['username'])) {
          ?>
          <form action="write.php" >
            <input type="submit" value="write" >
          </form>
          <?php
        }

        if(isset($_GET['type'])) {
          if($_GET['type'] == "all" || $_GET['type'] == "free" || $_GET['type'] == "jobs" || $_GET['type'] == "info" || $_GET['type'] == "study") {
            include './php/partials/board_thumbnail.php';
          } else {
            echo "Not exist";
          }
        } else {
          include './php/partials/board_thumbnail.php';
        }
      ?>
    </main>

    <footer class="area"></footer>
  </body>
</html>
