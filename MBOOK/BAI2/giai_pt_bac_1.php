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
    <form action="giai_pt_bac_1.php" method="POST">
        <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
            <tr align="center">
                <td colspan="2" bgcolor="#FFCC66"><span>KET QUA THI DAI HOC</span></td>
            </tr>
            <tr>
                <td><input type="text"><X></X>
                <input type="text"></td>
            </tr>
            <tr>
                <td><span>Nghiem</span><input type="text" name="nghiem"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="Xem ket qua"></td>
            </tr>
        </table>
    </form>
</body>
</html>