<?php 
  include '../database.php';
  $id_remove = $_POST["id_remove"];
  //echo json_encode($id_remove);
  $sql = "DELETE FROM nhacungcap WHERE id = $id_remove";
  mysqli_query($conn,$sql); 
?>