<?php
session_start();
$id=$_POST['id_product'];
//$id= substr($id,8);
//$color_choose = $_POST["color_choose"];
$amount = $_POST["amount"];
$ht =  $_POST["ht"];
if(isset($_SESSION['cart'][$id]) && $ht==1)
{
	$qty = $_SESSION['cart'][$id] + $amount;
	$result = 0;
}
else
{
	$qty= $amount;
	$result = 1;
}
$_SESSION['cart'][$id]=$qty;
echo($result);
?>