<?php
     $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");

     $sql1 = "SELECT * FROM userTBL";
 
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
    <link rel='stylesheet' href='../css/user_check.css?after' type='text/css'>
</head>

<body>

    <form action="update_result.php" method="POST">
        <div class="input-box">
            <label for="userID"><span style="color:blue">수정</span>할 회원의 아이디를 입력해주세요 </label> &nbsp; &nbsp;
            <input id="userID" type="text" name="userID" placeholder="아이디"> &nbsp; &nbsp;
            <input type="submit" value="검색"><br><br>
        </div>       

        <?php
            echo "<table class='user-chk' border=1 style='text-transform: uppercase;'>";
            echo "<tr>";
            echo "<th>아이디</th> <th>이름</th> <th>생년월일</th> <th>전화번호</th> <th>주소</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($ret1)) {
                echo "<TR>";
                echo "<TD>", $row['user_ID'], "</TD>";
                echo "<TD>", $row['user_Name'], "</TD>";
                echo "<TD>", $row['birthYear'], "</TD>";
                echo "<TD>", $row['user_PN'], "</TD>";
                echo "<TD>", $row['user_addr'], "</TD>";
                echo "</TR>";
            } 
            echo "</table>";
        ?>    
        

    </form>
</body>



</html>