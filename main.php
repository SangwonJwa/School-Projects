<!DOCTYPE html>
<?php session_start(); ?>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
    <style>
        div {
            text-align: center;
            padding:20px;
        }
        h1 {
            color: #005128;
            font-size: 50px;
        }
        footer {
            color: black;
            line-height: 50px;
        }
        .button {
                margin: 5px;
                padding: 7px;
                width: 60px;
                border: none;
                border-radius: 8px;
                background-color: #005128;
                color: white;
                font-size: 15px;
                font-weight: 565;
                margin: none;
                cursor: pointer;
            }
        .button:active {
                background-color: #005128;
                color: whitesmoke;
                font-weight: 570;
            }
       
    </style>
</head>
<body>
    <div>
    <h1><a href="main.php" style="color: #005128; text-decoration-line:none;">MAIN PAGE</a></h1>
    <?php
        if(!isset($_SESSION['user_id'])) {
            echo "<p><button class=\"button\" onclick=\"location.href='login.php';\">LOGIN</button> <small style=\"color:#005128; font-weight:700;\">OR</small> <button class=\"button\" onclick=\"location.href='join.php';\">JOIN</button></p>";
        } else {
            $user_id = $_SESSION['user_id'];
            echo "<p> (ID : $user_id)님 어서오세요.</p>";
            echo "<p><button class=\"button\" style=\"width: 72px;\" onclick=\"window.location.href='logout.php'\">로그아웃</button></p>";
        }
    ?>
    
        <footer>
            made by JSW
        </footer>
    </div>
</body>
</html>