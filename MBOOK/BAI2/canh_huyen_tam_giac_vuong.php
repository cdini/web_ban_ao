-- Bai 2.5b
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
        if(isset($_POST["a"]) && isset($_POST["b"]))
        {
            $a = $_POST["a"];
            $b = $_POST["b"];

            $a2 = pow($a,2);
            $b2 = pow($b,2);

            $tong = $a2 + $b2;
            $ch = sqrt($tong);

            $ch = round($ch,2); 
        }
    ?>
    <form action="canh_huyen_tam_giac_vuong.php" method="POST">
        <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
            <tr align="center">
                <td colspan="2" bgcolor="#FFCC66"><span>CANH HUYEN TAM GIAC VUONG</span></td>
            </tr>
            <tr>
                <td>
                    <span>Nhap canh A:</span><input type="text" name="a" value="<?php echo $_POST["a"];?>"></td>
            </tr>
            <tr>
                <td>
                    <span>Nhap canh B:</span><input type="text" name="b" value="<?php echo $_POST["b"];?>"></td>
            </tr>
            <tr>
                <td bgcolor="#FF9900">
                    <span>Canh huyen:</span><input type="text" name="ch" value="<?php echo $ch;?>"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="TINH"></td>
            </tr>
        </table>
    </form>
</body>
</html>