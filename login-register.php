<?php
	session_start();
	include 'database.php';
	$sql = "select max(mauser) from user";
	$result = mysqli_query($conn,$sql);
    //$kq = mysqli_num_rows($result);
    while( $r = mysqli_fetch_row($result))
    {
        $id = $r[0] +1 ;
    }
	$name = $_POST["name"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql1 = "INSERT INTO user VALUES ($id, '$name', '$address', '$phone', '$email', '$username', '$password' )";
	mysqli_query($conn,$sql1);
	$result = "Chúc mừng bạn đã đăng kí thành công";
  	echo($result);
?>