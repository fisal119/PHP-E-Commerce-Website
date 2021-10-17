
<?php
       //  request
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      if(isset($_POST['new_phones_submit'])){
        // call add to cart mehtod
        $cart->addToCart($_POST['user_id'],$_POST['item_id']);
      }
    }

    $in_cart= $cart->getCartid( $product->getData('cart'));
?>
     
     <!-- New Phones -->
      <section id="new-phones">
        <div class="container">
          <h4 class="font-rubik font-size-20">New Phones</h4>
          <hr />

          <!-- owl carousel -->
          <div class="owl-carousel owl-theme">
            <?php array_map(function($item) use($in_cart){ ?>
            <div class="grid-item border <?php echo $item['item_brand'] ?>">
              <div class="item py-2" style="width: 200px">
                <div class="product font-rale">
                  <a href="<?php printf("%s?item_id=%s","product.php",$item['item_id']) ?>"
                    ><img
                      src="<?php echo $item['item_image'] ?>"
                      alt="product1"
                      class="img-fluid"
                  /></a>
                  <div class="text-center">
                    <h6><?php echo $item['item_name'] ?></h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span><?php echo $item['item_price'] ?></span>
                    </div>
                     <form method="POST">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                     <?php
                    if(in_array($item['item_id'],$in_cart ?? [])){
                      echo "<button type='submit' disabled class='btn btn-success font-size-12'>In The Cart</button>";
                    }else{
                      echo "<button type='submit' name='new_phones_submit' class='btn btn-warning font-size-12'>Add to Cart</button>";
                    }
                    ?>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            <?php },$product_shuffle) ?>
          </div>
          <!-- !owl carousel -->
        </div>
      </section>
      <!-- !New Phones -->
