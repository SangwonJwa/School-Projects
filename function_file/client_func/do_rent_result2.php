<?php
    date_default_timezone_set('Asia/Seoul');
    session_start();
    $user_ID = $_SESSION['user_id'];
    $car_Num = $_POST['car_Num'];
    $rent_days = $_POST['days'];

    $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");

    $sql1 = "SELECT * FROM userTBL WHERE user_ID ='".$user_ID."'";
    $ret1 = mysqli_query($con,$sql1);

    $sql2 = "SELECT * FROM carTBL WHERE car_Num =".$car_Num;
    $ret2 = mysqli_query($con,$sql2);
    
    while(($row1 = mysqli_fetch_array($ret1)) && ($row2 = mysqli_fetch_array($ret2))){
        $user_Name = $row1['user_Name'];
        $car_Name = $row2['car_Name'];
        $car_Price = $row2['car_Price_per_day'];
        $car_Insurance = $row2['car_Insurance_fee'];
        $rent_fee = $rent_days * $car_Price;
        $rent_fee = $rent_fee + $car_Insurance;
        $mDate = date("Y-m-d")." ".date("H").":".date("i");

        $sql3 = "INSERT INTO rentTBL(user_ID,user_Name,car_Num,car_Name,rent_days,rent_fee,mDate)";
        $sql3 = $sql3." VALUES('".$user_ID."','".$user_Name."',".$car_Num.",'".$car_Name."'";
        $sql3 = $sql3.",".$rent_days.",".$rent_fee.",'".$mDate."')";
        
        $ret3 = mysqli_query($con,$sql3);

        $check = "UPDATE carTBL SET car_available = 0 WHERE car_Num='".$car_Num."'";
        $result = mysqli_query($con,$check);

        if($ret3){
            echo "<script>
            alert(\"예약이 완료되었씁니다.\");
            window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
            document.location.href = 'do_rent.php'
            </script>";
        }
        else{
            echo "실패 원인: ".mysqli_error($con);
            
        }
        mysqli_close($con);
    }
?>