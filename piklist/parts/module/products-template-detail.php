<div class="box-white">
  <a href="<?= $url_link_post ?>" title="<?= $title ?>" class="product-image">
    <img src="<?= $url_link_img ?>" alt="..." class="" width="100%">
  </a>
  <hr>
  <div class="product-shop">
    <div class="f-fix">
      <!--product name-->
      <h5 class="product-name">
        <strong>
          <a href="<?= $url_link ?>" title="<?= $title ?>">

            <?php
            substr("abcdef", 0, -1);
            $length_string = strlen($title);
            if ($length_string > 40) {
              $title = substr($title, 0, 40) . ' ...';
            }
            echo $title;
            ?>
          </a>
        </strong>
      </h5>

      <!--product description-->
      <div class="price_review">
        <!--product price-->
        <div class="price-box">

            <span class="regular-price" id="product-price-45-widget-new-list">
              <span class="price price-yellow"><?= $price ?></span>
              </span>
        </div>

      </div>


    </div>
  </div>
</div>

<div class='content-detail'>
  <h4 class="text-primary"><?= $title ?></h4>
  <?= $short_content ?>
</div>
