<?php
  $count =0;
	if(isset($_SESSION['cart']))
	{
    $items = $_SESSION['cart'];
    $count = count($items);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    
    <title>Login Page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/css/header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
  </head>
  <body>
    <!--Header ============================================= -->
      <header id="header" class="">
        <div class="header-wrap">
          <div class="container">
            <div id="logo">
               <h1>
                 <a href="shopbeauty.php" title="">
                   <img src="images/icon/logo.png" alt="">
                 </a>
               </h1>
            </div>
            <div  class="navbar-default" role="navigation">
             <ul class="nav navbar-nav">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SẢN PHẨM <b class="caret"></b></a>
                    <ul class="dropdown-menu category">
                       <li><a href="#" itemprop="111">Sản phẩm nổi bật</a></li>
                       <li class="divider"></li>
                       <li><a href="#" itemprop="111">Sản phẩm mới</a></li>
                       <li class="divider"></li>
                       <li><a href="#" itemprop="Sản phẩm khuyến mãi">Sản phẩm khuyến mãi</a></li>
                   </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">TRANG ĐIỂM <b class="caret"></b></a>
                    <ul class="dropdown-menu category">
                       <li><a href="" itemprop="1">Tất cả</a></li>
                       <li class="divider"></li>
                       <li><a href="" itemprop="4">Son môi</a></li>
                       <li class="divider"></li>
                       <li><a href="" itemprop="5">Trang điểm mặt</a></li>
                       <li class="divider"></li>
                       <li><a href="" itemprop="6">Trang điểm mắt</a></li>
                   </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">CHĂM SÓC DA <b class="caret"></b></a>
                    <ul class="dropdown-menu category">
                       <li><a href="" itemprop="2">Tất cả</a></li>
                       <li class="divider"></li>
                       <li><a href="#" itemprop="7">Mặt nạ</a></li>
                       <li class="divider"></li>
                       <li><a href="#" itemprop="8">Xịt khoáng</a></li>
                       <li class="divider"></li>
                       <li><a href="#" itemprop="9">Kem chống nắng</a></li>
                   </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">PHỤ KIỆN  <b class="caret"></b></a>
                    <ul class="dropdown-menu category">
                       <li><a href="" itemprop="3">Tất cả</a></li>
                       <li class="divider"></li>
                       <li><a href="#" itemprop="10">Nước hoa nữ</a></li>
                       <li class="divider"></li>
                       <li><a href="#" itemprop="11">Nước hoa nam</a></li>
                   </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">TẠP CHÍ <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li><a href="lamdep.php" itemprop="">Làm đẹp</a></li>
                       <li class="divider"></li>
                       <li><a href="" itemprop="">Sống khỏe</a></li>
                       <li class="divider"></li>
                       <li><a href="" itemprop="">Girl</a></li>
                       <li class="divider"></li>
                       <li><a href="" itemprop="">Tuổi teen</a></li>
                   </ul>
                </li>
               
              </ul>
            </div>
          
            <div  class="navbar-default" role="navigation">
               <ul class="nav navbar-nav">
                  <li>
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/icon/search.png" alt="" style="width: 22px"></a>
                 </li>
                 <li>
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/icon/user.png" alt="" style="width: 17px"></a>
                      <ul class="dropdown-menu not-session">
                         <li><a href="login.php">Đăng nhập</a></li>
                         <li class="divider"></li>
                         <li><a href="register.php">Đăng ký</a></li>
                         <li class="divider"></li>
                         <li><a href="logout1.php">Đăng xuất</a></li>
                     </ul>
                     <ul class="dropdown-menu have-session" style="display: none">
                         <li><a href=""></a></li>
                         <li class="divider"></li>
                         <li><a href="">Đăng xuất</a></li>
                     </ul>
                 </li>
                 <li class="cart">
                      
                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="images/icon/shop-cart-icon.png" alt="" style="width: 22px"></a>
                        <?php
                          if ($count != 0) { ?>
                          <span class="top_cart_qty"><?=$count?></span>
                          <?php }?>
                </li>
              </ul>
            </div>
            
          </div>
        </div>          
      </header>
      <div class="clear"></div> 
      <div class="line"></div> 
    <!--Header ============================================= -->
    <!--jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/header.js"></script>
    
  </body>
</html>