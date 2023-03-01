-- Bai 2.9b
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
        if(isset($_POST["toan"]) && isset($_POST["ly"]) && isset($_POST["hoa"]) && isset($_POST["dc"]))
        {
            $toan = $_POST["toan"];
            $ly = $_POST["ly"];
            $hoa = $_POST["hoa"];
            $dc = $_POST["dc"];
            $tong = $toan + $ly + $hoa;
            if($tong>=$dc && $toan>0 && $ly>0 && $hoa >0)
            {
                $kq = "Dau";
            }
            else
            {
                $kq = "Rot";
            }
        }
    ?>
    <form action="kq_thi_dh.php" method="POST">
        <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
            <tr align="center">
                <td colspan="2" bgcolor="#FFCC66"><span>KET QUA THI DAI HOC</span></td>
            </tr>
            <tr>
                <td>
                    <span>Toan :</span><input type="text" name="toan" value="<?php echo $_POST["toan"];?>"></td>
            </tr>
            <tr>
                <td>
                    <span>Ly:</span><input type="text" name="ly" value="<?php echo $_POST["ly"];?>"></td>
            </tr>
            <tr>
                <td>
                    <span>Ly:</span><input type="text" name="hoa" value="<?php echo $_POST["hoa"];?>"></td>
            </tr>
            <tr>
             <td><span>Diem chuan: </span><input type="text" name="dc" value="<?php echo $dc;?>"></td>
            </tr>
            <tr>
                <td><span>Tong diem: </span><input type="text" name="tong" value="<?php echo $tong; ?>"></td>
            </tr>
            <tr>
                <td><span>Ket qua thi: </span><input type="text" name="kq" value="<?php echo $kq;?>"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="Xem ket qua"></td>
            </tr>
        </table>
    </form>
</body>
</html>