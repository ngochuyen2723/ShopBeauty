<?php
include "../database.php";
if (isset($_FILES['files']))
{
    $i =0;
    $link = "";
    while ($i < count ($_FILES['files']['name']))
    {
        $sourcePath = $_FILES['files']['tmp_name'][$i]; //  source path of the file
		$targetPath = '../images/'.$_FILES['files']['name'][$i]; // Target path where file is to be stored
        move_uploaded_file($sourcePath,$targetPath) ;
        if ($i==0) $avartar =  substr($targetPath,3);
        else $link = $link.",".substr($targetPath,3);
        $i++; // Moving Uploaded file
    }
}
$link = substr($link,1);
$name = $_POST['ten'];
$price = $_POST['gia'];
$brand = $_POST['nhanhieu'];
$sl = $_POST['soluong'];
$sale = $_POST['giam'];
$loai = $_POST['category'];
$color = $_POST['mau'];
$mota = $_POST['mota'];
$sql = "SELECT max(id) FROM product"; 
    $result = mysqli_query($conn,$sql);
    $kq = mysqli_num_rows($result);
    while( $r = mysqli_fetch_row($result))
    {
        $id = $r[0] +1 ;
    }
$sql1 = "insert into product (id,name,brand,color,price,amount,sale,descrition,category_id,image_id,image_link) values ($id,'$name','$brand','$color',$price,$sl,$sale,'$mota',$loai,$id,'$avartar')";
mysqli_query ($conn,$sql1);
$sql2 = "insert into image values ($id,'$link') ";
mysqli_query ($conn,$sql2);
echo ("Thêm sản phẩm thành công");
?>