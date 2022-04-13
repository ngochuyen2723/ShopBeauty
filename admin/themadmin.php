<?php
	session_start();
	include '../database.php';
	$sql = "select max(idadmin) from admin";
	$result = mysqli_query($conn,$sql);
    //$kq = mysqli_num_rows($result);
    while( $r = mysqli_fetch_row($result))
    {
        $id = $r[0] +1 ;
    }
	$name = $_POST["fullname"];
	$role = $_POST["role"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql1 = "INSERT INTO admin VALUES ($id, '$username', '$password', '$name', $role )";
	mysqli_query($conn,$sql1);
	$result = "Thêm admin thành công";
  	echo($result);
?>