<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지</title>

    <?php include "include/head.php" ?>
</head>
<body class="gray">
    
    <?php include "include/skip.php" ?>
    <!-- skip -->


    <?php include "include/header.php" ?>
    <!-- header -->

    <main id="main" class="container">
        <div class="intro__inner center container">
            <div class="index">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li class="active">3</li>
                </ul>
            </div>
            <picture class="intro__images">
                <source srcset="../PHP/html/assets/img/intro01.png">
                <img src="../PHP/html/assets/img/intro01.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text mt50">
                회원가입을 축하드립니다. 환영합니다.<br>
                로그인을 해주세요!
            </p>
        </div>
        <button type="submit" class="btnstyle1">로그인</button>
    </main>
    <?php include "include/footer.php" ?>
    <!-- //main -->
</body>
</html>