<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8" />
    <title>To meet Neighbor | 메인화면</title>
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

    <main class="main-screen area">
      <div class="main__info">
        <?php
          if(isset($_SESSION['username'])) {
          ?>
            <span>안녕하세요 <?=$username?> 님</span>
            <span class="js-weather"> </span>
          <?php
          } else {
          ?>
            <p class="main__not_login">로그인 해주세요.</p>
          <?php
          }
        ?>
      </div>
      <div class="main__todolist">
        <?php
          if(isset($_SESSION['username'])) {
          ?>
            <div class="todolist">
              <form class="js-toDoForm showing">
                <input type="text" placeholder="오늘 할 일" />
              </form>
              <ul class="js-toDoList"></ul>
            </div>
          <?php
          } else {
          ?>
            <span class="main__not_login">로그인 해주세요.</span>
          <?php
          }
        ?>
      </div>
      <div class="main__board">
        <?php include "php/partials/main_thumbnail.php"; ?>
        <a class="main__board--more" href="board.php?type=all">More</a>
      </div>
      <div class="main__content">
        <span>추가 컨텐츠</span>
      </div>
    </main>

    <footer class="area"></footer>
    <script src="js/clock.js"></script>
    <?php
    if(isset($_SESSION['username'])) {
    ?>
      <script src="js/todo.js"></script>
      <script src="js/weather.js"></script>
    <?php
    }
    ?>
  </body>
</html>
