<?php
     $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");

     $sql1 = "SELECT * FROM carTBL";
 
     $ret1 = mysqli_query($con, $sql1);
     if($ret1) { 
     $count = mysqli_num_rows($ret1);
     } 
     else { 
     echo "userTBL 데이터 검색 실패!!!"."<br>";
     echo "실패 원인 :".mysqli_error($con);
     exit();
     } 
?>


<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
    <link rel='stylesheet' href='../../css/user_check.css?after' type='text/css'>
</head>

<body>

    <form action="cardel_result.php" method="POST">
        <div class="input-box">
            <label for="carNum"><span style="color:red">삭제</span>할 차량의 번호를 입력해주세요 </label> &nbsp; &nbsp;
            <input id="carNum" type="text" name="carNum" placeholder="차량번호"> &nbsp; &nbsp;
            <input type="submit" value="검색"><br><br>
        </div>       

        <?php
            echo "<table class='user-chk' border=1 style=' width: 100%; margin-left: 0; text-transform: uppercase;'>";
            echo "<tr>";
            echo "<th>차량번호</th> <th>이름</th> <th>제조사</th> <th>분류</th> <th>연식</th> <th>일 가격</th> <th>보험료</th> <th>상태</th> <th> </th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($ret1)) {
               echo "<TR>";
               echo "<TD>", $row['car_Num'], "</TD>";
               echo "<TD>", $row['car_Name'], "</TD>";
               echo "<TD>", $row['car_MF'], "</TD>";
               echo "<TD>", $row['car_Type'], "</TD>";
               echo "<TD>", $row['car_Year'], "</TD>";
               echo "<TD>", $row['car_Price_per_day'], "</TD>";
               echo "<TD>", $row['car_Insurance_fee'], "</TD>";
               echo "<TD>", $row['car_Available'], "</TD>";
               echo "</TR>";
            } 
            echo "</table>";
        ?>    
        

    </form>
</body>



</html>