<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8" />
    <title>To meet Neighbor | 로그인</title>
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

    <main class="login-screen area">
      <form action="#" class="login-form">
        <h1>로그인</h1>
        <div class="login-form__text-box">
          <input type="text" required>
          <div class="login-form__text-box--placeholder">아이디</div>
        </div>

        <div class="login-form__text-box">
          <input type="password" required>
          <div class="login-form__text-box--placeholder">비밀번호</div>
          <div class="login-form__text-box--show-password fas fa-eye-slash"></div>
        </div>

        <div class="login-form__checkbox save-pass">
          <input type="checkbox">
          <div class="fas fa-check"></div>
          비밀번호 저장
        </div>

        <div class="login-form__checkbox keep-login">
          <input type="checkbox">
          <div class="fas fa-check"></div>
          로그인 상태 유지
        </div>

        <div class="login-form__div-btn"><button class="login-form__btn fas fa-arrow-right" disabled></button></div>
        
        <br>
        <a href="#">계정 찾기</a>
        <a href="#">계정 생성</a>
      </form>
    </main>

    <footer></footer>

    <script src="js/login.js"></script>
  </body>
</html>
