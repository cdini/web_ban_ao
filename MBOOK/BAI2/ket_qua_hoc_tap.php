-- Bai 2.8b
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
        if(isset($_POST["hk1"]) && isset($_POST["hk2"]))
        {
            $hk1 = $_POST["hk1"];
            $hk2 = $_POST["hk2"];
            $dtb = ($hk1 + $hk2 * 2)/3;
            $dtb = round($dtb,2);
            if($dtb>=5)
                $kq = "Duoc len lop";
            else 
                $kq = "O lai lop";


            if($dtb >= 8)
                $xeploai = "Gioi";
            elseif($dtb>=6.5 && $dtb<8)
                $xeploai = "Kha";
            elseif($dtb>=5 && $dtb < 6.5)
                $xeploai = "Trung binh";
            else
                $xeploai = "Yeu"; 
        }
    ?>
    <form action="ket_qua_hoc_tap.php" method="POST">
        <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
            <tr align="center">
                <td colspan="2" bgcolor="#FFCC66"><span>KET QUA HOC TAP</span></td>
            </tr>
            <tr>
                <td>
                    <span>Diem HK1:</span><input type="text" name="hk1" value="<?php echo $_POST["hk1"];?>"></td>
            </tr>
            <tr>
                <td>
                    <span>DIEM HK2:</span><input type="text" name="hk2" value="<?php echo $_POST["hk2"];?>"></td>
            </tr>
            <tr>
                <td>
                    <span>Diem trung binh: </span><input type="text" name="dtb" value="<?php echo $dtb; ?>"></td>
            </tr>
            <tr>
             <td><span>Ket qua: </span><input type="text" name="kq" value="<?php echo $kq;?>"></td>
            </tr>
            <tr>
                <td><span>Xep loai hoc luc: </span><input type="text" name="xeploai" value="<?php echo $xeploai; ?>"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="Xem ket qua"></td>
            </tr>
        </table>
    </form>
</body>
</html>