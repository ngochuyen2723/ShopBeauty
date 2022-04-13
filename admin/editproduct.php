<?php
include '../database.php';
$id = $_POST['id'];
$name = $_POST['ten'];
$price = $_POST['gia'];
$brand = $_POST['nhanhieu'];
$sl = $_POST['soluong'];
$sale = $_POST['giam'];
$loai = $_POST['category'];
$color = $_POST['mau'];
$sql = "update product set name = '$name', price = $price, brand = '$brand', amount = $sl, sale = $sale, color = '$color', category_id = $loai where id = $id";
mysqli_query($conn,$sql);
echo "Cập nhật sản phẩm thành công";
?>