<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>canh_huyen_tam_giac_vuong</title>
</head>
<style type="text/css">
td {
	font-size: 16px;
}
p {
	font-family: "Lucida Console", Monaco, monospace;
	font-weight: bold;
	font-size: 18px;
	color: #F99;
}
</style>

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
<form name="form1" method="post" action="">
  <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#99FF33">
    <tr>
      <td colspan="2" align="center" bgcolor="#000000"><p>CANH HUYEN TAM GIAC VUONG</p></td>
    </tr>
    <tr>
      <td width="90">Canh A</td>
      <td width="246"><label for="a"></label>
      <input name="a" type="text" id="a" value="<?php echo $_POST["a"];?>"> 
      (cm)</td>
    </tr>
    <tr>
      <td>Canh B</td>
      <td><label for="b"></label>
      <input name="b" type="text" id="b" value="<?php echo $_POST["b"];?>"></td>
    </tr>
    <tr>
      <td>Canh huyen</td>
      <td><label for="ch"></label>
      <input name="ch" type="text" id="ch" value="<?php echo $ch;?>" size="20" readonly="true" style="background-color:#FFC"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Tinh"></td>
    </tr>
  </table>
</form>

</body>
</html>