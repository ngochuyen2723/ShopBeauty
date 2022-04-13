<?php 
  include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    
    <title>Thời trang</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style type="text/css">
      #news-container {
        left: 0;
        width: 97%;
        margin-top: 100px;
      }
      #newest{
        padding-bottom: 1.5em;
        padding-top: 1.5em;
        padding-left: 1.5em;
        padding-right: 1.5em;
        background: #EFEFEF;
        border: 1px solid#E8E8E8;
      }
      #others{
        padding-bottom: 0.75em;
        padding-top: 0.75em;
        padding-left: 1.5em;
        padding-right: 1.5em;
        background: #EFEFEF;
        border: 1px solid#E8E8E8;
      }
      img {
        float: left;
        margin-right: 0.5em;
      }
    </style>
  </head>
  <body>
    <?php
  	 include('header.php');
  	?>
  <div class="container" style="margin-top: -80px">
    <div id="news-container">
      <h1><b>LÀM ĐẸP</b></h1>
     <div id='noidung'> 
            <div id="newest" class="row">
      <?php
       $sql = 'SELECT * from bangtin where idnhom = 1 order by idtin desc limit 1';
       $result = mysqli_query($conn,$sql);
    while ($r = mysqli_fetch_array($result)){
         $id=$r['idtin'];
         $idn=$r['idnhom'];
         $tieude=$r['tieude'];
         $trichdan=$r['trichdan'];
       ?>
          <a href="newsdetail.php?idn=<?php echo $idn ?>&id=<?php echo $id ?>"><img src="<?php echo $r['anhtrichdan']  ?>" width="600" height="300"  style="float:left;"/></a>
      <?php
         echo "<b><big><a href = 'newsdetail.php?idn=$idn&id=$id'>$tieude</a></b></big>";
         echo "<i><br><br>$trichdan<br><br></i>";
       }
           ?>
       </div>
       <h2><i>Tin cũ hơn</i></h2>
       <?php
       $sql1 = "SELECT * from bangtin where idnhom = 1 and idtin !='$id' limit 10";
       $result1 = mysqli_query($conn,$sql1);
       while ($r = mysqli_fetch_array($result1)){
         $id=$r['idtin'];
         $idn=$r['idnhom'];
         $tieude=$r['tieude'];
         $trichdan=$r['trichdan'];
          ?>
      <div id="others" class="row">
          <a href="newsdetail.php?idn=<?php echo $idn ?>&id=<?php echo $id ?>"><img src="<?php echo $r['anhtrichdan']  ?>" width="360" height="180"  style="float:left;"/></a>
      <?php
         echo "<b><big><a href = 'newsdetail.php?idn=$idn&id=$id'>$tieude</a></b></big>";
         echo "<i><br><br>$trichdan<br><br></i>";
           ?>
       </div>
       <?php
        }
       ?>
      </div>
  </div>
</div>
  <?php
    include "footer.php"
  ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>