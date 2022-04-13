<?php 
  include 'database.php';
  session_start();
  if(!isset($_SESSION['cart']))
  {
    header('Location: shopbeauty.php');
  }
  if(isset($_SESSION['customer']))
  {
    $id = $_SESSION['customer'];
      $sql = "select * from user where iduser = $id ";
      $result = mysqli_query ($conn,$sql);
      while( $r = mysqli_fetch_array($result) )
      {
        $hoten = $r["tenuser"];
        $dienthoai = $r["dienthoai"];
        $diachi = $r["diachi"];
        $email = $r["email"];
      }
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style type="text/css">
      .main {
        float: left;
        width: 65%;
      }

      .sidebar:after {
            content: "";
            display: block;
            width: 300%;
            position: absolute;
            top: 0;
            left: -100%;
            bottom: 0;
            background: #ffffff;
            z-index: -1;
            box-shadow: 0 -1px 0 #e1e1e1 inset;
        }

        @media (min-width: 1000px) {
            .wrap {
                padding: 0 25px;
                width: 98%;
                max-width: 95em;
            }

            .anyflexbox .content .wrap {
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
            }

            .sidebar {
                width: 32%;
                padding-left: 30px;
                background-position: left top;
                float: right;
            }

            .sidebar:after {
                left: 0;
                background-position: left top;
                box-shadow: 1px 0 0 #e1e1e1 inset;
            }

            .sidebar_header {
                display: block;
            }
        }

        .sidebar__content .summary-section {
            padding: 12px 0;
        }

        .product-info-name, .product-info-description {
            display: block;
        }

        .product-info-description {
            color: #969696;
            font-size: 0.85714em;
        }

        .product-thumbnail {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            background: #fff;
            position: relative;
        }

        .product-thumbnail::after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            border-radius: 8px;
            box-shadow: 0 0 0 1px rgba(0,0,0,0.1) inset;
            z-index: 2;
        }

        .product-thumbnail__quantity {
            font-size: 0.78em;
            white-space: nowrap;
            padding: 0 0.62em;
            border-radius: 2em;
            background-color: #5a96c8;
            color: #fff;
            position: absolute;
            right: -0.9em;
            top: -0.55em;
            z-index: 3;
        }
        .total-line {
            margin-bottom: 12px;
        }

        .total-line-subtotal {
            padding-bottom: 8px;
        }
        .total-line-total {
            border-top: 1px solid #e7e7e7;
            padding-top: 12px;
            margin-bottom: 0;
        }
        .btn-checkout {
            padding: 8px 12px !important;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
            background-color: #00c5bb;

        }
        .field__input-btn-wrapper .btn-checkout {
            padding: 8px 40px !important;
            width: auto;
        }
        .field__input-btn-wrapper .field__input-wrapper {
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            margin: 0;
        }
        .product-table {
            margin: 7px 0;
            width: 100%;
        }

        .product td {
            padding-top: 1em;
        }

        .product:first-child td {
            padding-top: 0;
        }

        .product td:first-child {
            width: 70px;
        }
        /* END Sidebar Container */
        .field__input-btn-wrapper {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        .field__input-btn-wrapper .btn {
            margin-left: 13px;
        }
        .content-box__row--secondary {
            background-color: #f8f8f8;
        }
        .field__input {
            height: 3em;
            width: 100%;
            margin: 0 0 15px;
            font-size: 15px;  
        }
        h2 {
            color: #333;
            font-size: 18px;
        }
        .btn-checkout {
          padding-left: 0px !important;
          padding-right: 0px !important;
        }
        .money {
          float: right;
        }
        .content-box__row {
          border: solid 1px #cccccc;
          border-radius: 4px;
          padding: 8px;
        }
        .product-thumbnail__image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            max-width: 100%;
            max-height: 100%;
            margin: auto;
        }
        .field__input-btn-wrapper {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        .field__input-btn-wrapper .btn {
            margin-left: 13px;
        }
        .content-box__row--secondary {
            background-color: #f8f8f8;
        }
        .field__input {
            height: 3em;
            width: 100%;
            margin: 0 0 15px;
            font-size: 15px;  
        }
        h2 {
            color: #333;
            font-size: 18px;
        }
        .btn-checkout {
          padding-left: 0px !important;
          padding-right: 0px !important;
        }
        .money {
          float: right;
        }
        .content-box__row {
          border: solid 1px #cccccc;
          border-radius: 4px;
          padding: 8px;
        }
        .product-thumbnail__image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            max-width: 100%;
            max-height: 100%;
            margin: auto;
        }


    </style>

