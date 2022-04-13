<?php 
    $SERVER = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "shopbeauty";
    $conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD);
    if (!$conn)
    {
        die ("Không kết nối được vào MYSQL server").error($conn);
    }
    mysqli_query ($conn,"SET NAMES 'utf8'");
    mysqli_select_db ($conn,$DBNAME);
?>