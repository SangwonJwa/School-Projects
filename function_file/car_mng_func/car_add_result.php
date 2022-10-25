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
 
   $sql =" INSERT INTO carTBL VALUES (".$car_Num.",'".$car_Name."','".$car_MF."','".$car_Type."'";
   $sql = $sql.",".$car_Year.",".$car_Price_per_day.",".$car_Insurance_fee.",".$car_Available.")";
 
   $ret = mysqli_query($con, $sql);
 
   if($ret) { 
      echo "<script>
      alert(\"차량추가 완료되었습니다.\");
      window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
      document.location.href = 'car_check.php'
      </script>";
   } 
   else { 
      echo "<script>
      alert(\"잘못된 형식입니다.\");
      window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
      document.location.href = 'car_add.php'
      </script>";
   }
  
   
    
   mysqli_close($con);
 
   
 ?>
