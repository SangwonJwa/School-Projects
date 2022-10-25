<?php 
    $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");

    $userID = $_POST["userID"];
    $userPW = $_POST["userPW"];
    $userName = $_POST["userName"];
    $birthYear = $_POST["birthYear"];
    $mobile1 = $_POST["mobile1"];
    $addr = $_POST["addr"];
     

   $sql = "UPDATE userTBL SET user_Name='".$userName."', birthYear=".$birthYear;
   $sql = $sql.", user_addr='".$addr."', user_PN='".$mobile1."'";
   $sql = $sql.", user_PW='".$userPW."'";
   $sql = $sql."where user_ID = '".$userID."'";
 
   $ret = mysqli_query($con, $sql);
 
   
   if($ret) { 
        echo "<script>
        alert(\"수정이 완료되었습니다.\");
        window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
        document.location.href = 'info_update.php'
        </script>";
    }
    else { 
        echo "<script>
        alert(\"오류가 발생했습니다.\");
        window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
        document.location.href = 'info_update.php'
        </script>";  
    } 
    mysqli_close($con);

    echo "<BR> <A HREF='user_update.php'> <--초기 화면</A> ";
?>

