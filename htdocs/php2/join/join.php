<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <?php include "../include/head.php" ?>
</head>
<body class="bgStyle1">
    
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

   <?php include "../include/header.php" ?>
    <!-- //header -->
    <main id="main" class="mt120 container">
        <div class="main__container">
            <div class="intro__inner mb40">
                <h2 class="intro__h2">PLANTY</h2>
                <h4>회원가입</h4>
            </div>
            <!-- join__inner -->
            <div class="join__inner">
                <div class="join__form">
                    <form action="#" name="#" method="post">
                        <fieldset>
                            <legend class="blind">회원가입 영역</legend>
                            <div>
                                <label for="youEmail" class="required">이메일</label>
                                <div class="input__inner">
                                    <input class="inputStyle" type="email" id="youEmail" name="youEmail" placeholder="이메일을 입력해주세요" required>
                                    <button type="submit" class="checkbtn">중복확인</button>
                                </div>
                            </div>
                            <div>
                                <label for="youName" class="required">이름</label>
                                <input class="inputStyle" type="text" id="youName" name="youName" placeholder="이름을 입력해주세요" required>
                            </div>
                            <div>
                                <label for="youPhome" class="required">연락처</label>
                                <input class="inputStyle" type="text" id="youPhome" name="youPhome" placeholder="연락처를 입력해주세요">
                            </div>
                            <div>
                                <label for="youNickname" class="required">닉네임</label>
                                <div class="input__inner">
                                    <input class="inputStyle" type="text" id="youNickname" name="youNickname" placeholder="닉네임을 입력해주세요" required>
                                    <button type="submit" class="checkbtn">중복확인</button>
                                </div>
                            </div>
                            <div>
                                <label for="youPass" class="required">비밀번호</label>
                                <input class="inputStyle" type="password" id="youPass" name="youPass" placeholder="비밀번호를 입력해주세요" required>
                            </div>
                            <div>
                                <label for="youPassC" class="required">비밀번호 확인</label>
                                <input class="inputStyle" type="passwordC" id="youPassC" name="youPassC" placeholder="비밀번호를 다시한번 입력해주세요" required>
                            </div>
                            <div>
                                <label for="PassQuestion" class="required">비밀번호 찾기 질문</label>
                                <select name="PassQuestion" id="PassQuestion">
                                    <option value="question1">당신의 가장 소중한 것은 무엇입니까?</option>
                                </select>
                            </div>
                            <div>
                                <label for="PassQuestionC" class="required">질문 답변</label>
                                <input class="inputStyle" type="text" id="youNickname" name="youNickname" placeholder="닉네임을 입력해주세요" required>
                            </div>
                            <button type="submit" class="btnStyle5"><a href="complete.html">회원가입</a></button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- //main -->

   <?php include "../include/footer_min.php" ?>
    <!-- //footer -->
    
</body>
</html>