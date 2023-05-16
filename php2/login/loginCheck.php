<?php
include "../connect/connect.php";
include "/connect/session.php";

$youEmail = $_POST['youEmail'];
$youPass = $_POST['youPass'];

// 데이터 조회
$sql = "SELECT memberID, youEmail, youName, youPass FROM plantyMember WHERE youEmail = '$youEmail' AND youPass = '$youPass'";
$result = $connect -> query($sql);

if($count == 0){
    echo('이메일 또는 비밀번호가 잘못되었습니다. 다시 한번 확인해주세요');
} else {
    // 로그인 성공
    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);

    // echo "<pre>";
    // var_dump($memberInfo);
    // echo "</pre>";

    // 세션 생성 
    $_SESSION['memberID'] = $memberInfo['memberID'];
    $_SESSION['youEmail'] = $memberInfo['youEmail'];
    $_SESSION['youName'] = $memberInfo['youName'];

    Header("Location: ../html/main.html");

};
?>