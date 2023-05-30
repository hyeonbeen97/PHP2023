<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
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
            <h2>초보개발자의 블로그 입니다.</h2>
            <p>설명이 들어가는 부분입니다.</p>
            <div class="search">
                <form action="#" name="#" method="POST">
                    <legend class="blind">블로그 내 검색</legend>
                    <input type="search" class="inputStyle2" name="searchKeyword" aria-label="검색" placeholder="검색어를 입력하세요.">
                    <button type="submit" class="btnStyle4 ml20">검색</button>
                    <?php if(isset($_SESSION['memberID'])){ ?>
                    <a href="blogWrite.php" class="btnStyle4 white">글쓰기</a>
                    <?php }  ?>
                </form>
            </div>
        </div>
        <div class="blog__inner">
            <div class="left">
                <div class="blog__wrap">
                    <h2>All Post</h2>
                    <div class="cards__inner col3 line2">
                        <!-- <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog02.jpg, ../assets/img/blog02@2x.jpg, ../assets/img/blog02@3x.jpg" />
                                <img src="../assets/img/blog02.jpg" alt="카드이미지">
                                <div class="card__title">
                                    <h3>자바스크립트 잘 익히는 방법</h3>
                                    <p>JavaScript의 기본부터 시작하십시오. JavaScript를 잘 이해하려면 먼저 기본을 배우는 것이 중요합니다. 문법, 변수, 함수와 같은 것들을 배웁니다.</p>
                                </div>
                                <div class="card__info">
                                    <span class="author">Hooong</span>
                                    <span class="date">2023.05.11</span>
    
                                </div>
                            </figure>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03.jpg, ../assets/img/blog03@2x.jpg, ../assets/img/blog03@3x.jpg" />
                                <img src="../assets/img/blog03.jpg" alt="카드이미지">
                                <div class="card__title">
                                    <h3>리액트의 추세 알려줘</h3>
                                    <p>React의 인기는 향후 몇 년 동안 계속 증가할 것으로 예상됩니다. React는 강력하고 유연한 라이브러리이며 다양한 웹사이트와 모바일 앱을 구축하는 데 사용할 수 있습니다.
                                         또한 React는 대규모 커뮤니티 지원을 받으므로 개발자가 문제를 해결하고 배우는 데 도움을 받을 수 있습니다.</p>
                                </div>
                                <div class="card__info">
                                    <span class="author">Hooong</span>
                                    <span class="date">2023.05.11</span>
                                </div>
                            </figure>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg, ../assets/img/blog04@3x.jpg" />
                                <img src="../assets/img/blog04.jpg" alt="카드이미지">
                                <div class="card__title">
                                    <h3>리액트 잘하는 방법</h3>
                                    <p>인내심을 가지십시오. 새로운 언어를 배우는 데는 시간이 걸립니다. 하룻밤 사이에 전문가가 되기를 기대하지 마십시오. 계속 연습하면 결국 React를 잘하게 될 것입니다.</p>
                                </div>
                                <div class="card__info">
                                    <span class="author">Hooong</span>
                                    <span class="date">2023.05.11</span>
                                </div>
                            </figure>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg, ../assets/img/blog04@3x.jpg" />
                                <img src="../assets/img/blog04.jpg" alt="카드이미지">
                                <div class="card__title">
                                    <h3>리액트 잘하는 방법</h3>
                                    <p>인내심을 가지십시오. 새로운 언어를 배우는 데는 시간이 걸립니다. 하룻밤 사이에 전문가가 되기를 기대하지 마십시오. 계속 연습하면 결국 React를 잘하게 될 것입니다.</p>
                                </div>
                                <div class="card__info">
                                    <span class="author">Hooong</span>
                                    <span class="date">2023.05.11</span>
                                </div>
                            </figure>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg, ../assets/img/blog04@3x.jpg" />
                                <img src="../assets/img/blog04.jpg" alt="카드이미지">
                                <div class="card__title">
                                    <h3>리액트 잘하는 방법</h3>
                                    <p>인내심을 가지십시오. 새로운 언어를 배우는 데는 시간이 걸립니다. 하룻밤 사이에 전문가가 되기를 기대하지 마십시오. 계속 연습하면 결국 React를 잘하게 될 것입니다.</p>
                                </div>
                                <div class="card__info">
                                    <span class="author">Hooong</span>
                                    <span class="date">2023.05.11</span>
                                </div>
                            </figure>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg, ../assets/img/blog04@3x.jpg" />
                                <img src="../assets/img/blog04.jpg" alt="카드이미지">
                                <div class="card__title">
                                    <h3>리액트 잘하는 방법</h3>
                                    <p>인내심을 가지십시오. 새로운 언어를 배우는 데는 시간이 걸립니다. 하룻밤 사이에 전문가가 되기를 기대하지 마십시오. 계속 연습하면 결국 React를 잘하게 될 것입니다.</p>
                                </div>
                                <div class="card__info">
                                    <span class="author">Hooong</span>
                                    <span class="date">2023.05.11</span>
                                </div>
                            </figure>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg, ../assets/img/blog04@3x.jpg" />
                                <img src="../assets/img/blog04.jpg" alt="카드이미지">
                                <div class="card__title">
                                    <h3>리액트 잘하는 방법</h3>
                                    <p>인내심을 가지십시오. 새로운 언어를 배우는 데는 시간이 걸립니다. 하룻밤 사이에 전문가가 되기를 기대하지 마십시오. 계속 연습하면 결국 React를 잘하게 될 것입니다.</p>
                                </div>
                                <div class="card__info">
                                    <span class="author">Hooong</span>
                                    <span class="date">2023.05.11</span>
                                </div>
                            </figure>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg, ../assets/img/blog04@3x.jpg" />
                                <img src="../assets/img/blog04.jpg" alt="카드이미지">
                                <div class="card__title">
                                    <h3>리액트 잘하는 방법</h3>
                                    <p>인내심을 가지십시오. 새로운 언어를 배우는 데는 시간이 걸립니다. 하룻밤 사이에 전문가가 되기를 기대하지 마십시오. 계속 연습하면 결국 React를 잘하게 될 것입니다.</p>
                                </div>
                                <div class="card__info">
                                    <span class="author">Hooong</span>
                                    <span class="date">2023.05.11</span>
                                </div>
                            </figure>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg, ../assets/img/blog04@3x.jpg" />
                                <img src="../assets/img/blog04.jpg" alt="카드이미지">
                                <div class="card__title">
                                    <h3>리액트 잘하는 방법</h3>
                                    <p>인내심을 가지십시오. 새로운 언어를 배우는 데는 시간이 걸립니다. 하룻밤 사이에 전문가가 되기를 기대하지 마십시오. 계속 연습하면 결국 React를 잘하게 될 것입니다.</p>
                                </div>
                                <div class="card__info">
                                    <span class="author">Hooong</span>
                                    <span class="date">2023.05.11</span>
                                </div>
                            </figure>
                        </div> -->

