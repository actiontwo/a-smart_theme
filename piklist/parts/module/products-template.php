<div id="" class="">
  <div class="page-title title-header"><h1><?= $data['title'] ?></h1></div>
  <div class="category-products">
    <div class="widget em-widget-products-grid custom" id="ajaxproducts-99">
      <div class="widget-products">
        <ul class="ajax-product products-grid last even">
          <?php
          $query_param = array(
              'post_type' => $data['type'],
              'posts_per_page' => 8
          );
          $query       = new WP_Query($query_param);


          while ($query->have_posts()):$query->the_post();
            ?>
            <li class="box  item " style=" width:205px; ">
              <!--show label product - label extension is required-->
<!--              <span class="productlabels_icons">
                <span class="label new">
                  <span>New</span>
                </span>
                <span class="label bestseller">
                  <span>Best</span>
                </span>-->
              <!--</span>-->
              <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="product-image">
                <?php the_post_thumbnail(); ?>
                <!--<img src="<?= MEDIA ?>catalog/product/img_product_005.jpg" alt=" Argus QC-2185 Quick Click 5MP Digital Camera" style="width: 100%;"/></a>-->
                <div class="product-shop">
                  <div class="f-fix">
                    <!--product name-->
                    <h3 class="product-name">
                      <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                        <?php the_title() ?>
                      </a>
                    </h3>
                    <?php
                    $custom_fields = get_post_custom(get_the_ID());
                    ?>
                    <!--product description-->
                    <div class="price_review">
                      <!--product price-->
                      <div class="price-box">
                        <span class="regular-price" id="product-price-45-widget-new-list">
                          <span class="price price-yellow"><?= $custom_fields['gia'][0] ?></span></span>
                      </div>
                      <!--product reviews-->
<!--                      <div class="ratings">
                        <div class="rating-box">
                          <div class="rating" style="width:67%"></div>
                        </div>
                        <span class="amount"><a href="#" onclick="setLocation('./product.html')">1 Review(s)</a></span>
                      </div>-->
                    </div>
<!--                    <div class="actions js-addcart hover-slide" name="product_0" style="display: none;">
                      product add to cart
                      <div class="actions-cart">
                        <button type="button" title="Add to Cart" class="button btn-cart btn-cart-yellow"><span><span>Add to Cart</span></span></button>
                      </div>
                      product add to compare-wishlist
                      <ul class="add-to-links">
                        <li><a href="./login.html" class="link-wishlist" title="Add to Wishlist"><span class="text">Add to Wishlist</span></a></li>
                        <li><span class="separator">|</span><a href="#" class="link-compare" title="Add to Compare"><span class="text">Add to Compare</span></a></li>
                      </ul>
                    </div>-->
                  </div>
                </div>
            </li>
            <?php
          endwhile;
          ?>

        </ul>
      </div>
    </div>
  </div>
</div>