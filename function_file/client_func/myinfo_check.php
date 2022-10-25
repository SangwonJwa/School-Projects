<<?php 
    session_start();
    $user_id = $_SESSION['user_id'];
    $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");
    $sql = "SELECT * FROM userTBL WHERE user_ID ='".$user_id."'";
    $ret = mysqli_query($con, $sql);
    
    if($ret) { 
    $count = mysqli_num_rows($ret);
    } 
    else { 
    echo "userTBL 데이터 검색 실패!!!"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    exit();
    } 

    
   
    echo "<html lang='ko'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0'>";
    echo "<link rel='stylesheet' href='../../css/user_check.css?after' type='text/css'>";
    echo "<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Philosopher'>";
    echo "<script type='text/javascript' src='http://code.jquery.com/jquery-latest.js'></script>";
    echo "</head>";

    echo "<body>";
    echo "<h1>[내 정보]</h1>";

    
    while($row = mysqli_fetch_array($ret)) {

       echo "<table class='type05' style='margin-left: 17%; border: black solid 1px;'>";
       echo "<TR>";
       echo "<TH scope='row'>아이디</TH>";
       echo "<TD>", $row['user_ID'], "</TD>";
       echo "</TR>";

       echo "<TR>";
       echo "<TH scope='row'>비밀번호</TH>";
       echo "<TD>", $row['user_PW'], "</TD>";
       echo "</TR>";

       echo "<TR>";
       echo "<TH scope='row'>이름</TH>";
       echo "<TD>", $row['user_Name'], "</TD>";
       echo "</TR>";

       echo "<TR>";
       echo "<TH scope='row'>생년월일</TH>";
       echo "<TD>", $row['birthYear'], "</TD>";
       echo "</TR>";

       echo "<TR>";
       echo "<TH scope='row'>전화번호</TH>";
       echo "<TD>", $row['user_PN'], "</TD>";
       echo "</TR>";

       echo "<TR>";
       echo "<TH scope='row'>주소</TH>";
       echo "<TD>", $row['user_addr'], "</TD>";
       echo "</TR>";
       echo "</table>";
    } 
    

    echo "</body>";
    echo "</html>";

    mysqli_close($con);
    
 ?>