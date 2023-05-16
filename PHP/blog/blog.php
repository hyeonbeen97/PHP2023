<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

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
    <!-- header -->
    <main id="main" class="container">
        <!-- main -->

        <div class="blog__inner">
            <div class="blog__left">
                <div class="blog__search">
                    <h2>개발자 블로그 입니다.</h2>
                    <p>개발자 관련 게시판 입니다.</p>
                    <div class="b_search">
                        <form action="#" name="#" method="post">
                            <legend class="blind">블로그 검색</legend>
                            <input type="search" class="inputStyle2" name="searchKeyword" aria-label="검색" placeholder="검색어를 입력하세요.">
                            <button type="submit" class="btnstyle4 ml20">검색하기</button>
                            <!-- <a href="blogWrite.php" class="btnstyle4">글쓰기</a> -->
                            <?php
                    if(isset($_SESSION['memberID'])){ ?>
                        <div class="mt20"><a href="blogWrite.php" class="btnstyle4">글쓰기</a></div>
                    <?php } ?>
                        </form>
                    </div>
                </div>
                <div class="blog__wrap">
                    <h2>All post</h2>
                    <div class="cards__inner col3 line3">
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog__cardimg04-min.jpg, ../assets/img/blog__cardimg04@2x-min.jpg, ../assets/img/blog__cardimg04@3x-min.jpg" />
                                <img src="../assets/img/blog__cardimg04-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 실무에서 유용한 팁 및 노하우 공유</h3>
                                <p>디버깅 팁: 코드를 디버깅하는 데 유용한 팁과 기술을 공유합니다. 이는 코드의 문제점을 파악하고 해결하는 데 도움이 됩니다.<br>
    
    </p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog__cardimg04-min.jpg, ../assets/img/blog__cardimg04@2x-min.jpg, ../assets/img/blog__cardimg04@3x-min.jpg" />
                                <img src="../assets/img/blog__cardimg04-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 실무에서 유용한 팁 및 노하우 공유</h3>
                                <p>디버깅 팁: 코드를 디버깅하는 데 유용한 팁과 기술을 공유합니다. 이는 코드의 문제점을 파악하고 해결하는 데 도움이 됩니다.<br>
    
    </p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog__cardimg04-min.jpg, ../assets/img/blog__cardimg04@2x-min.jpg, ../assets/img/blog__cardimg04@3x-min.jpg" />
                                <img src="../assets/img/blog__cardimg04-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 실무에서 유용한 팁 및 노하우 공유</h3>
                                <p>디버깅 팁: 코드를 디버깅하는 데 유용한 팁과 기술을 공유합니다. 이는 코드의 문제점을 파악하고 해결하는 데 도움이 됩니다.<br>
    
    </p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog__cardimg04-min.jpg, ../assets/img/blog__cardimg04@2x-min.jpg, ../assets/img/blog__cardimg04@3x-min.jpg" />
                                <img src="../assets/img/blog__cardimg04-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 실무에서 유용한 팁 및 노하우 공유</h3>
                                <p>디버깅 팁: 코드를 디버깅하는 데 유용한 팁과 기술을 공유합니다. 이는 코드의 문제점을 파악하고 해결하는 데 도움이 됩니다.<br>
    
    </p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog__cardimg04-min.jpg, ../assets/img/blog__cardimg04@2x-min.jpg, ../assets/img/blog__cardimg04@3x-min.jpg" />
                                <img src="../assets/img/blog__cardimg04-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 실무에서 유용한 팁 및 노하우 공유</h3>
                                <p>디버깅 팁: 코드를 디버깅하는 데 유용한 팁과 기술을 공유합니다. 이는 코드의 문제점을 파악하고 해결하는 데 도움이 됩니다.<br>
    
    </p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog__cardimg04-min.jpg, ../assets/img/blog__cardimg04@2x-min.jpg, ../assets/img/blog__cardimg04@3x-min.jpg" />
                                <img src="../assets/img/blog__cardimg04-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 실무에서 유용한 팁 및 노하우 공유</h3>
                                <p>디버깅 팁: 코드를 디버깅하는 데 유용한 팁과 기술을 공유합니다. 이는 코드의 문제점을 파악하고 해결하는 데 도움이 됩니다.<br>
    
    </p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog__cardimg04-min.jpg, ../assets/img/blog__cardimg04@2x-min.jpg, ../assets/img/blog__cardimg04@3x-min.jpg" />
                                <img src="../assets/img/blog__cardimg04-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 실무에서 유용한 팁 및 노하우 공유</h3>
                                <p>디버깅 팁: 코드를 디버깅하는 데 유용한 팁과 기술을 공유합니다. 이는 코드의 문제점을 파악하고 해결하는 데 도움이 됩니다.<br>
    
    </p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog__cardimg04-min.jpg, ../assets/img/blog__cardimg04@2x-min.jpg, ../assets/img/blog__cardimg04@3x-min.jpg" />
                                <img src="../assets/img/blog__cardimg04-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 실무에서 유용한 팁 및 노하우 공유</h3>
                                <p>디버깅 팁: 코드를 디버깅하는 데 유용한 팁과 기술을 공유합니다. 이는 코드의 문제점을 파악하고 해결하는 데 도움이 됩니다.<br>
    
    </p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog__cardimg04-min.jpg, ../assets/img/blog__cardimg04@2x-min.jpg, ../assets/img/blog__cardimg04@3x-min.jpg" />
                                <img src="../assets/img/blog__cardimg04-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 실무에서 유용한 팁 및 노하우 공유</h3>
                                <p>디버깅 팁: 코드를 디버깅하는 데 유용한 팁과 기술을 공유합니다. 이는 코드의 문제점을 파악하고 해결하는 데 도움이 됩니다.<br>
    
    </p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__right">
                <div class="blog__aside">
                    <div class="intro">
                        <picture class="img">
                            <source srcset="../assets/img/intro01.png, ../assets/img/intro01@2x.png 2x, ../assets/img/intro01@3x.png 3x" />
                            <img src="../assets/img/intro01.png" alt="소개이미지">
                        </picture> 
                        <p class="text">
                            어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.
                        </p>
                    </div>
                    <div class="cate">
                        <h4>카테고리</h4>
                    </div>
                    <div class="cate">
                        <h4>최신 글</h4>
                    </div>
                    <div class="cate">
                        <h4>인기 글</h4>
                    </div>
                    <div class="cate">
                        <h4>최신 댓글</h4>
                    </div>
                </div>

            </div>
        </div>
        <!-- blog__inner -->




        <!-- 
        <div class=inntro__inner"></div> 각 페이지 소개 배너
        <div class="join__inner"></div> 회원가입 페이지
        <div class="login__inner"></div> 로그인 페이지
        <div class="board__inner"></div> 게시판 페이지
        <div class="bolg__inner"></div> 블로그 메인




        <div class="banners__inner"></div> 

        <div class="cards__inner"></div>
   bmStyle     <div class="images__inner"></div>
        <div class="ads__inner"></div>
        <div class="texts__inner"></div>
        <div class="login__inner"></div>
        <div class="join__inner"></div>
        <div class="bolg__inner"></div> 
        -->
    </main>
    <!-- //main -->


    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>
</html>