<<?php 

    $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");
    $sql = "SELECT * FROM carTBL ORDER BY car_Available ASC, car_Price_per_day ASC;";
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
    echo "<h1>[등록차량 정보]</h1>";
    echo "<table class='user-chk' border=1 style=' width: 100%; margin-left: 0; text-transform: uppercase;'>";
    echo "<tr>";
    echo "<th>차량번호</th> <th>이름</th> <th>제조사</th> <th>분류</th> <th>연식</th> <th>일 가격</th> <th>보험료</th> <th>상태</th> <th> </th>";
    echo "</tr>";
    while($row = mysqli_fetch_array($ret)) {
       echo "<TR>";
       echo "<TD>", $row['car_Num'], "</TD>";
       echo "<TD>", $row['car_Name'], "</TD>";
       echo "<TD>", $row['car_MF'], "</TD>";
       echo "<TD>", $row['car_Type'], "</TD>";
       echo "<TD>", $row['car_Year'], "</TD>";
       echo "<TD>", $row['car_Price_per_day'], "</TD>";
       echo "<TD>", $row['car_Insurance_fee'], "</TD>";
       echo "<TD>", $row['car_Available'], "</TD>";
       if($row['car_Available'] == 1){
        echo "<TD>", "<A style='text-decoration: none; color: blue;' HREF='do_rent_result.php?car_Num=", $row['car_Num'], "'>[예약하기]</A></TD>";
       }
       if($row['car_Available'] == 0){
        echo "<TD> <p style='text-decoration: none; color: red'>예약 불가</p> </TD>";
       }
       if($row['car_Available'] == -1){
         echo "<TD> <p style='text-decoration: none; color: green'>수리중</p> </TD>";
        }
       echo "</TR>";
    } 
    echo "</table>";
    echo "</body>";
    echo "</html>";

    mysqli_close($con);
    
 ?>