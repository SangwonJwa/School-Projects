<?php 
    $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");

    $car_Num = $_POST["car_Num"];
    $car_Name = $_POST["car_Name"];
    $car_MF = $_POST["car_MF"];
    $car_Type = $_POST["car_Type"];
    $car_Year = $_POST["car_Year"];
    $car_Price_per_day = $_POST["car_Price_per_day"];
    $car_Insurance_fee = $_POST["car_Insurance_fee"];
    $car_Available = $_POST["car_Available"];

    $sql = "UPDATE carTBL SET car_Num=".$car_Num.", car_Name='".$car_Name."', car_MF='".$car_MF."'"; 
    $sql = $sql.", car_Type='".$car_Type."', car_Year=".$car_Year.", car_Price_per_day=".$car_Price_per_day;
    $sql = $sql.",car_Insurance_fee=".$car_Insurance_fee.",car_Available=".$car_Available;
    $sql = $sql." where car_Num = ".$car_Num;
    $ret = mysqli_query($con, $sql);
 
   if($ret) { 
        echo "<script>
        alert(\"수정이 완료되었습니다.\");
        window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
        document.location.href = 'car_update.php'
        </script>";
    }
    else { 
        echo "<script>
        alert(\"오류가 발생했습니다.\");
        window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
        document.location.href = 'carupd_result.php'
        </script>";  
    }
   
    mysqli_close($con);

    
?>

