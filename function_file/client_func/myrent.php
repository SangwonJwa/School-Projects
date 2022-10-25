<<?php 
    session_start();
    $user_id = $_SESSION['user_id'];
    $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");
    $sql = "SELECT * FROM rentTBL WHERE user_ID ='".$user_id."'";
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
    echo "<h1>[나의 예약 내역]</h1>";
    

    echo "<table class='user-chk' border=1 style=' width: 100%; margin-left: 0; text-transform: uppercase;'>";
    echo "<tr>";
    echo "<th>예약번호</th> <th>예약자ID</th> <th>예약자명</th> <th>차량번호</th> <th>차량모델</th> <th>총 대여일</th> <th>총 요금</th> <th>신청 날짜</th> <th> </th>";
    echo "</tr>";
    while($row = mysqli_fetch_array($ret)) {
       echo "<TR>";
       echo "<TD>", $row['rent_Num'], "</TD>";
       echo "<TD>", $row['user_ID'], "</TD>";
       echo "<TD>", $row['user_Name'], "</TD>";
       echo "<TD>", $row['car_Num'], "</TD>";
       echo "<TD>", $row['car_Name'], "</TD>";
       echo "<TD>", $row['rent_days'], "</TD>";
       echo "<TD>", $row['rent_fee'], "</TD>";
       echo "<TD>", $row['mDate'], "</TD>";
       echo "<TD>", "<A style='text-decoration: none; color: red;' HREF='rent_delete.php?car_Num=", $row['car_Num'], "'>취소</A></TD>";
       echo "</TR>";
    } 
    echo "</table>";
    echo "</body>";
    echo "</html>";

    mysqli_close($con);
    
 ?>