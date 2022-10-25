<HTML lang="ko">
    <HEAD>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
        <link rel='stylesheet' href='../../css/user_check.css?after' type='text/css'>
    </HEAD>

    <body>

        <?php
            $car_Num = $_GET['car_Num'];
        ?>

        <form action='do_rent_result2.php' class='day-select' method='post' style='height:100px; margin-top:25%; margin-left:17%; font-size:130%;'>
            대여 일수: &nbsp; <select name = 'days'> &nbsp; &nbsp; 
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
                <option value=7>7</option>
            </select>
            &nbsp; &nbsp;
            차량 번호: &nbsp; <input type='text' name='car_Num' value= '<?php echo "$car_Num"?>'>
            &nbsp;
            <input type="submit" value='선택'>
        </form>
    </body>



</HTML>




