<?php session_start();?>

<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>Admin page</title>
    <meta name="viewport" content="width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
    <link rel="stylesheet" href="../css/manage.css?after">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Philosopher">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <style>
        * {box-sizing: border-box}
        body {font-family: "Lato", sans-serif;}
        
        /* Style the tab */
        .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        width: 20%;
        height: 700px;
        }
        
        /* Style the buttons inside the tab */
        .tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 22px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 17px;
        
        }
        
        /* Change background color of buttons on hover */
        .tab button:hover {
        background-color: #ddd;
        }
        
        /* Create an active/current "tab button" class */
        .tab button.active {
        background-color: #ccc;
        }
        
        /* Style the tab content */
        .tabcontent {
        float: left;
        padding: 0px 12px;
        border: 1px solid #ccc;
        width: 80%;
        border-left: none;
        height: 700px;
        }

        .tabinside {
            width:100%;
            height:100%;
        }
        </style>

</head>

<body>
    <header class="page-header wrapper">
        <h1> <a id = "logo" href="../employee_main.php">Rentcar-Service</a></h1>
        <nav>
            <ul class="main-nav">
            <?php
                $user_id = $_SESSION['user_id'];
                echo "<li>LOGIN ID : $user_id</li>";
            ?>
            <li><a href="../employee_main.php">home</a><li>
            <li><a href="../logout.php">logout</a></li>
        </nav>
    </header>
    
    

    <div class="home-content wrapper" id = "body-main">
        
        <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Seoul')" id = "defaultOpen">MENU</button>
        <button class="tablinks" onclick="openCity(event, 'London')">1. 회원정보</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">2. 회원정보 수정</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">3. 회원 삭제</button>
        </div>

        <div id="Seoul" class="tabcontent">
            <iframe class="tabinside" src="../function_file/blank.php"></iframe>
        </div>

        <div id="London" class="tabcontent">
            <iframe class="tabinside" src="../function_file/user_check.php"></iframe>
        </div>

        <div id="Paris" class="tabcontent">
            <iframe class="tabinside" src="../function_file/user_update.php"></iframe>
        </div>

        <div id="Tokyo" class="tabcontent">
            <iframe class="tabinside" src="../function_file/user_delete.php"></iframe>
        </div>
    
    </div>

    <script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
    </script>



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

