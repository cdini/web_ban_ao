<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST["gbd"]) && isset($_POST["gkt"]))
    {
        $gbd = $_POST["gbt"];
        $gkt = $_POST["gkt"];

        if($gbd >= 10 && $gbd <24 && $gkt>10 && $gkt<=24)
        {
            if($gbd<$gkt)
            {
                if($gbd<=17 && $gkt<=17)
                {
                    $tien = ($gkt - $gbd) * 20000;
                }
                elseif($gbt >= 17 && $gkt>=17)
                {
                    $tien = ($gkt - $gbd) * 45000;
                }
                else
                {
                    $tien_1 = (17 - $gbd) * 20000;
                    $tien_2 = ($gkt-17) * 45000;
                    $tien = $tien_1 + $tien_2;
                }
            }
            elseif($gbd>$gkt)
            {
                $gkt = "Gio bat dau phai nho hon gio ket thuc!";     
                
            }
            elseif($gbd < 10 || $gkt < 10 || $gbd > 24 || $gkt > 24)
            {
                $gkt = "Day la gio nghi";
            }

        }
    }
    ?>
<form action="tien_karaoke.php" method="POST">
        <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
            <tr align="center">
                <td colspan="2" bgcolor="#FFCC66"><span>TÍNH TIỀN KARAOKE</span></td>
            </tr>
            <tr>
                <td>
                    <span>Giờ bắt đầu :</span><input type="text" name="gbd" value="<?php echo $_POST["gbd"];?>"></td>
            </tr>
            <tr>
                <td>
                    <span>Giờ kết thúc :</span><input type="text" name="gkt" value="<?php echo $_POST["gkt"];?>"></td>
            </tr>
            <tr>
                <td>
                    <span>Tiền thanh toán :</span><input type="text" name="tien" value="<?php echo $tien;?>"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="Tính tiền"></td>
            </tr>
        </table>
    </form>
</body>
</html>