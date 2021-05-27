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
    <nav class="sidebar">
      <?php include './php/partials/sidebar.php'; ?>
    </nav>

    <a class="gotop-btn" href="#">
      <?php include './php/partials/top_btn.php'; ?>
    </a>

    <header class="area"></header>

    <main class="info-screen area">
      <div class="about-section">
        <div class="inner-width">
          <h1>About Us</h1>
          <div class="border"></div>
          <div class="about-section-row">
            <div class="about-section-col">
              <div class="about">
                  <p class="text">
                    To meet Neighbor는 취업을 준비하는 취준생들을 위한 커뮤니티 플랫폼입니다. 
                    저희는 이 사이트를 통해 취준생 분들에게 정보공유, 스터디 구인, 소통의 장 마련 등 여러 기능을 제공하여 조금이나마 도움이 되고자 합니다.<br> 
                    <span class="dots"></span>
                    <span class="moreText">
                      특히 코로나로 인하여 많은 활동이 제약된 대학생분들에게 정보를 얻을 수 있도록 도움을 드리고자 하는 목적이 가장 크다고 할 수 있습니다.<br>
                      저희는 많은 학생분들이 이 사이트를 통해 지식들을 서로 공유하여 
                      많은 정보를 얻고, 거기에 더해 취업이라는 목표뿐만 아니라 자신의 가치를 찾아가실 수 있으면 좋겠다는 생각을 가지고 이 사이트를 만들게 되었습니다.
                    </span>
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
    </main>


    <footer></footer>
    <script src="js/more.js"></script>
    <footer class="area"></footer>
  </body>
</html>
