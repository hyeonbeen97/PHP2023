<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    if(isset($_GET['blogID'])){
        $blogID = $_GET['blogID'];
    } else {
        Header("location: blog.php");
    };


    $blogID = $_GET['blogID'];
    $memberID = $_SESSION['memberID'];

    $blogSql = "SELECT * FROM blog WHERE blogID = '$blogID'";
    $blogResult = $connect -> query($blogSql);
    $blogInfo = $blogResult -> fetch_array(MYSQLI_ASSOC);

    $commentSql = "SELECT *FROM blogComment WHERE blogID = '$blogID' AND commentDelete = '0' ORDER BY commentID DESC ";
    $commentResult = $connect -> query($commentSql);
    $commentInfo = $commentResult -> fetch_array(MYSQLI_ASSOC);

    // echo "<pre>";
    // var_dump($blogInfo);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- include -->
    <main id="main" class="container">
        <div class="blog__title" style="background-image:url(../assets/blog/<?= $blogInfo['blogImgFile'] ?>)">
            <span class="cate"><?= $blogInfo['blogCategory'] ?></span>
            <h2 class="title"><?= $blogInfo['blogTitle'] ?></h2>
            <div class="info">
                <span class="author"><?= $blogInfo['blogAuthor'] ?></span>
                <span class="date"><?= date('y-m-d', $blogInfo['blogRegTime']) ?></span>
                <div class="modify">
                    <a href="#">수정</a>
                    <a href="#">삭제</a>
                </div>
            </div>
        </div>
        <div class="blog__inner">
            <div class="left mt70">
                <div class="blog__contents">
                    <h3><?= $blogInfo['blogTitle'] ?></h3>
                    <p><?= $blogInfo['blogContents'] ?></p>
                </div>
            </div>
            <div class="right mt70">
                <div class="blog__aside">
                    <?php include "../include/blogTitle.php" ?>

                    <?php include "../include/blogCate.php" ?>

                    <?php include "../include/blogNew.php" ?>

                    <?php include "../include/blogPop.php" ?>

                    <?php include "../include/blogComment.php" ?>
                </div>
            </div>
        </div>
        <!-- blog__inner -->
        <div class="blog__article">
            <h3>관련글 보기</h3>
            <?php include "../include/blogArticle.php" ?>
            <!-- <div class="cards__inner col4 line0">
                <div class="card">
                    <figure class="card__img">
                        <source srcset="assets/img/blog03.jpg, assets/img/blog03@2x.jpg, assets/img/blog03@3x.jpg" />
                        <a href="#" class="more"><img src="assets/img/blog03.jpg" alt="카드이미지"></a>
                        <div class="card__title">
                            <h3>리액트의 추세</h3>
                            <p>React의 인기는 향후 몇 년 동안 계속 증가할 것으로 예상됩니다. React는 강력하고 유연한 라이브러리이며 다양한 웹사이트와 모바일 앱을 구축하는 데 사용할 수 있습니다.
                                 또한 React는 대규모 커뮤니티 지원을 받으므로 개발자가 문제를 해결하고 배우는 데 도움을 받을 수 있습니다.</p>
                        </div>
                    </figure>
                </div>
            </div> -->
        </div>
        <!-- blog__article -->
 
        <!-- blog__comment -->
        <div class="blog__comment">
            <h3>댓글쓰기</h3>
            <?php
                foreach($commentResult as $comment){ ?>
                <div class="comment__view" id="commentID<?=$comment['commentID']?>">
                <div class="avatar">
                    <img src="https://t1.daumcdn.net/tistory_admin/blog/admin/profile_default_06.png" alt="">
                </div>
                <div class="info">
                    <span class="nickname"><?=$comment['commentName']?></span>
                    <span class="date"><?=date('Y-m-d', $comment['regTime']) ?></span>
                    <p class="msg"><?=$comment['commentMsg']?></p>
                    <!-- 삭제 -->
                    <div class="comment__delete" style="display: none">
                        <label for="commentDeletePass" class="blind">비밀번호</label>
                        <input type="password" id="commentDeletePass" name="commentDeletePass" placeholder="비밀번호">
                        <button id="commentDeleteCancel">취소</button>
                        <button id="commentDeleteButton">삭제</button>
                    </div>
                    <!-- //삭제 -->
                    <!-- 수정 -->
                    <div class="comment__modify" style="display: none">
                        <label for="msg__modify" class="blind">수정 내용</label>
                        <textarea name="msg__modify" id="msg__modify" cols rows="4" placeholder="수정할 내용을 적어주세요!"></textarea>
                        <label for="commentModifyPass" class="blind">비밀번호</label>
                        <input type="password" id="commentModifyPass" name="commentModifyPass" placeholder="비밀번호">
                        <button id="commentModifyCancel">취소</button>
                        <button id="commentModifyButton">수정</button>
                    </div>
                    <!-- //수정 -->
                    <div class="del">
                        <a href="#" class="comment__del__del">삭제</a>
                        <a href="#" class="comment__del__mod">수정</a>
                    </div>
                </div>
            </div>

               <?php }?>
            
            
            <div class="comment__write">
                <form action="#">
                    <fieldset>
                        <legend class="blind">댓글쓰기</legend>
                        <label for="commentPass">비밀번호</label>
                        <input type="password" id="commentPass" name="commentPass" placeholder="비밀번호" required>
                        <label for="commentName">이름</label>
                        <input type="text" id="commentName" name="commentName" placeholder="이름" required>
                        <label for="commentWrite">댓글쓰기</label>
                        <textarea id="commentWrite" name="commentWrite" rows="4" placeholder="댓글을 써주세요!" maxlength="255" required></textarea>
                        <button type="button" id="commentWriteBtn" class="btnStyle3 mt10">댓글쓰기</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        let commentID = "";
        //댓글 삭제버튼
        $(".comment__del__del").click(function(e){
            e.preventDefault();

            $(this).parent().prev().prev().show();

            commentID = $(this).parent().parent().parent().attr("id");
        })

        //댓글 삭제 버튼  -> 취소 버튼
        $("#commentDeleteCancel").click(function(){
            $(".comment__delete").hide();
        })

        //댓글 삭제 버튼  -> 삭제 버튼
        $("#commentDeleteButton").click(function(){
            let number = commentID.replace(/[^0-9]/g,"")

            if($("#commentDeletePass").val() == ""){
                alert("비밀번호를 입력해주세요");
                $("#commentDeletePass").focus();
            } else {
                $.ajax({
                    url: "blogCommentDelete.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        "commentPass": $("#commentDeletePass").val(),
                        "commentID": number,
                    },
                    success: function(data){
                        console.log(data);
                        if(data.result == "bad"){
                            alert("비밀번호가 틀렸습니다.")
                        } else {
                            alert("삭제하시겠습니까?")
                        }
                        location.reload();
                    },
                    error: function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
            
        })

        
        // 댓글 쓰기 버튼
        $("#commentWriteBtn").click(function(){
            if($("#commentWrite").val() == ""){
                alert("댓글을 작성해주세요!");
                $("#commentWrite").focus();
            } else {
                $.ajax({
                    url: "blogCommentWrite.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        "blogID": <?=$blogID?>,
                        "memberID": <?=$memberID?>,
                        "name": $("#commentName").val(),
                        "pass": $("#commentPass").val(),
                        "msg": $("#commentWrite").val(),
                    },
                    success: function(data){
                        console.log(data);

                        location.reload();
                    },
                    
                    error: function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        });
    </script>
</body>
</html>