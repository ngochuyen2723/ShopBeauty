<?php
session_start();
if (!isset($_SESSION['username'])) {
   header('Location: ../login.php');
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
    <title>Add product</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="admin_adduser.css">
    <link rel="stylesheet" type="text/css" href="common.css">
    <style type="text/css" media="screen">
      #image_preview{
	border: 1px solid black;
	display: inline;
    padding: 10px 18px;
    display: inline-block;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #F5F1F2;
  }

  #image_preview img{
	width: 120px;
	padding: 5px;
  }

  #uploadFile {
	display: inline;
    padding: 8px 18px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #F5F1F2;

}
    </style>
  </head>
  <body>
      <header class="container-fluid">
        <div class="row">
            <h2>Quản lý admin</h2>
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
                <li><a class="list-group-item" href="../shopfashion.php" title="Homepage"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Trang chủ</a></li>
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
                <h2>Thêm sản phẩm</h2>
              </div>
              <div class="content-content">
                <form action="" id="addproduct" method="post">
                  <label>Tên sản phẩm</label>
                  <input type="text" id="name" name="ten" required="">

                  <label>Nhãn hiệu</label>
                  <input type="text" id="brand" name="nhanhieu" required="">

                  <label>Màu sắc</label>
                  <input type="text" id="brand" name="mau" required="">

                  <label>Giá</label>
                  <input type="text" id="gia" name="gia" required="">

                  <label>Số lượng</label>  
                  <input type="text" id="soluong" name="soluong" required="">

                  <label>Sale</label>  
                  <input type="text" id="giam" name="giam" required="">

                  <label>Loại sản phẩm</label>
                  <select name = 'category' style="width:200px">
                  <option disabled selected style>Chọn loại sản phẩm</option>
                    <?php
                    include '../database.php';
                    $sql = "select * from product_category where id > 3";
                    $result = mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_row($result))
                    {
                        echo "<option value = '$row[0]'>".$row[1]."</option>";
                    }
                    ?>
                  </select>
                  <br>

                  <label>Mô tả</label>  
                  <input type="text" id="mota" name="mota">

                  <label>Link sản phẩm</label>  
                  <input type="file" id="uploadFile" name="files[]" multiple/>
                  
                  <br>
                  <label>Ảnh sản phẩm</label>  
                  <div id="image_preview"></div>

                  <div class="clearfix"></div>
                  <div class="row add_cancel" style="text-align: right;">
                    <input type="submit" value="Add" id="btnadd">
                    <button class="btncancel">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src = "js/upload.js"></script>
  </body>
</html> 