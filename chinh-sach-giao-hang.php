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

    <title>Login Page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="huong-dan-tinh-size.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style type="text/css" media="screen">
        .page_title h1{
            text-align: left;
        }
        .clearfix{
            clear: both;
        }
    </style>
  </head>
  <body>

<?php
include 'header.php';
?>
<div class="clearfix"></div>

    <section id="content">
        <div class="container">
            <div class="page_title">
                <h1>
                    Chính sách giao hàng
                </h1>
            </div>
            <p><strong>1. KHU VỰC GIAO HÀNG:</strong></p>

            <p>Giao hàng tại Hà Nội và TP. Hồ Chí Minh</p>

            <p><strong>2. THỜI GIAN GIAO HÀNG:</strong><br>
            Quý khách sẽ chọn trong 3 mốc giao hàng: Trước 11 giờ, trước 16 giờ và trước 20 giờ mỗi ngày</p>

            <p><strong>3. PHÍ GIAO HÀNG:</strong><br>
            Để có chi phí phục vụ giao hàng tốt và nhanh nhất cho Khách hàng, xin được tính phí giao hàng TỐI THIỂU dựa vào khu vực giao, từng loại hàng hóa (hàng dễ vỡ, hàng cồng kềnh phải giao bằng xe tải, ...), số lượng sản phẩm,....</p>

            <p>Lưu ý: Ưu tiên phục vụ khách hàng lẻ và có thể từ chối những trường hợp khách hàng mua số lượng lớn với mục đích mua đi bán lại.<br>
            Trân trọng cảm ơn!</p>
        </div>
    </section>

<?php
include 'footer.php';
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>