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
    <?php include './php/modules/db_join.php'; ?>

    <nav class="sidebar">
      <?php include './php/partials/sidebar.php'; ?>
    </nav>

    <a class="gotop-btn" href="#">
      <?php include './php/partials/top_btn.php'; ?>
    </a>
    
    <header class="join-header area">
    </header>

    <main class="join-screen area">
      <div class="join-container">
        <div class="join-header">
          <span>Create Account</span>
        </div>
        <form class="join-form" action="./join.php" method="post" >
          <div class="join-form__control">
            <label>아이디</label>
            <input class="join-form__userid join-input" type="text" name="user_id" placeholder="아이디">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            <?php
              if(isset($check_id)) {
                ?>
                  <!-- id 중복일 때 -->
                  <span class="join-result--text">이미 존재하는 아이디입니다.</span>
                <?php
              }
            ?>
          </div>
          <div class="join-form__control">
            <label>비밀번호</label>
            <input class="join-form__pass join-input" type="password" name="user_pass" placeholder="비밀번호">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
          </div>
          <div class="join-form__control">
            <label>비밀번호 확인</label>
            <input class="join-form__pass2 join-input" type="password" name="user_pass" placeholder="비밀번호 확인">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
          </div>
          <div class="join-form__control">
            <label>닉네임</label>
            <input class="join-form__name join-input" type="text" name="user_name" placeholder="사용자 별명">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            <?php
              if(isset($check_name)) {
                ?>
                  <!-- nickname 중복일 때 -->
                  <span class="join-result--text">이미 존재하는 닉네임입니다.</span>
                <?php
              }
            ?>
          </div>
          <div class="join-form__control">
            <label>이메일</label>
            <input class="join-form__email join-input" type="email" name="user_email" placeholder="example@abc.co.kr">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
          </div>
          <button class="join-btn" type="submit" name="join_btn" disabled>가입</button>
        </form>
      </div>
    </main>

    <footer class="area"></footer>
    <script src="js/clock.js"></script>
    <script src="./js/join.js"></script>
    <?php
      if(isset($check_id) || isset($check_name)) {
        ?>
        <script>
          const validResult = document.querySelectorAll(".join-result--text");
          document.addEventListener("keyup", function() {
            validResult[0].style.opacity = "0";
            validResult[1].style.opacity = "0";
          });
        </script>
      <?php
      }
    ?>
  </body>
</html>