</head>
<body>
  <?php
  include "header1.php";
  ?>
  <div class="container">
    <form method="post" action="" class="content">
      <div class="sidebar ">
        <div class="sidebar_header">
          <h2>
              <label class="control-label">Đơn hàng</label>
          </h2>
          <hr class="full_width">
        </div>        
        <div class="sidebar__content">
          <div class="">
            <div class="">
              <div class="summary-product-list">
                <table class="product-table">
                  <tbody>
                    <?php
                      $item = array();
                      foreach($_SESSION['cart'] as $key => $value)
                          {
                            $item[]=(int)$key;
                          }
                      $str=implode(",",$item);
                        $sql = "SELECT * FROM product where id in ($str)";
                        $result = mysqli_query($conn,$sql);
                        $sum_price_built = 0;
                        while( $r = mysqli_fetch_array($result) )
                        {
                          
                          $name = $r["name"];
                          $symbol = 'đ';
                          $symbol_thousand = '.';
                          $decimal_place = 0;
                          $price = number_format($r["price"], $decimal_place, '', $symbol_thousand).$symbol;
                          if( $r["price"] == "0" )
                          {
                            $price = "Liên hệ mua hàng";
                          }
                          $link = $r["image_link"];  
                          $sale = $r["sale"];
                          $image_id = $r["image_id"];
                          $amount = $_SESSION['cart'][$r['id']];
                          if ($sale != 0) $thanhtien = $r["price"]  * $amount * (1- ($sale/100));
                          else  $thanhtien = $r["price"]  * $amount;
                          $sum_price_built = $sum_price_built + $thanhtien;
                          $sum_price = number_format($thanhtien, $decimal_place, '', $symbol_thousand).$symbol;
        
                          $sum_price_built_vnd = number_format($sum_price_built, $decimal_place, '', $symbol_thousand).$symbol;
                    ?>  
                    <tr class="product product-has-image clearfix">
                      <td>
                        <div class="product-thumbnail">
                          <div class="product-thumbnail__wrapper">
                                                          
                            <img src="<?=$link?>" class="product-thumbnail__image">
                                                            
                          </div>
                          <span class="product-thumbnail__quantity" aria-hidden="true"><?=$amount?><span>
                        </span></span></div>
                      </td>
                      <td class="product-info">
                        <span class="product-info-name">
                          <?=$name?>
                        </span>
                                                    
                        <span class="product-info-description">
                        </span>
                                                    
                                                    
                      </td>
                      <td class="product-price text-right">
                        <?=$sum_price?>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>                  
                  </tbody>
                </table>
              </div>
            </div>
            <hr class="m0">
          </div>
          <div class="order-summary order-summary--discount">
            <div class="summary-section">
                <div class="form-group m0">
                    <div class="field__input-btn-wrapper">
                        <div class="field__input-wrapper">
                            <input bind="code" name="code" class="form-control discount_code" placeholder="Nhập mã giảm giá" value="" id="checkout_reduction_code" type="text">
                        </div>
                        <button class="btn btn-primary event-voucher-apply" type="button">Áp dụng</button>
                    </div>
                </div>
                <div class="clearfix hide">
                    <div class="pull-left">
                        <i class="fa fa-check applied-discount-status-success" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-triangle applied-discount-status-warning" aria-hidden="true"></i>
                    </div>
                    <div bind="code" class="pull-left applied-discount-code"></div>
                    <div>0₫</div>
                    <input class="btn btn-delete" value="×" name="commit" type="button">
                </div>
            </div>
          </div>
          <div class="order-summary order-summary--total-lines">
            <div class="summary-section border-top-none--mobile">
                <div class="total-line total-line-subtotal clearfix">
                    <span class="total-line-name pull-left">
                        Tạm tính
                    </span>
                    <span class="money"><?=$sum_price_built_vnd?></span>
                </div>
                
                <div class="total-line total-line-total clearfix">
                    <span class="total-line-name pull-left">
                        Tổng cộng
                    </span>
                    <span class="money sum_price" itemprop="<?=$sum_price_built?>"><?=$sum_price_built_vnd?></span>
                </div>
            </div>
          </div>
          <div class="form-group clearfix ">
            <div class="field__input-btn-wrapper mt10">
                <a class="previous-link" href="cart.php">
                    <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                    <span>Quay về giỏ hàng</span>
                </a>
                <input type="submit" class="btn btn-primary btn-checkout" value="ĐẶT HÀNG" >
            </div>
          </div>
        </div>

        <!-- Thanh toán onlie -->
      </div>
      <div class="main" role="main">
        <div class="main_header">
          <div class="shop logo logo--left ">
          </div>
        </div>
        <div class="main_content">
          <div class="row">
            <!-- Thông tin mua hàng -->
            <div class="col-md-6 col-lg-6">
              <div class="section">
                <div class="section__header">
                      <div class="layout-flex layout-flex--wrap">
                        <h2 class="">
                            <label class="control-label">Thông tin mua hàng</label>
                        </h2>                 
                      </div>
                </div>
                <div class="section__content">    
                          <div class="form-group">
                              <span class="field__label">
                                Email
                              </span>
                              <?php
                              if(isset($_SESSION['customer']))
                              echo "<input class='field__input form-control' id='email' data-error='Vui lòng nhập email' required='' type='email' value = '$email'>";
                              else echo "<input class='field__input form-control' id='email' data-error='Vui lòng nhập email' required='' type='email'>";
                              ?>
                          </div>      
                          <div class="form-group">
                              <span class="field__label">
                                Họ và tên
                              </span>
                              <?php
                              if(isset($_SESSION['customer']))
                              echo "<input class='field__input form-control' id='name' data-error='Vui lòng nhập họ tên' required='' type='text' value = '$hoten'>";
                              else echo "<input class='field__input form-control' id='name' data-error='Vui lòng nhập họ tên' required='' type='text'>";
                              ?>
                          </div>                    
                          <div class="form-group">
                              <span class="field__label">
                                Số điện thoại
                              </span>
                              <?php
                              if(isset($_SESSION['customer']))
                              echo "<input class='field__input form-control' id='phone' data-error='Vui lòng nhập số điện thoại' required='' type='text' value = '$dienthoai'>";
                              else echo "<input class='field__input form-control' id='phone' data-error='Vui lòng nhập số điện thoại' required='' type='text'>";
                              ?>
                          </div>                        
                          <div class="form-group">
                              <span class="field__label">
                                Địa chỉ
                              </span>
                              <?php
                              if(isset($_SESSION['customer']))
                              echo "<input class='field__input form-control' id='address' data-error='Vui lòng nhập địa chỉ' required='' type='text' value = '$diachi'>";
                              else echo "<input class='field__input form-control' id='address' data-error='Vui lòng nhập địa chỉ' required='' type='text'>";
                              ?>
                          </div>    
                          <div class="section pt10">
                            <input class="input-checkbox" value="false" name="otherAddress" id="other_address" type="checkbox">                      
                            <label class="checkbox__label" for="other_address">
                              Giao hàng đến địa chỉ khác
                            </label>                              
                          </div>   
                          <div class="section pt10">
                            <div class="section__content">
                                <div class="form-group m0">
                                  <br>
                                  <textarea name="note" value="" class="field__input form-control m0" placeholder="Ghi chú"></textarea>
                                </div>
                            </div>
                          </div>                                      
                </div>
              </div>              
            </div>
            <!-- End thông tin mua hàng -->

            <!-- Cart thanh toán -->
            <div class="col-md-6 col-lg-6">
              <div class="section shipping-method">
                  <div class="section__header">
                    <h2 class="section__title">
                      <i class="fa fa-truck fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                      <label class="control-label">Vận chuyển</label>
                    </h2>
                  </div>
                  <div class="section__content">
                    <div class="content-box">
                      <div class="content-box__row">
                        <div class="radio-wrapper">
                          <div class="radio__input">
                            <input class="input-radio" value="" type="radio">
                          </div>
                          <label class="radio__label"> <span>Giao hàng tận nơi</span>
                            <span class="radio__label__accessory"><span class="content-box__emphasis">40.000₫</span></span>
                          </label> 
                        </div> <!-- /radio-wrapper--> 
                      </div>
                    </div>
                  </div>
              </div>
              <div class="section payment-methods">
                <div class="section__header">
                  <h2 class="section__title">
                    <i class="fa fa-credit-card fa-lg" aria-hidden="true"></i>
                    <label class="control-label">Thanh toán</label>
                  </h2>
                </div>
                <div class="section__content">
                  <div class="content-box">
                    <div class="content-box__row">
                          <div class="radio-wrapper">
                              <div class="radio__input">
                                  <input class="input-radio" type="radio">
                                  <label class="radio__label" for="payment_method_164203">
                                  <span class="radio__label__primary">Thanh toán khi giao hàng (COD)</span>
                                
                              </label> 
                              </div>
                              
                          </div> <!-- /radio-wrapper--> 
                      </div>                    
      
      
                    
                    </div>
                </div>
              </div>               
            </div>
            <!-- End cart thanh toán -->
          </div>
        </div>
      </div>
    </form>
  </div>
  <?php
  include "footer.php";
  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".btn-checkout").click(function(){
          var email = $("#email").val();
          var name = $("#name").val();
          var phone = $("#phone").val();
          var address = $("#address").val();
          var sum_price = $(".sum_price").attr("itemprop");
          if(email==""||name==""||phone==""||address=="")
          {
            alert("Caution! Please fill out infomation.");
          }
          else{
            $.ajax({
            url : "add-hoadon.php",
            type : 'post',
            dataType : 'text',
            data : {
                "name"    : name,
                "phone"    : phone,
                "address"    : address,
                "sum_price"    : sum_price
            },
            success : function() {
              alert("Xin chúc mừng " + name + " đã đặt hàng tại shop thành công.\nThông tin người đặt hàng:\nEmail: "+email+"\nTên: "+name+"\nPhone: "+phone+"\nAddress: "+address+"\nTổng tiền: "+sum_price );
              alert("Quay về trang chủ");
            }
          });

          }
          
        });

        /*$(".btn-checkout").click(function(){
          var email = $("#email").val();
          var name = $("#name").val();
          var phone = $("#phone").val();
          var address = $("#address").val();
          var sum_price = $(".sum_price").text();
          if(email==""||name==""||phone==""||address=="")
          {
            alert("Caution! Please fill out infomation.");
          }
          else{
            alert("Xin chúc mừng " + name + " đã đặt hàng tại shop thành công.\nThông tin người đặt hàng:\nEmail: "+email+"\nTên: "+name+"\nPhone: "+phone+"\nAddress: "+address+"\nTổng tiền: "+sum_price );
          }

        });*/


      });
    </script>
</body>
</html>