<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 table tr td p {
	color: #00F;
	font-weight: bold;
}
</style>
</head>

<body>
<?php
	if(isset($_POST["toan"]) && isset($_POST["ly"]) && isset($_POST["hoa"]) && isset($_POST["dc"]))
	{
		$toan = $_POST["toan"];
		$ly = $_POST["ly"];
		$hoa = $_POST["hoa"];
		$dc = $_POST["dc"];
		$tong = $toan + $ly +$hoa;
		
		if($tong>=$dc && $toan>0 && $ly>0 && $hoa>0)
			$kq = "Dau";
		else
			$kq = "Rot";
			
	}
?>		
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="1" align="center" bgcolor="#0099CC">
    <tr>
      <td colspan="2" align="center" bgcolor="#00CCFF"><p>KET QUA THI DAI HOC</p></td>
    </tr>
    <tr>
      <td width="147" bgcolor="#0099FF">Toan</td>
      <td width="337" bgcolor="#0099FF"><label for="toan"></label>
      <input name="toan" type="text" id="toan" value="<?php echo $_POST["toan"];?>" size="45" /></td>
    </tr>
    <tr>
      <td bgcolor="#0099FF">Ly</td>
      <td bgcolor="#0099FF"><label for="ly"></label>
      <input name="ly" type="text" id="ly" value="<?php echo $_POST["ly"];?>" size="45" /></td>
    </tr>
    <tr>
      <td bgcolor="#0099FF">Hoa</td>
      <td bgcolor="#0099FF"><label for="hoa"></label>
      <input name="hoa" type="text" id="hoa" value="<?php echo $_POST["hoa"];?>" size="45" /></td>
    </tr>
    <tr>
      <td bgcolor="#0099FF">Diem chuan</td>
      <td bgcolor="#0099FF"><label for="dc"></label>
      <input name="dc" type="text" id="dc" style="text-shadow:#F63; color:#F30" value="<?php echo $_POST["dc"];?>" size="45" /></td>
    </tr>
    <tr>
      <td bgcolor="#0099FF">Tong diem</td>
      <td bgcolor="#0099FF"><label for="tong"></label>
      <input name="tong" type="text" id="tong" value="<?php echo $tong;?>" readonly="readonly" style="background-color:#FC6"/></td>
    </tr>
    <tr>
      <td bgcolor="#0099FF">Ket qua thi</td>
      <td bgcolor="#0099FF"><label for="kq"></label>
      <input name="kq" type="text" id="kq" value="<?php echo $kq;?>" readonly="readonly" style="background-color:#FC6" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#0099FF"><input type="submit" name="submit" id="submit" value="Xem ket qua" /></td>
    </tr>
  </table>
</form>
</body>
</html>