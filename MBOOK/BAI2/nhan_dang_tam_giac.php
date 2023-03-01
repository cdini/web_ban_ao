
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
    if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]))
    {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        if($a+$b>$c && $a+$c>$b && $c+$b>$a)
        {
            if($a==$b && $b==$c)
                $loai = "Tam giac deu";
            elseif(($a==$b || $a==$c || $b==$c) && (pow($a,2)==pow($b,2)+pow($c,2) || pow($b,2) == pow($c,2)+pow($a,2) || pow($c,2) == pow($a,2)+pow($b,2)))
                $loai = "Tam giac vuong can";
            elseif($a==$b || $a==$c || $b==$c)
                $loai = "Tam giac can";
            else
                $loai = "Tam giac thuong";
        }
        else
        {
            $loai = "Khong la tam giac";
        }
    }
    ?>
<form action="nhan_dang_tam_giac.php" method="POST">
        <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
            <tr align="center">
                <td colspan="2" bgcolor="#FFCC66"><span>LOAI TAM GIAC</span></td>
            </tr>
            <tr>
                <td>
                    <span>Canh 1 :</span><input type="text" name="a" value="<?php echo $_POST["a"];?>"></td>
            </tr>
            <tr>
                <td>
                    <span>Canh 2 :</span><input type="text" name="b" value="<?php echo $_POST["c"];?>"></td>
            </tr>
            <tr>
                <td>
                    <span>Canh 3 :</span><input type="text" name="c" value="<?php echo $_POST["c"];?>"></td>
            </tr>
            <tr>
                <td>
                    <span>Canh Loai tam giac :</span><input type="text" name="tien" value="<?php echo $loai;?>"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="Tính tiền"></td>
            </tr>
        </table>
    </form>
</body>
</html>