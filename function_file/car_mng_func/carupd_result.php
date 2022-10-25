<?php
    $carNum = $_POST["carNum"];
    $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");

    $check = "SELECT * FROM carTBL where car_Num='$carNum'";
    $result = mysqli_query($con,$check);

    
    

    if($result->num_rows == 1){
        echo "<html lang='ko'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0'>";
        echo "<link rel='stylesheet' href='../../css/user_check.css?after' type='text/css'>";
        echo "<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Philosopher'>";
        echo "<script type='text/javascript' src='http://code.jquery.com/jquery-latest.js'></script>";
        echo "</head>";

        echo "<body>";
        while( $row = mysqli_fetch_array($result)){
        echo "<h1>차량 정보 수정</h1>";
        echo "<FORM METHOD='post' ACTION='carupd_result2.php' CLASS='info-input'>";
            
            echo "<div class='info-box'>";
            echo"차량번호 : <input type='text' name='car_Num' value='",$row['car_Num'],"' readonly> <br>";
            echo "</div>";
            
            echo "<div class='info-box'>";
            echo"차량모델 : <input type='text' name='car_Name' value='",$row['car_Name'],"'> <br>";
            echo "</div>";

            echo "<div class='info-box'>";
            echo"분류: <input type='text' name='car_MF' value='",$row['car_MF'],"'> <br>";
            echo "</div>";

            echo "<div class='info-box'>";
            echo"제조사 : <input type='text' name='car_Type' value='",$row['car_Type'],"'> <br>";
            echo "</div>";

            echo "<div class='info-box'>";
            echo"연식 : <input type='text' name='car_Year' value='",$row['car_Year'],"'> <br>";
            echo "</div>";

            echo "<div class='info-box'>";
            echo"일 가격 : <input type='text' name='car_Price_per_day' value='",$row['car_Price_per_day'],"'> <br>";
            echo "</div>";

            echo "<div class='info-box'>";
            echo"보험료 : <input type='text' name='car_Insurance_fee' value='",$row['car_Insurance_fee'],"'> <br>";
            echo "</div>";

            echo "<div class='info-box'>";
            echo"상태 : <input type='text' name='car_Available' value='",$row['car_Available'],"'> <br>";
            echo "</div>";
            
            echo"<br>";
            echo"<input type='submit' value='정보 수정'>";
            echo"&nbsp; &nbsp; &nbsp; &nbsp;";
            echo "<a href='car_update.php'>돌아가기</a>";
        echo "</FORM>";
        
        }
        echo "</body>";
        echo "</html>";
    }
    else{
        echo "<script>
        alert(\"오류발생! 차량번호를 확인해주세요.\");
        window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
        document.location.href = 'user_update.php'
        </script>";
    }


?>