<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    if(isset($_GET['category'])){
        $category = $_GET['category'];
    } else {
        Header("location: blog.php");
    };

    $categorySql = "SELECT * FROM blog WHERE blogDelete = 0 AND blogCategory = '$category' ORDER BY blogID DESC";
    $categoryResult = $connect -> query($categorySql);
    $categoryInfo = $categoryResult -> fetch_array(MYSQLI_ASSOC);
    $categoryCount = $categoryResult -> num_rows;

    // echo "<pre>";
    // var_dump($categoryInfo);
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
        <div class="blog__search">
            <?php
                if ($categoryCount == 0) {?>
                    <h2><?= $category ?></h2>
                    <p>카테고리와 관련된 게시글이 없습니다.</p>
            <?php
                } else {
            ?>
                    <h2><?= $categoryInfo['blogCategory'] ?></h2>
                    <p><?= $categoryInfo['blogCategory'] ?>와 관련된 글이 <?= $categoryCount ?>개 있습니다.</p>
            <?php
                }
            ?>
            <!-- <div class="search">
                <form action="#" name="#" method="POST">
                    <legend class="blind">블로그 내 검색</legend>
                    <input type="search" class="inputStyle2" name="searchKeyword" aria-label="검색" placeholder="검색어를 입력하세요.">
                    <button type="submit" class="btnStyle4 ml20">검색</button>
                    <?php if(isset($_SESSION['memberID'])){ ?>
                    <a href="blogWrite.php" class="btnStyle4 white">글쓰기</a>
                    <?php }  ?>
                </form>
            </div> -->
        </div>
        <div class="blog__inner">
            <div class="left mt70">왼쪽
                <div class="blog__wrap">
                    <div class="cards__inner col3 row line3">
<?php
    foreach($categoryResult as $blog){
?>
                        <div class="card">
                            <figure class="card__img">
                                <a href="blogView.php?blogID=<?=$blog['blogID']?>">
                                    <img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>">
                                </a>
                            </figure>
                            <div class="card__title">
                                <h3>
                                    <a href="blogView.php?blogID=<?=$blog['blogID']?>">
                                        <?=$blog['blogTitle']?></h3>
                                    </a>
                                <p>
                                    <a href="blogView.php?blogID=<?=$blog['blogID']?>">
                                        <?=$blog['blogContents']?></p>
                                    </a>
                            </div>
                        </div>
<?php } ?>
                    </div>
                </div>
            </div>
            <div class="right mt70">
                <div class="blog__aside">
                    <?php include "../include/blogTitle.php" ?>

                    <?php include "../include/blogCate.php" ?>

                    <?php include "../include/blogLatest.php" ?>

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
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

</body>
</html>