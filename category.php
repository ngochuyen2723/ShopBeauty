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
    
    <title>Menu</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/css/category.css">
    <link rel="stylesheet" type="text/css" href="css/css/shopbeauty.css">
  </head>
  <body>
  <?php  
      include 'header.php';
  ?>
   <div class="collection_banner">
        <img src="images/slideshow_5.jpg" alt="Tất cả sản phẩm">
      </div>
    <div class="container">
     
      <div class="tech_store_index_col_1 colection">
        <div class="row">
          <div class="col-xs-9 index_col_products">
            <div class="row">

              <div class="row info">
                <p class="col-xs-8"></p>
                <div class="text-right col-xs-4">
                  <p>Sắp xếp theo: </p>
                  <?php
                      $sort = $_GET['sortby'];
                      $menu =$_GET['id'];
                      $loc2 = $_GET['loc'];
                      $loc3 = $_GET['locgia'];
                      $loc1 = $_GET['search'];
                      switch ($sort) {
                        case 'price-asc':
                          $option = "Giá tăng dần";
                          break;
                        case 'price-desc':
                          $option = "Giá giảm dần";
                          break;
                        case 'name-asc':
                          $option = "Từ A-Z";
                          break;
                        case 'name-desc':
                          $option = "Từ Z-A";
                          break;
                        default:
                          $option = "Mặc định";
                          break;
                      }
                    ?>
                  <select class="form-control sort" id = 'sapxep'>
                    <option value="" selected disabled hidden><?=$option?></option>
                    <option value="default-0">Mặc định</option>
                    <option value="price-asc">Giá tăng dần</option>
                    <option value="price-desc">Giá giảm dần</option>
                    <option value="name-asc">Từ A-Z</option>
                    <option value="name-desc">Từ Z-A</option>
                  </select>
                </div>
              </div>
              <div id = "product-display-content">
              <?php
              include 'display.php';
              //echo "<script type='text/javascript'>alert('$sql');</script>";
              ?>
              </div>
            </div>
          </div>

          <div id="collection_sidebar" class="nobottommargin sidebar right col-md-3 col-xs-12">
          <!-- BEGIN: panel -->
            <div class="panel-group filter_group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <a data-toggle="collapse" href=""><h4 class="panel-title">
                    LỌC SẢN PHẨM<i class="fa fa-angle-down"></i>
                    </h4></a>
                </div>
                <div id="filter_group" class="panel-collapse collapse in">
                  <!-- BEGIN: Vendor filter -->
                  <div class="group1 widget_links clearfix product-filter-group product-filter--by-THƯƠNG HIỆU">
                    <a href="" data-toggle="collapse"><h4 class="group_1">THƯƠNG HIỆU<i class="fa-angle-down fa"></i></h4></a>
                    <ul id="filter_group_1" class="panel-collapse collapse in filter_list">
                      
                    <?php
                            $sql = "SELECT DISTINCT brand FROM product";
                            $result = mysqli_query($conn,$sql);
                            while( $r = mysqli_fetch_array($result) )
                            {
                              $brand = $r["brand"];
                          ?>
                              <li class="product-filter-item product-filter-item--check-box ">
                                <a href="">
                                  <label>
                                    <input type="checkbox" <?php if ($loc2 == $brand) echo "checked"?> value="<?=$brand?>"> 
                                    <?=$brand?> 
                                  </label>
                                </a>
                              </li> 
                          <?php
                            }
                      ?>
                                    
                    </ul>
                  </div>
                                   
                  <div class="widget_links clearfix product-filter-group product-filter--by-price">
                    <a href="" data-toggle="collapse"><h4 class="group_3">KHOẢNG GIÁ<i class="fa-angle-down fa"></i></h4></a>
                    <ul id="filter_group_3" class="panel-collapse collapse in filter_list"> 
                      <li class="product-filter-item product-filter-item--check-box">
                        <a href="">
                          <label>
                            <input type="radio" name="price-filter" value = 1 <?php if ($loc3 == 1) echo "checked"?>>
                            Dưới 100.000₫
                          </label>
                          </a>
                      </li>
                      <li class="product-filter-item product-filter-item--check-box">
                        <a href="">
                          <label>
                            <input type="radio" name="price-filter" value = 2 <?php if ($loc3 == 2) echo "checked"?>>
                             100.000₫ - 300.000₫
                          </label>
                        </a>
                      </li>
                      <li class="product-filter-item product-filter-item--check-box">
                        <a href="">
                          <label>
                            <input type="radio" name="price-filter" value = 3 <?php if ($loc3 == 3) echo "checked"?>>
                             300.000₫ - 500.000₫
                          </label>
                        </a>
                      </li>
                      <li class="product-filter-item product-filter-item--check-box">
                        <a href="">
                          <label>
                            <input type="radio" name="price-filter" value = 4 <?php if ($loc3 == 4) echo "checked"?>>
                            500.000₫-1000.000₫
                          </label>
                        </a>
                      </li>
                      <li class="product-filter-item product-filter-item--check-box">
                        <a href="">
                          <label>
                            <input type="radio" name="price-filter" value = 5 <?php if ($loc3 == 5) echo "checked"?>>
                             Trên 1.000.000₫ 
                          </label>
                        </a>
                      </li>         
                    </ul>
                  </div>
                
                </div>
              </div>
            </div>
          <!-- END: panel -->
          <!-- BEGIN: Sidebar -->
            <div class="sidebar-widgets-wrap">
              <div class="">
                    <!-- sidebar collection 1 -->
                              
                  </div>
                </div>
              </div>
            </div>
          <!-- END: Sidebar -->
          </div>
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
    <script>
    var loc = "<?php echo $loc2; ?>";
