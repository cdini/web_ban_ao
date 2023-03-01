<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dinh dang mau chu - mau nen</title>
<style type="text/css">
body p {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-style: oblique;
	text-transform: none;
	font-weight: bold;
}
body p {
	color: #FFF;
}
</style>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFCCCC">
    <tr bgcolor="#33FFFF">
      <td colspan="2" align="center" bgcolor="#00FFFF"><p><em>DINH MAU CHU - MAU NEN</em></p></td>
    </tr>
    <tr>
      <td width="100">Noi dung</td>
      <td width="286"><label for="noi_dung"></label>
      <input name="noi_dung" type="text" id="noi_dung" value="<?php echo $_POST["noi_dung"];?>" size="40"></td>
    </tr>
    <tr>
      <td>Mau chu</td>
      <td><label for="mau_chu"></label>
      <input name="mau_chu" type="text" id="mau_chu" value="<?php echo $_POST["mau_chu"];?>" size="20"></td>
    </tr>
    <tr>
      <td>Mau nen</td>
      <td><label for="mau_nen"></label>
      <input name="mau_nen" type="text" id="mau_nen" value="<?php echo $_POST["mau_nen"];?>" size="20"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Xem ket qua"></td>
    </tr>
  </table>
</form>
<?php
	$mau_chu = $_POST["mau_chu"];
	$mau_nen = $_POST["mau_nen"];
	$noi_dung = $_POST["noi_dung"];
?>
<p>&nbsp;</p>
<table width="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#<?php echo $mau_nen;?>">
  <tr>
    <td align="center"><font color="#<?php echo $mau_chu;?>"><?php echo $noi_dung;?></font></td>
  </tr>									
</table>
</body>
</html>