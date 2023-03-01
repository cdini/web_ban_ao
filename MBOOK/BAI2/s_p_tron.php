-- Bai 2.4a
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table, th, td {
  border: 1px solid;
}
    </style>
    <?php
      if(isset($_POST["r"]))
      {
      $r=$_POST["r"];
      define("PI",3.14);
      $dt=PI*pow($r,2);
      $cv=2*PI*$r;
      }
    ?>
    <form action="s_p_tron.php" method="POST">
    <table width="500" border="0" align=”center” bordercolor="#FFFF99" bgcolor="#FFFF99">
        <h1>Dien tich va chu vi hinh tron</h1>
        <tr>
            <td>
               <label>Bán kính: </label> <input type="text" name="r" value="<?php echo $_POST["r"];?>"/>
            </td>
        </tr>
        <tr>
            <td  colspan="2" align="center" bgcolor="#FF9900">
                <label for="">Dien tich: </label><input type="text" name="dt" value="<?php echo $dt;?>"/>
            </td>
        </tr>
        <tr>
            <td  colspan="2" align="center" bgcolor="#FF9900">
                <label for="">Chu vi: </label><input type="text" name="cv" value="<?php echo $cv;?>"/>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="TINH" >
            </td>
        </tr>
    </table>
    </form>
</body>
</html>