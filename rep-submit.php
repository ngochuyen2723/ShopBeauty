<?php
	include 'database.php';
	session_start();
	if (isset($_SESSION['customer'] ))
	{
	$sql = "SELECT max(idrep) FROM reply"; 
    $result = mysqli_query($conn,$sql);
    while( $r = mysqli_fetch_row($result))
    {
        $idrep = $r[0] +1 ;
    }
	$iduser = $_SESSION['customer'];
	$text = $_POST['txtreply'];
	$idcmt = $_GET['idcmt'];
	$id = $_GET['id'];
	$now = date('Y-m-d H:i:s');
	$sql1 = "INSERT into reply values ($idrep, $iduser, $idcmt, '$text', '$now')";
	mysqli_query($conn,$sql1);
	header("location:product.php?id=$id");
	}
	else header("location:login.php");
?>