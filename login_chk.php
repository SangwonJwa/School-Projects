<?php 
    
    $ID = $_POST["userID"];
    $PW = $_POST["userPW"];
    $GROUP = $_POST["who_login"];
    $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");
    
    if($GROUP == 'USER')
    {
        $check = "SELECT * FROM userTBL where user_ID='$ID' && user_PW='$PW'";
        $result  = mysqli_query($con,$check);
        if($result->num_rows == 1){
            session_start();
            $_SESSION['user_id'] = $ID;
            header("location: client_main.php");
        }
        else{
            echo "<script>
            alert(\"아이디와 비밀번호를 확인해주세요.\");
            window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
            document.location.href = 'login.php'
            </script>";
        }
    }
    else if($GROUP == 'ADMIN')
    {
        $check = "SELECT * FROM empTBL where emp_ID='$ID' && emp_PW='$PW'";
        $result  = mysqli_query($con,$check);
        if($result->num_rows == 1){
            session_start();
            $_SESSION['user_id'] = $ID;
            header("location: employee_main.php");
        }
        else{
            echo "<script>
            alert(\"아이디와 비밀번호를 확인해주세요.\");
            window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
            document.location.href = 'login.php'
            </script>";
        }
    }
    else{
        echo "<script>
            alert(\"아이디와 비밀번호를 확인해주세요.\");
            window.open('./dr2.html','drdr','width=600,height=600,top=100,left=100');
            document.location.href = 'login.php'
            </script>";
    }   
    mysqli_close($con);
 ?>
