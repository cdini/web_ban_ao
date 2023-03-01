<?php 
    include "config.php"; // ket noi database file config.php

   $this_id = $_GET["this_id"];

   echo "đã xóa sản phẩm ".$this_id;

   $sql = "DELETE FROM sanpham WHERE ID='$this_id'";
   mysqli_query($conn,$sql);
   header('Location: product.php');
?>