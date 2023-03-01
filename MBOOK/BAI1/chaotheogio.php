<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<style type="text/css">
td {
	font-size: 16px;
	color: #000000;
}
p {
	font-family: "Lucida Console", Monaco, monospace;
	font-weight: bold;
	font-size: 18px;
	color: #00F;
}
</style>

<body>
<?php
	if(isset($_POST["a"]))
	{
		$a = $_POST["a"];
		$so_lon = "";
		
		if($a<13 && $a>=0)
		{
			$so_lon = "Chao buoi sang";
		}
		elseif($a<19 && $a>= 13)
		{
			$so_lon = "Chao buoi chieu";
		}
		else
			$so_lon = "Chao buoi toi";
	}
?>		
<form name="form1" method="post" action="">
  <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#00CCFF">
    <tr>
      <td colspan="2" align="center" bgcolor="#00CCFF"><p>Chao theo gio</p></td>
    </tr>
    <tr>,
      <td width="112" bgcolor="#00CCCC">Nhap gio</td>
      <td width="224" bgcolor="#00CCCC"><label for="a"></label>
      <input name="a" type="text" id="a" value="<?php echo $_POST["a"];?>"></td>
    </tr>
    <tr>
      <td height="33" colspan="2" align="center" bgcolor="#00CCCC"><label><?php echo $so_lon;?></label></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#00CCFF"><input type="submit" name="submit" id="submit" value="Chao"></td>
    </tr>
  </table>
</form>
</body>
</html>