<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8" />
    <title>To meet Neighbor | 회원가입</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/FortAwesome/Font-Awesome@5.14.0/css/all.min.css"
    />
  </head>
  <body>
    <header></header>

    <nav class="sidebar">
      <?php include './php/partials/sidebar.php'; ?>
    </nav>

    <a class="gotop-btn" href="#">
      <?php include './php/partials/top_btn.php'; ?>
    </a>

    <main class="join-screen area">
      <form action="./php/modules/db_join.php" method="post">
        <label>아이디</label>
        <input type="text" name="user_id" placeholder="아이디" minlength="6" required><br>
        <label>비밀번호</label>
        <input type="password" name="user_pass" placeholder="비밀번호" minlength="8" required><br>
        <label>닉네임</label>
        <input type="text" name="user_name" placeholder="닉네임" minlength="4" required><br>
        <label>이메일</label>
        <input type="email" name="user_email" placeholder="이메일" required><br>
        <input type="submit" name="join_btn" value="가입"><br>
      </form>
    </main>

    <footer></footer>
  </body>
</html>
