<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8" />
    <title>To meet Neighbor | Info</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/FortAwesome/Font-Awesome@5.14.0/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
  </head>
  <body>
    <header></header>

    <nav class="sidebar">
      <?php include './php/partials/sidebar.php'; ?>
    </nav>

    <a class="gotop-btn" href="#">
      <?php include './php/partials/top_btn.php'; ?>
    </a>

    <main class="info-screen area">
      <div class="about-section">
        <div class="inner-width">
          <h1>About Us</h1>
          <div class="border"></div>
          <div class="about-section-row">
            <div class="about-section-col">
              <div class="about">
                <p id="text-center">
                  To meet Neighbor는 취업을 준비하는 학생들을 위한 커뮤니티 플랫폼입니다. 우리는 이 사이트를 통해 학생들에게 정보공유,
                  스터디 구인, 소통의 장 마련 등 여러 기능을 제공하여 학생분들에게 조금이나마 도움이 되고자 합니다. 
                </p>
                <a class="more-btn" href="#">Read more</a>
              </div>
            </div>
           <div class="about-section-col">
              <div class="skills">
                <p id="develop-lang">
                  - 개발에 사용된 언어
                </p>
                <div class="skill">
                  <div class="title">PHP</div>
                  <div class="progress">
                    <div class="progress-bar p1"><span>55.1%</span></div>
                  </div>
                </div>

                <div class="skill">
                  <div class="title">CSS</div>
                  <div class="progress">
                    <div class="progress-bar p2"><span>41.2%</span></div>
                  </div>
                </div>

               <div class="skill">
                  <div class="title">JavaScript</div>
                  <div class="progress">
                    <div class="progress-bar p3"><span>3.6%</span></div>
                 </div>
                </div>

              </div>
            </div>
         </div>
       </div>
      </div>
      

      <!--
      <div class="info-title">
        <h1>About To meet Neighbor</h1>
      </div>
      <div class="about-us-body">
        <div class="about-goal">
          <div class="about-goal-img">
            <img class="white-group" src="images/icon-white-group.png">
          </div>
          <div>
            <div class="about-goal-text"></div>
          </div>
        </div>
      </div>
      !-->

    </main>

    <footer></footer>
  </body>
</html>
