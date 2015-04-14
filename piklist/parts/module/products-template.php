<section id="" class="product-list">
  <div class="page-title title-header"><h1><?= $data['title'] ?></h1></div>

  <ul class="row list-unstyled">
    <?php
    $query_param = array(
        'post_type' => $data['type'],
        'posts_per_page' => 8
    );
    $query       = new WP_Query($query_param);
    while ($query->have_posts()):$query->the_post();
      ?>
      <li class="col-md-3">
        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="product-image">

          <?php
          $url           = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
          ?>
          <img src="<?= $url ?>" alt="..." class="img-thumbnail" width="100%">
          <div class="product-shop">
            <div class="f-fix">
              <!--product name-->
              <h5 class="product-name">
                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                  <?php the_title() ?>
                </a>
              </h5>
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

              </div>

            </div>
          </div>
      </li>
      <?php
    endwhile;
    ?>
  </ul>
</section>