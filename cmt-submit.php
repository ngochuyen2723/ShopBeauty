<?php
	include 'database.php';
	session_start();
	if (isset($_SESSION['customer'] ))
	{
		$sql = "SELECT max(idcmt) FROM comment"; 
    $result = mysqli_query($conn,$sql);
    $kq = mysqli_num_rows($result);
    while( $r = mysqli_fetch_row($result))
    {
        $idcmt = $r[0] +1 ;
    }
	$text = $_POST['txtcomment'];
	$idproduct = $_GET['id'];
	$iduser =  $_SESSION['customer'];
	$now = date('Y-m-d H:i:s');
	$sql1 = "INSERT into comment values ($idcmt, $iduser, $idproduct, '$text', '$now')";
	mysqli_query($conn,$sql1);
	header("location:product.php?id=$idproduct");
	}
	else header("location:login.php");
?>