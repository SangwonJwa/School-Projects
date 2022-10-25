

<?php 

  $db_host = "localhost";
  $db_user = "root";
  $db_password = "database302";
  $db_name = "";
  
  $con = mysqli_connect("localhost", "root", "database302", "") or die("MySQL 접속 실패!!");

  $sql0 = "DROP DATABASE kkrentcar";
  $ret0 = mysqli_query($con,$sql0);

  if($ret0) { 
    echo "kkrentcar 성공적으로 삭제됨.";
    echo "<BR>";
  } 
  else { 
  echo "kkrentcar 삭제 실패!!!"."<BR>";
  echo "실패 원인 :".mysqli_error($con);
  echo "<BR>";
  } 



  $sql = "CREATE DATABASE kkrentcar";
  $ret = mysqli_query($con, $sql);

  if($ret) { 
    echo "kkrentcar 성공적으로 생성됨.";
    echo "<BR>";
  } 
  else { 
  echo "kkrentcar 생성 실패!!!"."<BR>";
  echo "실패 원인 :".mysqli_error($con);
  } 
  
  $con = mysqli_connect("localhost", "root", "database302", "kkrentcar") or die("MySQL 접속 실패!!");

  $sql1 =" 
    CREATE TABLE if not exists empTBL
    (  
      emp_ID VARCHAR(10) NOT NULL PRIMARY KEY,
      emp_PW VARCHAR(20) NOT NULL,
      emp_Name VARCHAR(10) NOT NULL,
      birthYear INT NOT NULL,  
      emp_PN CHAR(15) NOT NULL, 
      emp_addr CHAR(30) NOT NULL, 
      id_group CHAR(10) NOT NULL DEFAULT 'ADMIN'
    )
    ";

    $sql2 = "
    CREATE TABLE if not exists userTBL
    (  
      user_ID VARCHAR(10) NOT NULL PRIMARY KEY,
      user_PW VARCHAR(20) NOT NULL,
      user_Name VARCHAR(10) NOT NULL, 
      birthYear INT NOT NULL,
      user_PN CHAR(15) NOT NULL,  
      user_addr CHAR(30) NOT NULL, 
      id_group CHAR(10) NOT NULL default 'user'
    )
    ";


    $sql3 = "
    CREATE TABLE if not exists carTBL
    ( car_Num INT NOT NULL PRIMARY KEY, 
      car_Name VARCHAR(30) NOT NULL,  
      car_Type VARCHAR(20) NOT NULL,
      car_MF VARCHAR(20) NOT NULL,    
      car_Year INT NOT NULL,          
      car_Price_per_day INT NOT NULL, 
      car_Insurance_fee INT NOT NULL, 
      car_Available INT NOT NULL   
    )
    ";

  

    $sql4 = "
    CREATE TABLE if not exists rentTBL
    (   rent_Num INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        user_ID VARCHAR(10) NOT NULL,              
        user_Name VARCHAR(10) NOT NULL,   
        car_Num INT NOT NULL,
        car_Name VARCHAR(30) NOT NULL,  
        rent_days INT NOT NULL, 
        rent_fee INT NOT NULL, 
        mDate VARCHAR(45) 
    )
    ";

    
    
 
   $ret1 = mysqli_query($con, $sql1); 
   if($ret1) { 
     echo "empTBL이 성공적으로 생성됨..";
     echo "<BR>";
   } 
   else { 
     echo "empTBL 생성 실패!!!"."<BR>";
     echo "실패 원인 :".mysqli_error($con);
     echo "<BR>";
   } 
   
   $ret2 = mysqli_query($con, $sql2);
   if($ret2) { 
    echo "userTBL이 성공적으로 생성됨..";
    echo "<BR>";
  } 
  else { 
    echo "userTBL 생성 실패!!!"."<BR>";
    echo "실패 원인 :".mysqli_error($con);
    echo "<BR>";
  } 

  $ret3 = mysqli_query($con, $sql3); 
   if($ret3) { 
     echo "carTBL이 성공적으로 생성됨..";
     echo "<BR>";
   } 
   else { 
     echo "carTBL 생성 실패!!!"."<BR>";
     echo "실패 원인 :".mysqli_error($con);
     echo "<BR>";
   } 



   $ret4 = mysqli_query($con, $sql4); 
   if($ret4) { 
     echo "car_rent 성공적으로 생성됨..";
     echo "<BR>";
   } 
   else { 
     echo "car_rent 생성 실패!!!"."<BR>";
     echo "실패 원인 :".mysqli_error($con);
     echo "<BR>";
   } 

   $sql5 = "INSERT INTO `kkrentcar`.`emptbl` (`emp_ID`, `emp_PW`, `emp_Name`, `birthYear`, `emp_PN`, `emp_addr`, `id_group`) VALUES ('jsw', 'jsw123', '좌상원', '971201', '010-6615-4610', '서울시 송파구', 'ADMIN');";
 
   $ret5 = mysqli_query($con, $sql5);
   
   $sql6 = "
    INSERT INTO carTBL VALUES
    (1111,'AVANTE','SEDAN','HYUNDAI',2022,103000,20000,1),
    (2222,'SONATA','SEDAN','HYUNDAI',2021,150000,25000,1),
    (3333,'GRANDEUR','SEDAN','HYUNDAI',2022,200000,30000,1),
    (4444,'KONA','SUV','HYUNDAI',2022,110000,21000,1),
    (5555,'TUCSON','SUV','HYUNDAI',2021,185000,29000,1),
    (6666,'K3','SEDAN','KIA',2022,104000,21000,1),
    (7777,'K5','SEDAN','KIA',2022,160000,26000,1),
    (8888,'SELTOS','SUV','KIA',2022,133000,23000,1),
    (9999,'EV6','SUV','KIA',2022,230000,29000,1),
    (1234,'BMW 320I','SEDAN','BMW',2022,340000,58000,1),
    (5678,'BENZ E 220D','SEDAN','MERCEDES',2022,420000,66000,1)
   ";

   $ret6 = mysqli_query($con,$sql6);
  
   $sql7 = "
   INSERT INTO userTBL VALUES 
  ('YJS', 'yjs123', '유재석',720814, '010-1111-1111', '서울시 강남구', 'USER'), 
  ('KHD', 'khd123',' 강호동',700611, '011-2222-2222', '서울시 서초구', 'USER'), 
  ('KKJ', 'kkj123', '김국진',650206, '019-3333-3333', '서울시 용산구', 'USER'), 
  ('KYM', 'kym123', '김용만',671130, '010-4444-4444', '서울시 강북구', 'USER'), 
  ('KJD', 'kjd123', '김제동',740203, '010-5555-5555', '서울시 마포구', 'USER'), 
  ('NHS', 'nhs123', '남희석',710706, '016-6666-6666', '서울시 강동구', 'USER'), 
  ('SDY', 'sdy123', '신동엽',710217, '010-7777-7777', '서울시 강남구', 'USER'), 
  ('LHJ', 'lhj123', '이휘재',721229, '011-8888-8888', '서울시 동작구', 'USER'), 
  ('LKK', 'lkk123', '이경규',600801, '018-9999-9999', '서울시 영등포구', 'USER'), 
  ('PSH', 'psh123', '박수홍',701027, '010-0000-0000', '서울시 서대문구', 'USER') 
   ";

   $ret7 = mysqli_query($con,$sql7);



   
   if($ret5) { 
     echo "관리자 데이터가 성공적으로 입력됨.";
     echo "<BR>";
   } 
   else { 
   echo "데이터 입력 실패!!!"."<BR>";
   echo "실패 원인 :".mysqli_error($con);
   } 

   
   if($ret6) { 
     echo "차량 데이터가 성공적으로 입력됨.";
     echo "<BR>";
   } 
   else { 
   echo "데이터 입력 실패!!!"."<BR>";
   echo "실패 원인 :".mysqli_error($con);
   } 

  
   if($ret7) { 
     echo "유저 데이터가 성공적으로 입력됨.";
     echo "<BR>";
   } 
   else { 
   echo "데이터 입력 실패!!!"."<BR>";
   echo "실패 원인 :".mysqli_error($con);
   } 

   echo "<BR><BR>";
   echo "<a href='../main.php'>[초기화면]</a>";





  mysqli_close($con);
 ?>
