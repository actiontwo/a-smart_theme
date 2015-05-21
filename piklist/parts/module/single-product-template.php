<div class='container'>
  <div class="row">
    <div class='col-md-3'>
      <aside class='sidebar'>
        <?php dynamic_sidebar('home-sidebar'); ?>
      </aside>
    </div>
    <div class='col-md-9'>
      <?php
      wp_reset_postdata();
      ?>
      <section class = 'main-content  em-main-wrapper'>
        <div class = "product-view">
          <div class = "product-essential">

            <div class = "row">
              <div class = "col-md-6">
                <div class = "product-img-box">
                  <p class = "product-image">
                    <a class = "cloud-zoom" id = "image_zoom">
                      <img src = "<?= get_url_img($post->ID, '300x300') ?>" alt = "" title = "HTC Touch Diamond">
                    </a>
                  </p>
                  <div class = "slider more-views slideshow-more-views">
                    <div id = "slider_moreview">
<!--                      <ul class = 'list-inline'>
                        <li class = "item">
                          <a class = "cloud-zoom-gallery">
                            <img width = "70px" height = "70px"
                                 src = "http://placehold.it/70x70" alt = ""/>
                          </a>

                        </li>
                        <li class = "item">
                          <a class = "cloud-zoom-gallery">
                            <img width = "70px" height = "70px"
                                 src = "http://placehold.it/70x70" alt = ""/>
                          </a>

                        </li>
                        <li class = "item">
                          <a class = "cloud-zoom-gallery">
                            <img width = "70px" height = "70px"
                                 src = "http://placehold.it/70x70" alt = ""/>
                          </a>

                        </li>
                      </ul>-->
                    </div>
                  </div>
                </div>
              </div>
              <div class = "col-md-6">
                <div class = "product-shop no-related">
                  <div class = "product-shop-wrapper ">

                    <div class = "product-name">
                      <h1><?php the_title() ?></h1>
                    </div>

                    <?php $custom_fields = get_post_custom(get_the_ID()); ?>
                    <div class="price-box">
                      <span class="regular-price" id="product-price-166">
                        <span class="price text-uppercase"><?= $custom_fields['gia'][0] ?></span>                                    </span>
                    </div>
                    <div class="short-description">
                      <h2>Quick Overview</h2>

                      <div class="std">
                        <?php the_excerpt() ?>
                      </div>
                    </div>

                    <div id="social-share" class="hide-lte0 hide-lte1 hide-lte2"></div>
                  </div>
                </div>
              </div>
              <div class="clearer"></div>
            </div>

          </div>

          <div class='product-details-tab' role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist" id='product-detail-tab'>
              <li role="presentation" class="active">
                <a href="#detail" aria-controls="home" role="tab" data-toggle="tab">Chi tiết</a>
              </li>
              <li role="presentation">
                <a href="#overview" aria-controls="profile" role="tab" data-toggle="tab">Thông số kỹ thuật</a>
              </li>

            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="detail"><?php the_content() ?></div>
              <div role="tabpanel" class="tab-pane" id="overview"><?= $custom_fields['thong_so_ky_thuat'][0] ?></div>
            </div>

          </div>
          <script>
            jQuery('#product-detail-tab a').click(function (e) {
              e.preventDefault();
              jQuery(this).tab('show');
            })
          </script>

        </div>
      </section>
      <?php
//        endwhile;
//      endif;
      ?>

    </div>
  </div>
</div>