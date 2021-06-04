<div class="write-content">
    <form class="write__form" action="" method="post" enctype="multipart/form-data">
        <input class="write__form--title" type="text" name="title" placeholder="제목을 입력하세요" required>
        <div class="write-line"></div>
        <div class="write__form--filebox">
            <label for="file">이미지 업로드</label>
            <input type="file" id="file" name="image" accept=".png, .jpeg, .jpg">
            <div class="filebox-text">
                <span>파일 이름</span>
            </div>
        </div>
        <textarea class="write__form--content" name="content" placeholder="내용을 입력해주세요." required></textarea>
        <div class="write__form--btn">
            <button class="write__form--exit" name="exit">← 나가기</button>
            <input class="write__form--submit" type="submit" name="submit" value="등록 ✔">
        </div>
        
    </form>
    <script src="js/file_upload.js"></script>
</div>
