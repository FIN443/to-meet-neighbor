<a href="./" class="sidebar__title">
  <i></i>
  <div class="sidebar__title--span">
    <span>To meet</span>
    <span>Neighbor</span>
  </div>
</a>
<div class="sidebar__search-box">
  <form action="">
    <input
      class="sidebar__search-box__input"
      type="text"
      placeholder="검색어 입력"
    />
    <input
      class="sidebar__search-box__btn"
      type="submit"
      value="&#xf002;"
    />
  </form>
</div>
<div class="sidebar__nav-user">
  <!-- 세션 안됬을 때 -->
  <?php
    if(!isset($_SESSION['userid'])) {
  ?>
  <a href="./login.php" class="sidebar__nav-user--login">
    <i class="fas fa-sign-in-alt fa-lg"></i>
    <span>로그인</span>
  </a>
  <a href="./join.php" class="sidebar__nav-user--join">
    <i class="fas fa-door-open fa-lg"></i>
    <span>회원가입</span>
  </a>
  <?php
    }
    else {
  ?>
  <!-- 세션 됬을 때 -->
  <a href="#" class="sidebar__nav-user--login">
    <i class="fas fa-sign-in-alt fa-lg"></i>
    <span>로그아웃</span>
  </a>
  <?php
    }
  ?>
</div>
<div class="sidebar__nav">
  <div class="sidebar__nav--menu">
    <li class="sidebar__nav--menu__item" id="mypage">
      <a href="./mypage.php" class="sidebar__nav--menu__item--btn"
        ><i class="fas fa-user fa-lg"></i>마이페이지</a
      >
      <div class="sidebar__nav--menu__item__sub">
        <a href="#">내 정보</a>
        <a href="#">내 게시글</a>
        <a href="#">성적 관리</a>
      </div>
    </li>
    <li class="sidebar__nav--menu__item" id="community">
      <a href="./community.php" class="sidebar__nav--menu__item--btn"
        ><i class="fas fa-comments fa-lg"></i>커뮤니티</a
      >
      <div class="sidebar__nav--menu__item__sub">
        <a href="#">통합 게시판</a>
        <a href="#">자유 게시판</a>
        <a href="#">구인 게시판</a>
        <a href="#">정보 게시판</a>
        <a href="#">스터디 게시판</a>
      </div>
    </li>
    <li class="sidebar__nav--menu__item" id="jobs">
      <a href="./jobs.php" class="sidebar__nav--menu__item--btn"
        ><i class="fas fa-building fa-lg"></i>Jobs</a
      >
      <div class="sidebar__nav--menu__item__sub">
        <a href="#">일간 채용</a>
        <a href="#">공채 소식</a>
      </div>
    </li>
    <li class="sidebar__nav--menu__item" id="info">
      <a href="./info.php" class="sidebar__nav--menu__item--btn"
        ><i class="fas fa-info-circle fa-lg"></i>Info</a
      >
    </li>
  </div>
</div>