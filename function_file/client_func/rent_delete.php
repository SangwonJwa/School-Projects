<?php
    $car_Num = $_GET['car_Num'];
    $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");

    $check = "DELETE FROM rentTBL WHERE car_Num='".$car_Num."'";
    $result = mysqli_query($con,$check);

    $check2 = "UPDATE carTBL SET car_available = 1 WHERE car_Num='".$car_Num."'";
    $result2 = mysqli_query($con,$check2);

    if($result){
        echo "<script>
        alert(\"예약이 취소되었습니다.\");
        window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
        document.location.href = 'myrent.php'
        </script>";
    }
    else{
        echo "<script>
        alert(\"오류가 생겼습니다.\");
        window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
        document.location.href = 'myrent.php'
        </script>";
    }

    mysqli_close($con);

?>