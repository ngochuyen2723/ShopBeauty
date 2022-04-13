<?php 
  include 'database.php';
  session_start();
  date_default_timezone_set('Asia/Ho_Chi_Minh');
    $sql = "SELECT max(sohd) FROM hoadon"; 
    $result = mysqli_query($conn,$sql);
    $kq = mysqli_num_rows($result);
    while( $r = mysqli_fetch_row($result))
    {
        $sohd = $r[0] +1 ;
    }

  $ngay = date('Y/m/d H:i:s');
  $khachhang = $_POST["name"];
  $sodienthoai = $_POST["phone"];
  $diachi = $_POST["address"];
  $tienship = "40000";
  $vat = "0.1";
  $giatri = $_POST["sum_price"];

  $sql1 = "INSERT INTO hoadon VALUES ($sohd, '$ngay', '$khachhang', '$sodienthoai','$diachi','$tienship','$vat','$giatri')";
  mysqli_query($conn,$sql1);
  $item = array();
  if(isset($_SESSION['cart']))
  {
      foreach($_SESSION['cart'] as $key => $value)
      {
        $item[]=(int)$key;
      }
  }
  $str=implode(",",$item);
  $sql2 = "SELECT * FROM product where id in ($str) ";
  $result = mysqli_query($conn,$sql2);
  while( $r = mysqli_fetch_array($result))
  {
    $idsp = $r['id'];
    $sale = $r["sale"]; 
    $soluong = $_SESSION['cart'][$r['id']];
    if ($sale != 0) $sum_price = $r['price']  * $soluong * (1- ($sale/100));
    else $sum_price = $r['price']  * $soluong;
    $sql3 = "INSERT INTO cthd VALUES ($sohd, $idsp, $soluong, $sum_price)";
    mysqli_query($conn,$sql3);
  }
  //echo ("Chúc mừng bạn đã đặt hàng thành công");
  unset($_SESSION['cart']);
?>