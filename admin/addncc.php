<?php
include '../database.php';
$name = $_POST['ten'];
$dc = $_POST['diachi'];
$dienthoai = $_POST['dt'];
$no = $_POST['no'];
$sql = "SELECT max(id) FROM nhacungcap"; 
$result = mysqli_query($conn,$sql);
$kq = mysqli_num_rows($result);
while( $r = mysqli_fetch_row($result))
{
    $id = $r[0] +1 ;
}
$sql1 = "insert into nhacungcap values ($id,'$name',$dienthoai,'$dc',$no)";
mysqli_query ($conn,$sql1);
echo "Thêm nhà cung cấp thành công";
?>