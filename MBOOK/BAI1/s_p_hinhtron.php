<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
td {
	font-size: 16px;
}
p {
	font-family: "Lucida Console", Monaco, monospace;
	font-weight: bold;
	font-size: 18px;
	color: #FF6;
}
</style>
</head>

<body>
<?php
	if(isset($_POST["r"]))
	{
		$r = $_POST["r"];
		define("PI",3.14);
		$dt = PI * pow($r,2);
		$cv = 2*PI*$r;
	}
?>		
<form name="form1" method="post" action="">
  <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFCC66">
    <tr>
      <td colspan="2" align="center" bgcolor="#FF6666"><p>DIEN TICH VA CHU VI HINH TRON</p></td>
    </tr>
    <tr>
      <td width="76">Ban kinh</td>
      <td width="260"><label for="r"></label>
      <input name="r" type="text" id="r" value="<?php echo $_POST["r"];?>"> 
      (cm)</td>
    </tr>
    <tr>
      <td>Dien tich</td>
      <td><label for="dt"></label>
      <input name="dt" type="text" id="dt" value="<?php echo $dt;?>" size="20" readonly="true" style="background-color:#FCC"></td>
    </tr>
    <tr>
      <td>Chu vi</td>
      <td><label for="cv"></label>
      <input name="cv" type="text" id="cv" value="<?php echo $cv;?>" size="20" readonly="true" style="background-color:#FFC"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Tinh"></td>
    </tr>
  </table>
</form>
</body>
</html>