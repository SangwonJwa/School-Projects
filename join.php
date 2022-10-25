<HTML> 
 <HEAD> 
    
 </HEAD> 


 <html>
    <head>
        <title>Site</title>
        <META http-equiv="content-type" content="text/html; charset=utf-8"> 
        <meta name="viewport" content="width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
        <link rel="stylesheet" href="css/join.css?after">
        
        

    </head>
    <body>
        <header>
            <h2>RentCar-Service</h2>
        </header>
        <div>
        <FORM METHOD="POST" ACTION="join_result.php">
            <ul>
                <br><span class = 'necessary' >* 모든 정보는 필수 정보입니다.</span></li><br><br>
                <li><span >아이디 </span><br><input type = "text" placeholder = "아이디를 입력하세요(최대10자)" class = 'box' NAME="userID"/></li>
                <li><span '>비밀번호 </span><br><input type = "password" placeholder = "비밀번호를 입력하세요" class = 'box' NAME="userPW"/>
                <li><span >이름 </span><br><input type = "text" placeholder = "이름을 입력하세요" class = 'box' NAME="userName"/></li>
                <li><span >생년월일</span><br><input type = "text" placeholder = "예시:(990101)" class = 'box' NAME="birthYear"/>
                    
                <li><span >전화번호</span><br> <input type = "text" class = 'pbox' NAME="mobile1"/> - <input type = "text" class = 'pbox' maxlength="4" NAME="mobile2"/> - <input type = "text" class = 'pbox' maxlength="4" NAME="mobile3"/> 
                    
                <li><span >주소 </span><br><input type = "text" placeholder = "주소를 입력하세요(시와 구까지만 입력하세요)" class = 'box' NAME="addr"/></li>
                    
                <li><button>가입하기</button></li>

            </ul>
            <BR> <A id = "backtomain" HREF='login.php'> <--초기 화면</A>
        </FORM>
        </div>
    </body>
</html>

