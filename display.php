<?php
    $menu_id = $_GET['id'];
    $search = $_GET['search'];
    switch ($menu_id)
    {
        case 1: $loai = 'category_id between 4 and 6'; break;
        case 2: $loai = 'category_id between 7 and 9'; break;
        case 3: $loai = 'category_id between 10 and 11'; break;
        case 'all': $loai ='category_id != 0'; break;
        case 'Sản phẩm khuyến mãi': $loai = 'sale > 0'; break;
        default: $loai = 'category_id ='.$menu_id; break;
    }
    if ($search == 'all')
    {
      $sql = "select * from product where $loai";
    }
    else
    {
      $sql = "select * from product where name like '%$search%'";
    }
    $result = mysqli_query($conn,$sql);
    while ($r = mysqli_fetch_array($result))
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
?>

        <div class="product_single col-xs-6 col-md-3">
        <div class="product product_one clearfix ">
        <div class="product-image">
        <a href="product.php?id=<?=$image_id?>">
        <img src="<?=$link?>" alt=""></a>
        <div class="quick_action clearfix">
        <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
        <a href="" itemprop="<?=$image_id?>" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
        </div>
        <?php
            if($sale != 0)
        {
        ?>
        <div class="sale-flash">-<?=$sale?>%</div>
        <?php
                        }
                      ?>
                    </div>
                    <div class="product-desc">
                          <div class="product-title">
                            <h3>
                              <a href="" itemprop="<?=$image_id?>" title="<?=$name?>">
                              <p><?=$name?></p>
                              </a>
                            </h3>
                          </div>
                          <div class="product-price">
                            <ins><?=$price?></a></ins>
                          </div>
                    </div>
                  </div>
                </div>
                <?php              
                  }
              ?>
             