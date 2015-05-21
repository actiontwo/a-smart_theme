<section id="" class="product-list">


  <?php
  $query_param = array(
      'post_type' => $data['type'],
      'posts_per_page' => isset($data['per_page']) ? $data['per_page'] : -1,
  );
  if (isset($data['filter'])) {
    foreach ($data['filter'] as $key => $value) {
      $query_param[$key] = $value;
    }
  }
  if (isset($data['tax_query'])) {
    $query_param['tax_query'] = $data['tax_query'];
  }
//        debug($query_param);
  $query = new WP_Query($query_param);
  if ($query->have_posts()):
    ?>
    <div class="panel panel-primary panel-no-border panel-no-bg">
      <div class="panel-heading">
        <h3 class="panel-title">
          <a href='<?= $data['url'] ?>'><?= $data['title'] ?></a>
          <div class="group-control-button pull-right">
            <i class='glyphicon glyphicon-chevron-left ct-left'></i>
            <i class='glyphicon glyphicon-chevron-right ct-right'></i>
          </div>
        </h3>
      </div>
      <div class="panel-body product-slider">
        <ul class="row list-unstyled product-slider-group">
          <?php
          $count = 0;
          while ($query->have_posts()):$query->the_post();
            $custom_fields = get_post_custom(get_the_ID());
            if ($count != 0 && $count % 4 == 0) {
              echo '</ul> <ul class="row list-unstyled product-slider-group">';
            }
            $count++;
//          debug($custom_fields['tinh_trang_san_pham']);
            ?>
            <li class="col-md-3">
              <div class="box-white">
                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="product-image">

                  <?php ?>
                  <img src="<?= get_url_img($post->ID) ?>" alt="..." class="" width="100%">
                </a>
                <hr>
                <div class="product-shop">
                  <div class="f-fix">
                    <!--product name-->
                    <h5 class="product-name">
                      <strong>
                        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">

                          <?php
                          substr("abcdef", 0, -1);
                          $title         = get_the_title();
                          $length_string = strlen($title);
                          if ($length_string > 40) {
                            $title = substr($title, 0, 40).' ...';
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
                          <span class="price price-yellow"><?= $custom_fields['gia'][0] ?></span></span>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
              <div class='content-detail'>
                <h3><?php the_title() ?></h3>
                <?php the_excerpt() ?>
              </div>
            </li>
          <?php endwhile;
          ?>
        </ul>
      </div>
    </div>

  <?php endif;
  ?>

</section>