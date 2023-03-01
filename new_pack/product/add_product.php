<?php 
    include "config.php"; // ket noi database file config.php

    $this_id = $_GET["this_id"];
    
    if(isset($_POST["btn"]))
    {
        $masp = $_POST["masp"];
        $tensp = $_POST["tensp"];
        $mota = $_POST["mota"];
        $gia = $_POST["gia"];

        $sql = "INSERT INTO sanpham(masp,tensp,mota,gia)VALUE('$masp','$tensp','$mota','$gia')";
        mysqli_query($conn,$sql);
        header('Location: product.php');
    }

?>

<form action="add_product.php" method="POST" enctype="multipart/form-data">
    <h2>MÃ SẢN PHẨM</h2>
    <input type="text" name="masp">
    <h2>TÊN SẢN PHẨM</h2>
    <input type="text" name="tensp">
    <h2>MÔ TẢ</h2>
    <input type="text" name="mota">
    <h2>GIÁ</h2>
    <input type="text" name="gia">
    <input type="submit" name="btn" value="ADD PRODUCT">
</form>