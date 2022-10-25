<<?php 

    $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");

    $sql = "SELECT * FROM userTBL";

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
    echo "<link rel='stylesheet' href='../css/user_check.css?after' type='text/css'>";
    echo "<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Philosopher'>";
    echo "<script type='text/javascript' src='http://code.jquery.com/jquery-latest.js'></script>";
    echo "</head>";

    echo "<body>";
    echo "<h1>[회원정보 리스트]</h1>";

    echo "<table class='user-chk' border=1 style='text-transform: uppercase;'>";
    echo "<tr>";
    echo "<th>아이디</th> <th>이름</th> <th>생년월일</th> <th>전화번호</th> <th>주소</th>";
    echo "</tr>";
    while($row = mysqli_fetch_array($ret)) {
       echo "<TR>";
       echo "<TD>", $row['user_ID'], "</TD>";
       echo "<TD>", $row['user_Name'], "</TD>";
       echo "<TD>", $row['birthYear'], "</TD>";
       echo "<TD>", $row['user_PN'], "</TD>";
       echo "<TD>", $row['user_addr'], "</TD>";
       echo "</TR>";
    } 
    echo "</table>";

    echo "</body>";
    echo "</html>";

    mysqli_close($con);
    
 ?>