var locgia = "<?php echo $loc3; ?>";
var search = "<?php echo $loc1; ?>";
var id_menu = "<?php echo $menu; ?>";
var sortby1 = "<?php echo $sort; ?>";
$(document).ready(function () {
  var priceFilter=0;
  var brandsList=[];
  var orderFilter =0;
  $(".panel-heading").click(function () {
    $("#filter_group").toggle();
  });

  $(".widget_links a h4").click(function () {
    var group = $(this).attr("class");
    $("#filter_" + group).toggle();
    $("#filter_" + group).removeClass("filter_list");
  });

  var amountProduct = $(".product").size();
  $('#amount_product').text("Có " + amountProduct + " sản phẩm");

$('#filter_group_1 :checkbox').change(function () {
  let el = $(this).val();
  let elId =brandsList.indexOf(el);
  if ($(this).is(':checked')) {
    if(elId){
      brandsList.push(el);
    }
  }else{ //uncheck    
    if(elId!==-1){//remove it from list
      brandsList.splice(elId,1);
    }
  }
  let strBrands = JSON.stringify(brandsList);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("product-display-content").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("GET", "filter.php?id=" + id_menu + "&search=" + search + "&sortby=" + (orderFilter?orderFilter:'default') + "&loc=" + (brandsList[0]?brandsList[0]:loc) + "&locgia=" + (priceFilter?priceFilter:'all') +"&brands="+strBrands, true);
  xmlhttp.send();
});
//filter by price
$('#filter_group_3 :radio').change(function(){
  priceFilter= $(this).val();
  let strBrands = JSON.stringify(brandsList);//json from brands list filter
  //call ajax
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("product-display-content").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("GET", "filter.php?id=" + id_menu + "&search=" + search + "&sortby=" + (orderFilter?orderFilter:'default') + "&loc=" + (brandsList[0]?brandsList[0]:loc) + "&locgia=" + (priceFilter?priceFilter:'all')+"&brands="+strBrands, true);
  xmlhttp.send();
  //console.log(priceFilter);
});
  
$('#sapxep').on('change', function(){
    orderFilter= $(this).val();
  let strBrands = JSON.stringify(brandsList);//json from brands list filter
  //call ajax
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("product-display-content").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("GET", "filter.php?id=" + id_menu + "&search=" + search + "&sortby=" + (orderFilter?orderFilter:'default') + "&loc=" + (brandsList[0]?brandsList[0]:loc) + "&locgia=" + (priceFilter?priceFilter:'all')+"&brands="+strBrands, true);
  xmlhttp.send();
});

});

var body = $("html, body");
body.stop().animate({ scrollTop: 500 }, 500, 'swing', function () { });
    </script>
  </body>
</html>
