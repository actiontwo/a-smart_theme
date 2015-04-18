<section id="" class="product-list">

  <div class="panel panel-primary panel-no-border panel-no-bg">
    <div class="panel-heading">
      <h3 class="panel-title"><a href='<?= $data['url'] ?>'><?= $data['title'] ?></a></h3>
    </div>
    <div class="panel-body">
      <ul class="row list-unstyled">
        <?php
        $query_param = array(
            'post_type' => $data['type'],
            'posts_per_page' => 8,
        );

        if (isset($data['tax_query'])) {
          $query_param['tax_query'] = $data['tax_query'];
        }
//        debug($query_param);
        $query = new WP_Query($query_param);
        while ($query->have_posts()):$query->the_post();
          ?>
          <li class="col-md-3">
            <div class="box-white">
              <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="product-image">

                <?php
                ?>
                <img src="<?= get_url_img($post->ID) ?>" alt="..." class="" width="100%">
              </a>
              <hr>
              <div class="product-shop">
                <div class="f-fix">
                  <!--product name-->
                  <h5 class="product-name">
                    <strong>
                      <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                        <?php the_title() ?>
                      </a>
                    </strong>
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
            </div>
          </li>
          <?php
        endwhile;
        ?>
      </ul>
    </div>
  </div>
</section>