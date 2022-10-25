<?php 
     $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");
 
     $userID = $_POST["userID"];
     $userPW = $_POST["userPW"];
     $userName = $_POST["userName"];
     $birthYear = $_POST["birthYear"];
     $mobile1 = $_POST["mobile1"];
     $mobile2 = $_POST["mobile2"];
     $mobile3 = $_POST["mobile3"];
     $mobile = $mobile1."-".$mobile2."-".$mobile3;
     $addr = $_POST["addr"];
 
   $sql =" INSERT INTO userTBL VALUES ('".$userID."','".$userPW."','".$userName."',".$birthYear;
   $sql = $sql.",'".$mobile."','".$addr."','".'USER'."')";
 
   $ret = mysqli_query($con, $sql);
 
   echo "<H1>신규 회원 입력 결과</H1>";
   if($ret) { 
      echo "<script>
      alert(\"회원가입이 완료되었습니다.\");
      window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
      document.location.href = 'login.php'
      </script>";
   } 
   else { 
      echo "<script>
      alert(\"잘못된 형식입니다.\");
      window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
      document.location.href = 'join.php'
      </script>";
   } 
   mysqli_close($con);
 
   
 ?>
