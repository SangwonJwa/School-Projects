<?php
    $car_Num = $_GET['car_Num'];
    $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");
    
    $check = "UPDATE carTBL SET car_available = -1 WHERE car_Num='".$_GET['car_Num']."'";
    $result = mysqli_query($con,$check);

    if($result){
        echo "<script>
        alert(\"변경되었습니다.\");
        window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
        document.location.href = 'car_check.php'
        </script>";
    }
    
    
?>