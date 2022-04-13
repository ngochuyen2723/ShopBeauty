<?php
session_start();
$cart=$_SESSION['cart'];
$id=$_POST['id_remove'];
if($id == 0)
{
	unset($_SESSION['cart']);
}
else
{
unset($_SESSION['cart'][$id]);
}
$result = "Xóa thành công";
  echo($result);
exit();
?>