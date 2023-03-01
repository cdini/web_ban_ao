
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Theo doi hoc tap</title>
</head>
<body>
  <?php
    class phep_tinh
    {
      var $so_thu_nhat;
      var $so_thu_hai;

      function lay_gt_1()
      {
        return $this->so_thu_nhat;
      }
      function thiet_lap_gt_1($gia_tri_moi)
      {
        $this->so_thu_nhat = $gia_tri_moi;
      }
      function lay_gt_2()
      {
        return $this->so_thu_hai;
      }
      function thiet_lap_gt_2($gia_tri_moi)
      {
        $this->so_thu_hai = $gia_tri_moi;
      }
      function tinh_tong()
      {
        return $this->so_thu_nhat+$this->so_thu_hai;
      }

    }
  ?>
<form id="form1" name="form1" method="post" action="phep_tinh.php">
  <table width="688" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="3" align="center" bgcolor="#33CCFF"><p>THEO DÕI HỌC TẬP</p></td>
    </tr>
    <tr>
      <td width="300" bgcolor="#CCCCCC">So thu nhat: </td>
      <td width="144" align="center" bgcolor="#CCCCCC"><label for="so_thu_nhat"></label>
      <input type="text" name="so_thu_nhat" id="ho_ten" /></td>
      <td width="224" rowspan="5" align="center" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">So thu hai: </td>
      <td align="center" bgcolor="#CCCCCC"><label for="so_thu_hai"></label>
      <input type="text" name="so_thu_hai" id="gvpt" /></td>
    </tr>
    <tr>
        <td> <input type="radio" id="age1" name="age" value="30">
        <label for="age1">Cong</label><br>
        <input type="radio" id="age2" name="age" value="60">
        <label for="age2">Tru</label><br>  
        <input type="radio" id="age3" name="age" value="100">
        <label for="age3">Nhan</label><br><br>
        <input type="radio" id="age3" name="age" value="100">
        <label for="age3">Chia</label><br><br>
    </tr>
    <tr>
      <td colspan="3" align="center" bgcolor="#FFFF99"><input type="submit" name="phep_tinh" id="button" value="TINH" /></td>
    </tr>
  </table>
</form>
<p>

</p>
<table width="644" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td align="center" bgcolor="#FF6666">KET QUA</td>
  </tr>
  <tr>
    <td bgcolor="#00FFCC">Ket qua la:<?php echo $ho_ten;?> Lớp:<?php echo $lop;?></td>
  </tr>
</table>
<p>
 
</p>
</body>
</html>