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

  <!-- fakeDB -->
  <?php
    include './php/modules/fake_db.php';
  ?>

  <body>
    <!-- 세션 등록 -->
    <?php
      // session_start();
      // $_SESSION['userid'] = "test";
    ?>
    <!-- 세션 해제 -->
    <?php
      // session_start();
      // unset($_SESSION['userid']);
    ?>

    <header></header>

    <nav class="sidebar">
      <?php include './php/partials/sidebar.php'; ?>
    </nav>

    <a class="gotop-btn" href="#">
      <?php include './php/partials/top_btn.php'; ?>
    </a>

    <main class="main-screen area">
      <?php
        echo $db[0]['name']."<br>";
        echo $db[1]['name'];
      ?>
    </main>

    <footer></footer>
  </body>
</html>
