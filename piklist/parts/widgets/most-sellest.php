<?php
/*
  Title: Top Seller
  Description: A description of what my widget does
 */
?>
<!--'meta_key' => 'life_insurance_company_represented',
    'meta_value' => $company,-->
<?php
$query_param = array(
  'post_type' => array('sua_chua', 'phu_kien'),
  'meta_key' => 'tinh_trang_san_pham',
  'meta_value' => array('bestseller'),
);
$query = new WP_Query($query_param);
?>


<div class="most-sellest panel-primary panel">
  <div class="panel-heading">
    <h3 class="panel-title">Sản phẩm bán chạy</h3>
  </div>
  <div class="panel-body">
    <div class="most">
      <?php
      $count_product = 0;
      if ($query->have_posts()):while ($query->have_posts()):$query->the_post(); ?>

        <?php
        if ($count_product != 0 && $count_product % 5 == 0) {
          echo '</div><div class="most">';
        }
        $count_product++;
        ?>
        <div class="">
          <div class="col-xs-4">
            <a href="<?php the_permalink() ?>"><img src="<?=
              get_url_img(get_the_ID(),
                '60x60') ?>" alt="..." /></a>
          </div>
          <div class="col-xs-8">
            <?php $custom_fields = get_post_custom(get_the_ID()); ?>
            <h5 class="title-product"><a href="<?php the_permalink() ?>" class=""><?php the_title() ?></a></h5>

            <p class="price-product text-primary text-uppercase"><?= $custom_fields['gia'][0] ?></p>
          </div>
        </div>

      <?php
      endwhile;
      endif;
      ?>
    </div>
  </div>
</div>

<script>
  jQuery(window).load(function () {
    jQuery('.most-sellest .panel-body').bxSlider({
//      mode: 'vertical',
      pager:false,
      easing:'cubic-bezier(0.12,0.12,0.16,0.10)',
      controls:false,
      auto:true,
      pause:5000
    });
  })
</script>
