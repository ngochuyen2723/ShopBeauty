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
    
    <title>Trang chủ</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="shopbeauty.css">
  </head>
  <body>
  <?php  
      include 'header.php';
  ?>
      
    <section id="slider" class="clearfix">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/slideshow_1.jpg" width="100%" alt="">
          </div>
          <div class="item">
            <img src="images/slideshow_2.jpg" width="100%" alt="">
          </div>
          <div class="item">
            <img src="images/slideshow_3.jpg" width="100%" alt="">
          </div>
          <div class="item">
            <img src="images/slideshow_4.jpg" width="100%" alt="">
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
    </section>
    
    <div class="policies">
      <div class="container clearfix">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
              <div class="feature-box fbox-plain fbox-dark fbox-small">
                <div class="fbox-icon">
                  <img src="images/icon/policies_icon_1.png" alt="ega-fashion-magazine">
                </div>
                <h4>Miễn phí giao hàng</h4>
                <p class="notopmargin">Nhận hàng trong vòng 3 ngày</p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="feature-box fbox-plain fbox-dark fbox-small">
                <div class="fbox-icon">
                  <img src="images/icon/policies_icon_2.png" alt="ega-fashion-magazine">
                </div>
                <h4>Quà tặng</h4>
                <p class="notopmargin">Nhiều quà tặng và ưu đãi hấp dẫn</p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="feature-box fbox-plain fbox-dark fbox-small">
                <div class="fbox-icon">
                  <img src="images/icon/policies_icon_3.png" alt="ega-fashion-magazine">
                </div>
                <h4>Bảo đảm chất lượng</h4>
                <p class="notopmargin">Sản phẩm đã dược kiểm định</p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="feature-box fbox-plain fbox-dark fbox-small">
                <div class="fbox-icon">
                  <img src="images/icon/policies_icon_4.png" alt="ega-fashion-magazine">
                </div>
                <h4>HOTLINE: <a>0942419862</a></h4>
                <p class="notopmargin">Dịch vụ hỗ trợ bạn 24/7</p>
              </div>
            </div>
        </div>
      </div> 
    </div>
    
    <div class="container">
      <div class="tech_store_index_col_1 colection">
        <div class="block_title">
          <h2>TRANG ĐIỂM</h2>
        </div>
        <ul>
          <li>
            <a href="" title="" itemprop="4">Son môi</a>
          </li>
          <li>
            <a href="" title="" itemprop="5">Trang điểm mặt</a>
          </li>
          <li>
            <a href="" title="" itemprop="6">Trang điểm mắt</a>
          </li>
        </ul>
        <div class="row">
          <div class="col-xs-12 index_col_products">
            <div class="row">
              <?php
                
                  $i=1;
                  include 'xuat.php';
              
              ?>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
      <div class="tech_store_index_col_1 colection">
        <div class="block_title">
          <h2>CHĂM SÓC DA</h2>
        </div>
        <ul>
          <li>
            <a href="" title="" itemprop="7">Mặt nạ</a>
          </li>
          <li>
            <a href="" title="" itemprop="8">Xịt khoáng</a>
          </li>
          <li>
            <a href="" title="" itemprop="9">Kem chống nắng</a>
          </li>
        </ul>
        <div class="row">
          <div class="col-xs-12 index_col_products">
            <div class="row">
              <?php
                
                  $i=2;
                  include 'xuat.php';
              
              ?>
            </div>
          </div>
        </div>
      </div>
      
      <div class="container">
      <div class="tech_store_index_col_1 colection">
        <div class="block_title">
          <h2>NƯỚC HOA</h2>
        </div>
        <ul>
          <li>
            <a href="" title="" itemprop="10">Nước hoa nữ</a>
          </li>
          <li>
            <a href="" title="" itemprop="11">Nước hoa nam</a>
          </li>
        </ul>
        <div class="row">
          <div class="col-xs-12 index_col_products">
            <div class="row">
              <?php
                
                  $i=3;
                  include 'xuat.php';
              
              ?>
            </div>
          </div>
        </div>
      </div>

      </div>
      </div>
    </div>
  
    <div class="container">
      <div class="brand_title">
        <h2>THƯƠNG HIỆU</h2>
      </div>
      <div class="brand_content">
        <div class="row">
          <img src="images/icon/popular_brand_img_2.png" alt="">
          <img src="images/icon/popular_brand_img_3.png" alt="">
          <img src="images/icon/popular_brand_img_4.png" alt="">
          <img src="images/icon/popular_brand_img_5.png" alt="">
          <img src="images/icon/popular_brand_img_6.png" alt="">
          <img src="images/icon/popular_brand_img_7.png" alt="">
        </div>
      </div>
    </div>

    <?php
      include 'footer.php';
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/shopbeauty.js"></script>
  </body>
</html>