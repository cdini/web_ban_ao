<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<style type="text/css">
td {
	font-size: 16px;
}
p {
	font-family: "Lucida Console", Monaco, monospace;
	font-weight: bold;
	font-size: 18px;
	color: #FFF;
}
</style>

<body>
<?php
	if(isset($_POST["a"]))
	{
		$a = $_POST["a"];
		$b = $_POST["b"];
		
		if($a==0)
		{
			if($b==0)
				$nghiem = "Phuong trinh co vo so nghiem";
			if($b!=0)
				$nghiem = "Phuong trinh vo nghiem";
		}
		else
		{
			$x = -($b/$a);
			$x = round($x,2);
			$nghiem = "x = $x";	
		}	
	}
?>		
<form name="form1" method="post" action="">
  <table width="550" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#00CCFF">
    <tr>
      <td colspan="2" align="center" bgcolor="#0033FF"><p>GIAI PHUONG TRINH BAC NHAT</p></td>
    </tr>
    <tr>
      <td width="90">Phuong trinh</td>
      <td width="246"><label for="a"></label>
        <input name="a" type="text" id="a" value="<?php echo $_POST["a"];?>" size="5"> 
      x + 
      <input name="b" type="text" id="b" value="<?php echo $_POST["b"];?>" size="5"/>
      = 0</td>
    </tr>
    <tr>
      <td>Nghiem</td>
      <td><label for="nghiem"></label>
      <input name="nghiem" type="text" id="nghiem" style="background-color:#FFC" value="<?php echo $nghiem;?>" size="45" readonly="true"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Giai phuong trinh"></td>
    </tr>
  </table>
</form>
</body>
</html>