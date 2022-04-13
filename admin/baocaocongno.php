<?php 
  include '../database.php';
  session_start();
  if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
   } 
   elseif ($_SESSION['role'] == 'Nhân viên')
{
  header('Location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.2.1.min.js
">
    <title>List product</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="admin_users.css">
    <link rel="stylesheet" type="text/css" href="common.css">

    <style type="text/css" media="screen">
      .vertical-menu {
          width: 100%;
          height: 600px;
          overflow-y: auto;
      }
      th {
        text-align: center;
      }
      td img {
        max-width: 54px;
        height: auto;
      }
      th:nth-child(2), td:nth-child(2) {
        width: 35%;
      }
      th:nth-child(3), td:nth-child(3) {
        width: 8%;
        text-align: center;
      }

      td img:hover {
        max-width: 100px;
        height: auto;
      }
      .showdialog:hover {
        cursor: pointer;  
      }
      .mydialog {
        width: 90%; 
        height: 600px;
        border: 1px dotted black;  
        overflow-y: auto;
      }
      .dialog_image img{
        width: 90%;
        height: auto;
      }
      .title {
        padding-top: 15px;
        font-size: 16px;
      }
       .span1{
        font-weight: 600;
        margin-right: 5px;  
      }
      .red {
        color: red;
      }


      /*dialog*/
      .info_shop p{
        margin: 0px;
      }
      .col-md-1 {

      }
      .cthd-row {
        border: solid 1px grey;
      }
      .a {
        border-right: solid 1px grey;
        height: 40px;
        text-align: center;
      }
      .cthd {
        padding: 0 10px;
      }
    </style>
  </head>
  <body>
      <header class="container-fluid">
        <div class="row">
            <h2>Báo cáo công nợ</h2>
              <div class="row login_logout" >
                <a class="login" title="Account" href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>&nbsp;
                  <?php echo $_SESSION['username'] ?>
                </a>
                <a class="logout" title="Logout" href="logout.php">
                  <i class="fa fa-sign-out"></i>
                </a>
              </div>  
          </div>
      </header>
      <div class="container-fluid">
        <div class="row">
          <div class="menu col-xs-3 col-sm-3 col-lg-3">
             <div class="list-group">
              <ul>
                <li><a class="list-group-item" href="home.php" title="Homepage"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Trang chủ</a></li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Quản lý người dùng</a>
                  <ul class="menu-usesmanagement" >
                  <li><a class="list-group-item users child" href="admin_users.php"><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Users</a>                
                  <li><a class="list-group-item roles child" href="listadmin.php"><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Admin</a>
                  </ul>
                </li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Quản lý sản phẩm</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="listproducts.php?product=allproduct" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách sản phẩm</a>
                    <li><a class="list-group-item roles child" href="listproducts.php?product=empty" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Các sản phẩm đã hết</a  >
                  </ul>
                </li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Lập báo cáo</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="baocaoton.php" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Báo cáo tồn</a>
                    <li><a class="list-group-item roles child" href="baocaodoanhthu.php?month=all&year=all" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Báo cáo doanh thu</a  >
                    <li><a class="list-group-item roles child" href="baocaocongno.php?id=all" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Báo cáo công nợ</a  >
                  </ul>
                </li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Quản lý chung</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="list_ncc.php" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách nhà cung cấp</a>
                    <li><a class="list-group-item users child" href="list_ncc.php" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách hóa đơn</a>
                    <li><a class="list-group-item users child" href="list_phieuchi.php" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách phiếu chi</a>
                  </ul>
                </li>
              </ul>
            </div>
          </div> 
          <div class="content col-xs-9 col-sm-9 col-lg-9">
            <div class="container">
              <div class="header-content">
                <h2>Lập báo cáo công nợ</h2>
              </div>
              <div>
                <form class="form-inline">
                  <label for="email">Tên nhà cung cấp:</label>
                  <?php
                      $id = $_GET['id'];
                      if($id == "all"){
                        $name ="Tất cả";
                      }
                      else
                      {
                         $sql = "SELECT * FROM nhacungcap WHERE id = $id";
                         $result = mysqli_query($conn,$sql);
                          while( $r = mysqli_fetch_array($result))
                          {
                            $id = $r["id"];
                            $name = $r["name"];
                          }
                      }
                  ?>
                  <select class="form-control sort" onchange="sortby()">
                      <option value="" selected disabled hidden><?=$name?></option>
                      <option value="all" >Tất cả</option>
                    <?php
                      $sql1 = "SELECT * FROM nhacungcap";
                      $result = mysqli_query($conn,$sql1);
                      while( $r = mysqli_fetch_array($result))
                      {
                        $id = $r["id"];
                        $name = $r["name"];
                        
                    ?>
                      <option value="<?=$id?>"><?=$name?></option>
                    <?php
                      }
                    ?>
                  </select> 
                  <span class="btn btn-primary">Lập báo cáo</span>
                </form>
              </div>
              </br>
              <div class="content-content vertical-menu">
                <table>
                  <tr>
                    <th>ID</th>
                    <th>Tên nhà cung cấp</th>
                    <th>Loại</th>
                    <th>Địa chỉ</th>
                    <th>Số dư nợ</th>
                  </tr>
              <?php
                $tongtien = 0;
                $id = $_GET['id'];
                $t = 0;
                if($id=="all"){
                  $sql = "SELECT * FROM nhacungcap";
                }
                else 
                {
                  $sql = "SELECT * FROM nhacungcap WHERE id = $id";
                }
                $result = mysqli_query($conn,$sql);
                while( $r = mysqli_fetch_array($result))
                {
                  $id = $r["id"];
                  $name = $r["name"];
                  $loai = $r["loai"];
                  $diachi = $r["diachi"];

                  $symbol = 'đ';
                  $symbol_thousand = '.';
                  $decimal_place = 0;
                  $i = $r["sonodu"];
                  $sonodu = number_format($r["sonodu"], $decimal_place, '', $symbol_thousand).$symbol;

                  $tongtien = intval(strval($i + $tongtien));
                  $t = $t + 1;
                    
              ?>
                  <tr>
                    <td><?=$t?></td>
                    <td><?=$name?></td>
                    <td><?=$loai?></td>
                    <td><?=$diachi?></td>
                    <td><?=$sonodu?></td>
                  </tr>
              <?php
                }
              ?>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><center><b>Tổng cộng: </b></center></td>
                    <td><b><?php $tongtien = number_format($tongtien, $decimal_place, '', $symbol_thousand).$symbol;echo $tongtien?></b></td>
                  </tr>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".remove").click(function(){
          var id_remove = $(this).attr("itemprop");
          var get = $(this).attr("title");
          $.ajax({
            url : "removeproduct.php",
            type : 'post',
            dataType : 'text',
            data : {  
                "id_remove"    : id_remove
            },
            success : function(result) {
            }
          }); 
        });
      }); 

      function showdialog(sohd){
        document.getElementById("mydialog" + sohd).show();
      }
      
      function closedialog(sohd){
        document.getElementById("mydialog" + sohd).close();
      }

      function sortby(){
          var id = $(".sort").val();  
          window.location.replace("baocaocongno.php?id="+ id );
      }
    </script>
  </body>
</html>