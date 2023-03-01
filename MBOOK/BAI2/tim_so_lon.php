-- Bai 2.6b
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
            $so_lon = $_POST["solon"];
            if($a>$b)
            {
                $so_lon = $a;
            }
            else
            {
                $so_lon = $b;
            }
        }
    ?>
    <form action="tim_so_lon.php" method="POST">
        <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
            <tr align="center">
                <td colspan="2" bgcolor="#FFCC66"><span>TIM SO LON NHAT</span></td>
            </tr>
            <tr>
                <td>
                    <span>So A:</span><input type="text" name="a" value="<?php echo $_POST["a"];?>"></td>
            </tr>
            <tr>
                <td>
                    <span>So B:</span><input type="text" name="b" value="<?php echo $_POST["b"];?>"></td>
            </tr>
            <tr>
                <td bgcolor="#FF9900">
                    <span>So lon hon:</span><input type="text" name="solon" value="<?php echo $so_lon;?>"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="TINH"></td>
            </tr>
        </table>
    </form>
</body>
</html>