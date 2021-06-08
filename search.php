<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8" />
    <title>To meet Neighbor | 검색결과</title>
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

    <?php 
      include "php/modules/db_config.php";
      $get_date = $_GET['text'];
    ?>
    <header class="area">
      <div class="board-header">
        <h1>Board</h1>
        <form action="write.php" method="post">
          <input class="board__write-btn" type="submit" name="write" value="글쓰기" >
        </form>
      </div>
    </header>
    
    <main class="search-screen area">
    <div class="board">
      <div class="board__posts">
      <?php 
        include "php/modules/db_config.php";
        $get_data = $_GET['text'];
        
        $posts_sql = "SELECT * FROM posts WHERE p_title LIKE '%$get_data%' ORDER BY p_num DESC";
        $posts_select_all = mysqli_query($connect, $posts_sql);
        $posts_rows = mysqli_num_rows($posts_select_all);
        $count = 0;
    
        if ($posts_rows > 0) {
            while($posts = mysqli_fetch_assoc($posts_select_all)) {
                if($count > 10)
                    break;
                $post_num = $posts['p_num'];
                $title = $posts['p_title'];
                $content = $posts['p_content'];
                $image_url = $posts['p_image_url'];
                $date = $posts['p_create_date'];
                $new_date = date("y년 m월 d일", strtotime($date));
                $nickname = $posts['p_nickname'];
                // $comments_sql = "SELECT * FROM comments WHERE c_post_no=$post_num";
                // $comments_select = mysqli_query($connect, $comments_sql);
                // $comments_rows = mysqli_num_rows($comments_select);
                ?>
                <div onclick="location.href='post.php?num=<?=$post_num?>'" class="thumbnail-content">
                    <div class="thumbnail--img">
                    <?php
                    if($image_url == "") {
                        echo "<p>".$content."</p>";
                    } else {
                        ?>
                        <img src="uploads/<?=$image_url?>" >
                        <?php
                    }
                    $comments_sql = "SELECT * FROM comments WHERE c_post_no=$post_num ORDER BY c_num DESC";
                    $comments_select = mysqli_query($connect, $comments_sql);
                    $comments_rows = mysqli_num_rows($comments_select);
                    ?>
                    </div>
                    <span class="thumbnail--title"><a href=""><?= $title ?></a></span>
                    <div class="thumbnail__meta">
                        <span class="thumbnail__meta--date"><?= $new_date ?></span>
                        <span> • </span>
                        <span class="thumbnail__meta--comment"><?= $comments_rows ?>개의 댓글</span>
                    </div>
                    <div class="thumbnail--writer"><span>by </span><span><?= $nickname ?></span></div>
                </div>
                <?php
                $count++;
            }
        }

      ?>
      </div>
    </div>

    </main>

    <footer class="area"></footer>
    <script src="js/clock.js"></script>
  </body>
</html>