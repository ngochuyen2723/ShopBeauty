<?php 
  include '../database.php';
  $id_remove = $_POST["id_remove"];
  $sql = "DELETE FROM user WHERE mauser = $id_remove";
  mysqli_query($conn,$sql);
?>