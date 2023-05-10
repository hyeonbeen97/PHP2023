<?php
include "../PHP/connect/connect.php";

// SELECT youEmail FROM adminMembers WHERE youEmail = {}

$type = $_POST['type'];
$email = $_POST['adminyouEmail'];
$jsonResult = "bad";


if($type == "isEmailCheck"){
    $youEmail = $connect -> real_escape_struing(trim($email));
    $sql .="SELECT adminyouEmail FROM adminMembers  WHERE adminyouEmail = '{$youEmail}'";
}

$result = $connect -> query($sql);

if($result -> num_rows == 0){
    $jsonResult = "good";
    
}
echo json_encode(array("result" => $jsonResult));
?>