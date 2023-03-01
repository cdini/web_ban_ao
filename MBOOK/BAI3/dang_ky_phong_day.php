<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="dang_ky_phong_day.php" method="GET">
        <div class=e1_2>
    <div class=e1_16>
        <div class="e1_3"></div>
        <div class="e1_6"></div>
    </div>
    <tr>
        <td><div class=e1_13><span  class="e1_7">phòng số : </span></td>
    </tr>
    <tr>
        <td><span class="e1_8">giáo sư giảng dạy: </span></td>
    </tr>
    <tr>
        <td><span   class="e1_9">Ngày/Tháng/Năm : </span></td>
    </tr>
</div>
    <div class=e1_12>
    <tr>
        <td><input type="submit" class="e1_11" value="GHI NHAN" name="btn"></td>
    </tr>    
    </div><span class="e1_4">DANG KY PHONG DAY</span>
   <tr>
    <td>
        <select name="phong" id="phong" class="e1_15">
            <option value="A001">A001</option>
            <option value="A002">A002</option>
            <option value="A003">A003</option>
            <option value="A004">A004</option>
        </select>
    </td>
   </tr>
    <tr>
        <td><input type="text" class="e1_17" name="gv" value="<?php $_GET['gv'];?>"></td>
    </tr>    
       <tr>
        <td>
            <select name="ngay" id="ngay" class="e1_18">
        </td>
       </tr>
        <?php 
            list($hour, $minute, $second, $month, $day, $year) =  preg_split(':', date('h:i:s:m:d:Y'));




            // gan danh sach ngay cho list/menu
            for($i = 0;$i < 14; ++$i)
            {
                $timetamp = mktime($hour ,  $minute,  $second,  $month, $day + $i, $year);
                $date = date("d/ m / Y", $timetamp);
                echo "<option value='$date'>$date</option>";
            }
        ?>
    </select>
    </div>
    </form>
    <?php 
        if(isset($_GET['btn']))
        {
            $phong = $_GET['phong'];
            $ngay = $_GET['ngay'];
            $gv = $_GET['gv'];
            echo "<table width='400' border='0' align='center' cellpadding='3' cellspacing='3' bgcolor='black' class='style52'>";
            echo "<tr><td align='center'>";
            echo "Ngay".$ngay."</br>";
            echo "Giao su: ".$gv."Se day tai phong: ".$phong."";
            echo "</td></tr></table>";
        }
    ?>
</body>
</html>