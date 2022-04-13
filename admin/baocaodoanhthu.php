<?php 
  include '../database.php';
  session_start();
  if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
   } 
   else
{
  if ($_SESSION['role'] == 'Nhân viên')
  header('Location: home.php');
  else 
   {
    $month = $_GET['month'];
    $year = $_GET['year'];
   }
}
   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.2.1.min.js">
    <title>Báo cáo doannh thu</title>

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
        width: 7%;
      }
      th:nth-child(3), td:nth-child(3) {
        width: 10%;
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
            <h2>Báo cáo doanh thu</h2>
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
                <h2>Báo cáo doanh thu</h2>
              </div>
              <div>
                <form class="form-inline">
                  <label for="email">Chọn tháng:</label>
                  <select class="form-control month">
                      <option value="all">Tất cả</option>
                      <option value="1" >1</option>
                      <option value="2" >2</option>
                      <option value="3" >3</option>
                      <option value="4" >4</option>
                      <option value="5" >5</option>
                      <option value="6" >6</option>
                      <option value="7" >7</option>
                      <option value="8" >8</option>
                      <option value="9" >9</option>
                      <option value="10" >10</option>
                      <option value="11" >11</option>
                      <option value="12" >12</option>
                  </select> 

                  <label for="email" style="margin-left: 30px">Chọn năm :</label>
                  <select class="form-control year">
                      <option value="all" selected >Tất cả</option>
                      <option value="2019" >2019</option>
                      <option value="2018" >2018</option>
                      <option value="2017" >2017</option>
                      <option value="2016" >2016</option>
                      <option value="2015" >2015</option>
                      <option value="2014" >2014</option>
                  </select> 
                  <span class="btn btn-primary" style="margin-left:20px"  onClick="sortby()">Xem</span>
                </form>
              </div>
              </br>
              <div class="content-content vertical-menu">
                <table>
                  <tr>
                    <th>STT</th>
                    <th style="width: 20px">Số HD</th>
                    <th>Ngày tạo</th>
                    <th>Khách hàng</th>
                    <th>Địa chỉ</th>
                    <th>Phí giao hàng</th>
                    <th>Giá trị</th>
                    <th>Tổng thu</th>
                  </tr>
              <?php
                $tongtien = 0;
                 $i = 0;
                $t = 0;
                $index = 0; 
                if($month =="all" && $year=="all"){
                  $sql = "SELECT * FROM hoadon";
                }
                else if($month !="all" && $year=="all"){
                  $sql = "SELECT * FROM hoadon where month(ngayhd) = $month";
                }
                else if($month =="all" && $year !="all"){
                  $sql = "SELECT * FROM hoadon where year(ngayhd) = $year";
                }
                else 
                {
                  $sql = "SELECT * FROM hoadon WHERE MONTH(ngayhd) = $month AND YEAR(ngayhd)= $year ";
                }
                $result = mysqli_query ($conn,$sql);
                while( $r = mysqli_fetch_array($result))
                {
                  $i = $i + 1;
                  $sohd = $r["sohd"];
                  $ngay = $r["ngayhd"];
                  $khachhang = $r["khachhang"];
                  $sodienthoai = $r["sodienthoai"];
                  $diachi = $r["diachi"];

                  $symbol = 'đ';
                  $symbol_thousand = '.';
                  $decimal_place = 0;
                  $phigiaohang = number_format($r["tienship"], $decimal_place, '', $symbol_thousand).$symbol; 
                  $giatri = number_format($r["giatri"], $decimal_place, '', $symbol_thousand).$symbol; 

                  $tongthu = intval(strval($r["giatri"]+40000));
                  $index = $tongthu;
                  $tongthu = number_format($tongthu, $decimal_place, '', $symbol_thousand).$symbol; 

                  $tongtien = intval(strval($index + $tongtien));

                  $mydialog = "mydialog".$sohd;

                    
              ?>
                  <tr>
                    <td><?=$i?></td>
                    <td><?=$sohd?></td>
                    <td><?=$ngay?></td>
                    <td><?=$khachhang?></td>
                    <td><?=$diachi?></td>
                    <td><?=$phigiaohang?></td>
                    <td><?=$giatri?></td>
                    <td><?=$tongthu?></td>
                  </tr>
              <?php
                }
              ?>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><center><b>Tổng cộng: </b></center></td>
                    <td><b>
                    <?php 
                      if($i==0)
                        {echo("0");} 
                      else
                      {
                        $tongtien = number_format($tongtien, $decimal_place, '', $symbol_thousand).$symbol;
                        echo $tongtien;
                      }
                    ?>
                        
                      </b></td>
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
          var month = $(".month").val();  
          var year = $(".year").val(); 
          window.location.replace("baocaodoanhthu.php?month=" + month + "&year=" + year );
      }
    </script>
  </body>
</html>