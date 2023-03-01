<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Theo doi hoc tap</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="theo_doi_hoc_tap.php">
  <table width="688" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="3" align="center" bgcolor="#33CCFF"><p>THEO DÕI HỌC TẬP</p></td>
    </tr>
    <tr>
      <td width="300" bgcolor="#CCCCCC">Họ tên học sinh</td>
      <td width="144" align="center" bgcolor="#CCCCCC"><label for="ho_ten"></label>
      <input type="text" name="ho_ten" id="ho_ten" /></td>
      <td width="224" rowspan="5" align="center" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Giáo viên phụ trách</td>
      <td align="center" bgcolor="#CCCCCC"><label for="gvpt"></label>
      <input type="text" name="gvpt" id="gvpt" /></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#CCCCCC"><p>Lớp
          <label for="lop"></label>
      <input name="lop" type="text" id="lop" size="10"/>
      </p>
        <p>Ngày
  <label for="ngay"></label>
          <input name="ngay" type="text" id="ngay" size="20" />
      </p></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#CCCCCC">Những công việc chưa làm</td>
    </tr>
    <tr>
      <td height="38" colspan="2" bgcolor="#CCCCCC"><label for="cong_viec"></label>
      <textarea name="cong_viec" cols="70" id="cong_viec"></textarea></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#CCCCCC">Chọn hình thức hoàn thành</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><input name="tai_lop" type="checkbox" id="tai_lop" value="Tại lớp" />
        <label for="tai_lop"></label>
      Những việc chưa làm sẽ hoàn thành sẽ làm tại lớp</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><input name="tai_nha" type="checkbox" id="tai_nha" value="Tại nhà" />
        <label for="tai_nha"></label>
      Những việc chưa làm sẽ hoàn thành tại nhà</td>
      <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
      <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" align="center" bgcolor="#FFFF99"><input type="submit" name="button" id="button" value="Ghi nhận" /></td>
    </tr>
  </table>
</form>
<p>
  <?php
	if(isset($_POST["ho_ten"]))
	{
		$ho_ten = $_POST["ho_ten"];
		$gvpt = $_POST["gvpt"];
		$lop = $_POST["lop"];
		$ngay = $_POST["ngay"];
		$cong_viec = $_POST["cong_viec"];
		$tai_lop = $_POST["tai_lop"];
		$tai_nha = $_POST["tai_nha"];
		
		$chuoi = "";
		if($tai_lop != "")
			$chuoi = $tai_lop;
		if($tai_nha != "")
			$chuoi = $chuoi . " - " . $tai_nha;
?>
</p>
<table width="644" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td align="center" bgcolor="#FF6666">THÔNG TIN PHIẾU THEO DÕI</td>
  </tr>
  <tr>
    <td bgcolor="#00FFCC">Tên học sinh:<?php echo $ho_ten;?> Lớp:<?php echo $lop;?></td>
  </tr>
  <tr>
    <td bgcolor="#00FFCC">Nhày đăng ký:<?php echo $ngay;?> - Giáo viên phụ trách:<?php echo $gvpt;?></td>
  </tr>
  <tr>
    <t
    
    
    d bgcolor="#00FFCC">Những công việc đã được phân công nhưng chưa hoàn thành</td>
  </tr>
  <tr>
    <td bgcolor="#00FFCC">&nbsp;<?php echo $chuoi;?></td>
  </tr>
  <tr>
    <td bgcolor="red">Cam kết sẽ hoàn thành</td>
  </tr>
</table>
<?php
	}
?>
<p>
 
</p>
</body>
</html>