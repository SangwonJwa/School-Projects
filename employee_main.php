<?php session_start(); ?>


<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>Admin page</title>
    <meta name="viewport" content="width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
    <link rel="stylesheet" href="css/emp_main.css?after">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Philosopher">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
</head>

<body>
    <header class="page-header wrapper">
        <h1> <a id = "logo" href="employee_main.php">Rentcar-Service</a></h1>
        <nav>
            <ul class="main-nav">
            <?php
                $user_id = $_SESSION['user_id'];
                echo "<li>LOGIN ID : $user_id</li>";
            ?>
            <li><a href="logout.php">logout</a></li>
        </nav>
    </header>
    
    

    <div class="home-content wrapper" id = "body-main">
    
    <div class="wrapper grid">

            <a href="manage_file/car_mng.php">
            <div class="item">
                <img src="img/car.png" alt="" style="width:200px; height:200px;"/>
                <br></br>
                <p>차량관리</p>
            </div>
            </a>

            <a href="manage_file/user_mng.php">
            <div class="item">
                <img src="img/people.png" alt="" style="width:200px; height:200px;"/>
                <br></br>
                <p>회원관리</p>
            </div>
            </a>

            <a href="manage_file/rent_mng.php">
            <div class="item">
                <img src="img/car-rental.png" alt="" style="width:200px; height:200px;"/>
                <br></br>
                <p>예약관리</p>
            </div>
            </a>
    </div>
    
    </div>

    <footer>
        <div class="comp-info wrapper">
            <div id="companyinfo">
                <h1><small>&copy; KKrent</small></h1>
                <p><small>회사명 : 건국렌터카</small><p>
                <p><small>대표자 : 201821067 좌상원 </small><p>
                <p><small>주소 : 서울특별시 강남구 테헤란로 99길-99</small><p>
            </div>

            <div id="serviceinfo">
                
                <h2><small> 고객센터 </small></h2>
                <p><small>번호 : 02-1234-5678</small><p>
                <p><small>운영시간 : 주중 09:00 ~ 18:00 (공휴일 제외)</small><p>
                <p><small>E-Mail : kkrent@kku.ac.kr</small><p>
            </div>

        </div>
    </footer>

</body>

</html>

