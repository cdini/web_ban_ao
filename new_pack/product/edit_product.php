<?php 
    include "config.php"; // ket noi database file config.php

    $this_id = $_GET["this_id"];
    
    $sql = "SELECT * FROM sanpham WHERE ID='$this_id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST["btn"]))
    {
        $masp = $_POST["masp"];
        $tensp = $_POST["tensp"];
        $mota = $_POST["mota"];
        $gia = $_POST["gia"];

        $sql = "UPDATE sanpham SET masp='$masp', tensp='tensp', mota='$mota', gia='$gia' WHERE ID='$this_id'";

        mysqli_query($conn,$sql);
        header('Location: product.php');
    }
    
?>

<form action="add_product.php" method="POST" enctype="multipart/form-data">
    <h2>MÃ SẢN PHẨM</h2>
    <input type="text" name="masp" value="<?php echo $row['masp']?>">
    <h2>TÊN SẢN PHẨM</h2>
    <input type="text" name="tensp" value="<?php echo $row['tensp']?>">
    <h2>MÔ TẢ</h2>
    <input type="text" name="mota" value="<?php echo $row['mota']?>">
    <h2>GIÁ</h2>
    <input type="text" name="gia" value="<?php echo $row['gia']?>">
    <input type="submit" name="btn" value="UPDATE PRODUCT">
</form>