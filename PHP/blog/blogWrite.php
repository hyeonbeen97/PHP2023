<?php
    include "../connect/connect.php";
    include "../connect/session.php";

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그</title>
    <link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

    <style>
        :not(.auto-height)>.toastui-editor-defaultUI>.toastui-editor-main {
            background-color: #ffffff;
        }
    </style>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    
    <?php include "../include/skip.php" ?>
    <!-- skip -->


    <?php include "../include/header.php" ?>
    <!-- header -->
    <main id="main" class="container">
        <div class="blog__top bmStyle mt70">
            <h2>개발자 블로그 입니다.</h2>
            <p>개발자 관련 게시판 입니다.</p>
        </div>
        <div class="blog__inner">
            <div class="blog__write">
                <form action="blogWriteSave.php" name="blogWriteSave" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="blind">게시글 작성하기</legend>
                        <div>
                            <label for="blogCategory">카테고리</label>
                            <select name="blogCategory" id="blogCategory">
                                <option value="">a</option>
                                <option value="">b</option>
                                <option value="">c</option>
                                <option value="">d</option>
                            </select>
                        </div>
                        <div>
                            <label for="blogTitle">제목</label>
                            <input type="text" name="blogTitle" id="blogTitle" class="inputStyle" require>
                        </div>
                        <div>
                            <label for="blogContents">내용</label>
                            <!-- <div id="editor"></div> -->
                        <textarea name="blogContents" id="blogContents" rows="20" class="inputStyle"></textarea>

                        </div>
                        <div>
                            <label for="blogImgFile">파일</label>
                            <input type="file" name="blogImgFile" id="blogImgFile" accept=".jpg, .jpeg, .png, .gif" placeholder="이미지용량은 1MG를 넘길수 없습니다.">
                        </div>
                        <button type="submit" class="btnstyle3">저장하기</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- blog__inner -->
    </main>
    <!-- //main -->



    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
    <script>
        const Editor = toastui.Editor;
 
        const editor = new Editor({
            el: document.querySelector('#editor'),
            height: '1000px',
            initialEditType: 'markdown',
            previewStyle: 'vertical'
        });
    </script>
</body>
</html>