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
            ?>
            <li class="col-md-3">
              <?php
              piklist('module/products-template-detail', array(
                'url_link_post' => get_the_permalink(),
                'url_link_img' => get_url_img($post->ID),
                'title' => get_the_title(),
                'price' => $custom_fields['gia'][0],
                'short_content' => $custom_fields['thong_so_ky_thuat'][0]
              ));
              ?>
            </li>
          <?php endwhile;
          ?>
        </ul>
      </div>
    </div>

  <?php endif;
  ?>

</section>