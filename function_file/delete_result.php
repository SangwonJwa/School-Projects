<?php
    $ID = $_POST["userID"];
    $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");
    
    $check0 = "SELECT * FROM userTBL WHERE user_ID='".$ID."'";
    $result0 = mysqli_query($con,$check0);

    $check = "DELETE FROM userTBL WHERE user_ID='".$ID."'";
    $result = mysqli_query($con,$check);

    

    if($result0->num_rows == 1){
        if($result){
            echo "<script>
            alert(\"회원이 성공적으로 삭제되었습니다.\");
            window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
            document.location.href = 'user_delete.php'
            </script>";
        }
        else{
            echo "데이터 삭제 실패!!!";
            echo "실패 원인: ".mysqli_error($con);
        }
    }
    else{
        echo "<script>
        alert(\"없는 ID입니다.\");
        window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
        document.location.href = 'user_delete.php'
        </script>";
    }
    mysqli_close($con);
  
?>
