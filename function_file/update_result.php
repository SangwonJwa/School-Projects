<?php
    $ID = $_POST["userID"];
    $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");

    $check = "SELECT * FROM userTBL where user_ID='$ID'";
    $result = mysqli_query($con,$check);

    
    

    if($result->num_rows == 1){
        echo "<html lang='ko'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0'>";
        echo "<link rel='stylesheet' href='../css/user_check.css?after' type='text/css'>";
        echo "<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Philosopher'>";
        echo "<script type='text/javascript' src='http://code.jquery.com/jquery-latest.js'></script>";
        echo "</head>";

        echo "<body>";
        while( $row = mysqli_fetch_array($result)){
        echo "<h1>회원 정보 수정</h1>";
        echo "<FORM METHOD='post' ACTION='update_result2.php' CLASS='info-input'>";
            
            echo "<div class='info-box'>";
            echo"아이디 : <input type='text' name='userID' value='",$row['user_ID'],"'readonly> <br>";
            echo "</div>";
            
            echo "<div class='info-box'>";
            echo"이름 : <input type='text' name='userName' value='",$row['user_Name'],"'> <br>";
            echo "</div>";

            echo "<div class='info-box'>";
            echo"생년월일 : <input type='text' name='birthYear' value='",$row['birthYear'],"'> <br>";
            echo "</div>";

            echo "<div class='info-box'>";
            echo"전화번호 : <input type='text' name='mobile1' value='",$row['user_PN'],"'> <br>";
            echo "</div>";

            echo "<div class='info-box'>";
            echo"주소 : <input type='text' name='addr' value='",$row['user_addr'],"'> <br>";
            echo "</div>";
            
            echo"<br>";
            echo"<input type='submit' value='정보 수정'>";
            echo"&nbsp; &nbsp; &nbsp; &nbsp;";
            echo "<a href='user_update.php'>돌아가기</a>";
        echo "</FORM>";
        
        }
        echo "</body>";
        echo "</html>";
    }
    else{
        echo "<script>
        alert(\"오류발생! ID를 확인해주세요.\");
        window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
        document.location.href = 'user_update.php'
        </script>";
    }


?>