<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<style>
table, th, td {
  border: 1px solid;
}
</style>
<table>
  <tr>
    <th>ID</th>
    <th>MÃ SẢN PHẨM</th>
    <th>TÊN SẢN PHẨM</th>
    <th>MÔ TẢ</th>
    <th>GIÁ</th>
  </tr>
</table>
<?php 
    include "config.php"; // ket noi database file config.php
      $sql = "SELECT * FROM sanpham";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
          <br>
          <td><?php echo $row['ID'];?></td>
          <td><?php echo $row['masp'];?></td>
          <td><?php echo $row['tensp'];?></td>
          <td><?php echo $row['mota'];?></td>
          <td><?php echo $row['gia']." VNĐ";?></td>
        
          <button type="button" class="btn btn-warning"><a href="edit_product.php?this_id=<?php echo $row['ID']; ?>">SỬA</a></button>
        <button type="button" class="btn btn-danger"><a href="delete_product.php?this_id=<?php echo $row['ID']; ?>">XÓA</a></button>
      </tr>
      <?php } ?> 
    <tr>
      <br>
      <button type="button" class="btn btn-success"><a href="add_product.php">THÊM</a></button>
    </tr>
</body>
</html>