<?php
    $sql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC";
    $result = $connect -> query($sql);
?>
<?php
    foreach($result as $blog){
?>
                        <div class="card">
                            <figure class="card__img">
                                <a href="blogView.php?blogID=<?=$blog['blogID']?>">
                                    <img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>">
                                </a>
                            </figure>
                            <div class="card__title">
                                <h3><?=$blog['blogTitle']?></h3>
                                <p><?=$blog['blogContents']?></p>
                            </div>
                        </div>
<?php } ?>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="blog__aside">
                    <div class="intro">
                        <picture class="img">
                            <source srcset="../assets/img/intro01.png, ../assets/img/intro01@2x.png 2x, ../assets/img/intro01@3x.png 3x" />
                            <img src="../assets/img/intro01.png" alt="소개이미지">
                        </picture> 
                        <p class="text">
                            겸손함을 유지하며 세부적인 곳까지 파고드는 개발자가 되겠습니다.
                        </p>
                    </div>
                    <div class="cate">
                        <h4>카테고리</h4>
                    </div>
                    <div class="cate">
                        <h4>최신글</h4>
                    </div>
                    <div class="cate">
                        <h4>인기글</h4>
                    </div>
                    <div class="cate">
                        <h4>최신 댓글</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog__inner -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

</body>
</html>