<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tim_so_lon_nhat</title>
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
		
		if($a>=$b)
			$so_lon = $a;
		else
			$so_lon = $b;
	}
?>		
<form name="form1" method="post" action="">
  <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#00CCFF">
    <tr>
      <td colspan="2" align="center" bgcolor="#0033FF"><p>Tim so lon hon</p></td>
    </tr>
    <tr>
      <td width="90">So A</td>
      <td width="246"><label for="a"></label>
      <input name="a" type="text" id="a" value="<?php echo $_POST["a"];?>"></td>
    </tr>
    <tr>
      <td>So B</td>
      <td><label for="b"></label>
      <input name="b" type="text" id="b" value="<?php echo $_POST["b"];?>"></td>
    </tr>
    <tr>
      <td>So lon hon</td>
      <td><label for="so_lon"></label>
      <input name="so_lon" type="text" id="so_lon" value="<?php echo $so_lon;?>" readonly="true" style="background-color:#FFC"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Tinh"></td>
    </tr>
  </table>
</form>
</body>
</html>