<?php

echo "<html lang='ko'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0'>";
    echo "<link rel='stylesheet' href='../../css/user_check.css?after' type='text/css'>";
    echo "<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Philosopher'>";
    echo "<script type='text/javascript' src='http://code.jquery.com/jquery-latest.js'></script>";
    echo "</head>";

    echo "<body>";
    
    echo "<h1>차량 추가</h1>";
    echo "<FORM METHOD='post' ACTION='car_add_result.php' CLASS='info-input'>";
        
        echo "<div class='info-box'>";
        echo"차량번호 : <input type='text' name='car_Num'> <br>";
        echo "</div>";
        
        echo "<div class='info-box'>";
        echo"차량모델 : <input type='text' name='car_Name'> <br>";
        echo "</div>";

        echo "<div class='info-box'>";
        echo"분류 : <input type='text' name='car_MF'> <br>";
        echo "</div>";

        echo "<div class='info-box'>";
        echo"제조사 : <input type='text' name='car_Type'> <br>";
        echo "</div>";

        echo "<div class='info-box'>";
        echo"연식 : <input type='text' name='car_Year'> <br>";
        echo "</div>";

        echo "<div class='info-box'>";
        echo"일 가격 : <input type='text' name='car_Price_per_day'> <br>";
        echo "</div>";

        echo "<div class='info-box'>";
        echo"보험료 : <input type='text' name='car_Insurance_fee'> <br>";
        echo "</div>";

        echo "<div class='info-box'>";
        echo"상태 : <input type='text' name='car_Available' value='1'> <br>";
        echo "</div>";
        
        echo"<br>";
        echo"<input type='submit' value='추가'>";
        echo"&nbsp; &nbsp; &nbsp; &nbsp;";
        echo "<a href='car_check.php'>돌아가기</a>";
    echo "</FORM>";
    
    
    echo "</body>";
    echo "</html>";
?>