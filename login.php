<!DOCTYPE html>

<?php session_start(); ?>

<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css?after">
        <style>
            .new_button {
                margin: 5px;
                padding: 7px;
                width: 72px;
                border: none;
                border-radius: 8px;
                background-color: #005128;
                color: white;
                font-weight: 565;
                margin: none;
                cursor: pointer;
            }
            .new_button:active {
                background-color: #005128;
                color: whitesmoke;
                font-weight: 570;
            }
        </style>
    </head>
    <body>
    <?php if(!isset($_SESSION['user_id'])) { ?>
        <div class="login-area">
            <header>
                <h2>RentCar-Service</h2>
            </header>

            <form action="login_chk.php" method="POST">

                <div class="input-box">
                    <input id="userID" type="text" name="userID" placeholder="아이디">
                    <label for="userID">아이디</label>
                </div>

                <div class="input-box">
                    <input id="userPW" type="password" name="userPW" placeholder="비밀번호">
                    <label for="userPW">비밀번호</label>
                </div>
                
                <div class="group-select">                 
                    <input type="radio" name="who_login" value="ADMIN"> 관리자 &nbsp;  
                    <input type="radio" name="who_login" value="USER"> 사용자
                </div>
                
                <input type="submit" value="로그인"><br><br>
                <a id ="join" href="join.php">회원가입</a>
            </form>

        </div>
    <?php } else {
                $user_id = $_SESSION['user_id'];
                
                echo "<p>($user_id)님은 이미 로그인한 상태입니다.";
                echo "<p><button class=\"new_button\" onclick=\"window.location.href='main.php'\">메인으로</button> <button class=\"new_button\" onclick=\"window.location.href='logout.php'\">로그아웃</button></p>";
            } ?>
</body>
</html>
