<?php
    $sql =  "SELECT * FROM product inner join product_category on product.category_id=product_category.id where parent_id = $i";
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
             

               

