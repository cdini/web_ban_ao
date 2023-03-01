<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ket_qua_hoc_tap</title>
<style type="text/css">
#form1 table tr td p {
	color: #00F;
	font-weight: bold;
}
</style>
</head>

<body>
<?php
	if(isset($_POST["hk1"]) && isset($_POST["hk2"]))
	{
		$hk1 = $_POST["hk1"];
		$hk2 = $_POST["hk2"];
		$tb = ($hk1 + $hk2 *2)/3;
		
		if($tb>=5)
			$kq = "Duoc len lop";
		else
			$kq = "O lai lop";
			
		if($tb>=8)
		{
			$xl = "Gioi";
		}
		else if($tb<8 && $tb>=6.5)
		{
			$xl = "Kha";
		}
		else if($tb<6.5 && $tb>=5)
		{
			$xl = "Trung binh";
		}
		else
		{
			$xl = "Yeu";
		}
	}
?>		
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="1" align="center" bgcolor="#0099CC">
    <tr>
      <td colspan="2" align="center" bgcolor="#00CCFF"><p>KET QUA HOC TAP</p></td>
    </tr>
    <tr>
      <td width="147" bgcolor="#0099FF">Diem HK 1</td>
      <td width="337" bgcolor="#0099FF"><label for="hk1"></label>
      <input name="hk1" type="text" id="hk1" value="<?php echo $_POST["hk1"];?>" size="45" /></td>
    </tr>
    <tr>
      <td bgcolor="#0099FF">Diem HK 2</td>
      <td bgcolor="#0099FF"><label for="hk2"></label>
      <input name="hk2" type="text" id="hk2" value="<?php echo $_POST["hk2"];?>" size="45" /></td>
    </tr>
    <tr>
      <td bgcolor="#0099FF">Diem trung binh</td>
      <td bgcolor="#0099FF"><label for="tb"></label>
      <input name="tb" type="text" id="tb" value="<?php echo $tb;?>" readonly="readonly" style="background-color:#FC6" /></td>
    </tr>
    <tr>
      <td bgcolor="#0099FF">Ket qua</td>
      <td bgcolor="#0099FF"><label for="kq"></label>
      <input name="kq" type="text" id="kq" value="<?php echo $kq;?>" readonly="readonly" style="background-color:#FC6"/></td>
    </tr>
    <tr>
      <td bgcolor="#0099FF">Xep loai hoc luc</td>
      <td bgcolor="#0099FF"><label for="xl"></label>
      <input name="xl" type="text" id="xl" value="<?php echo $xl;?>" readonly="readonly" style="background-color:#FC6" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#0099FF"><input type="submit" name="submit" id="submit" value="Xem ket qua" /></td>
    </tr>
  </table>
</form>
</body>
</html>