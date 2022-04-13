<?php 
  include '../database.php';
  $id_remove = $_POST["id_remove"];
  //echo json_encode($id_remove);
  $sql = "DELETE FROM cthd WHERE sohd = $id_remove";
  mysqli_query($conn,$sql);
  $sql1 = "DELETE FROM hoadon WHERE sohd = $id_remove";
  mysqli_query($conn,$sql1);
 
?>