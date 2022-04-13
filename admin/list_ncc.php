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
    <title>Nhà cung cấp</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="admin_users.css">
    <link rel="stylesheet" type="text/css" href="common.css">

    <style type="text/css" media="screen">
      
    </style>
  </head>
  <body>
      <header class="container-fluid">
        <div class="row"> 
            <h2>Quản lý nhà cung cấp</h2>
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
                    <li><a class="list-group-item users child" href="listhoadon.php" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách hóa đơn</a>
                    <li><a class="list-group-item users child" href="list_phieuchi.php" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách phiếu chi</a>
                  </ul>
                </li>
              </ul>
            </div>
          </div> 
          <div class="content col-xs-9 col-sm-9 col-lg-9">
            <div class="container">
              <div class="header-content">
                <h2>Danh sách nhà cung cấp</h2>
                <a class="add-user" title="Add user" href="admin_addncc.php">
                  <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;
                  Thêm nhà cung cấp
                </a>
              </div>
              <div class="content-content">
                <table>
                  <tr>
                    <th>ID</th>
                    <th>Tên nhà cung cấp</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Số dư nợ</th>
                    <th>Chỉnh sửa</th>
                  </tr>
              <?php
                $sql = "SELECT * FROM nhacungcap";
                $result = mysqli_query($conn,$sql);
                while( $r = mysqli_fetch_array($result))
                {
                  $id = $r["id"];
                  $name = $r["name"];
                  $sdt = $r["dienthoai"];
                  $diachi = $r["diachi"];

                  $symbol = 'đ';
                  $symbol_thousand = '.';
                  $decimal_place = 0;
                  $sonodu = number_format($r["sonodu"], $decimal_place, '', $symbol_thousand).$symbol; 
              ?>
                  <tr>
                    <td><?=$id?></td>
                    <td><?=$name?></td>
                    <td><?=$sdt?></td>
                    <td><?=$diachi?></td>
                    <td><?=$sonodu?> VNĐ</td>
                    <td>
                      <!-- <li><a href="" title="Detail"><i class="fa fa-eye" aria-hidden="true"></i></a></li>-->
                      <li><a href="admin_editncc.php?id=<?=$r["id"]?>" title="Edit" class="edit" itemprop="<?=$id?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
                      <li><a href="#" title="Delete" class="remove" itemprop="<?=$id?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></li>
                    </td>
                  </tr>
              <?php
                }
              ?>
                  
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
          $.ajax({
            url : "removencc.php",
            type : 'post',
            dataType : 'text',
            data : {  
                "id_remove"    : id_remove
            },
            success : function() {
              alert("Xóa nhà cung cấp thành công");
              window.location.replace("list_ncc.php");
            }
          }); 

        });

      }); 
    </script>
  </body>
</html>