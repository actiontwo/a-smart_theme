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
    'meta_key' => 'ban_chay_nhat',
    'meta_value' => array('yes'),
);
$query       = new WP_Query($query_param);
?>


<div class="most-sellest">
  <div class="panel-heading">
    <h3 class="panel-title">Sản phẩm bán chạy</h3>
  </div>
  <div class="panel-body">
    <?php if ($query->have_posts()):while ($query->have_posts()):$query->the_post(); ?>
        <div class="row">
          <div class="col-md-4">
            <a href="<?php the_permalink() ?>"><img src="<?= get_url_img(get_the_ID(), '60x60') ?>" alt ="..." /></a>
          </div>
          <div class="col-md-8">
            <?php $custom_fields = get_post_custom(get_the_ID()); ?>
            <h5 class = "title-product"><a href = "<?php the_permalink() ?>" class = ""><?php the_title() ?></a></h5>
            <p class = "price-product text-primary text-uppercase"><?= $custom_fields['gia'][0] ?></p>
          </div>
        </div>
        <br>
        <?php
      endwhile;
    endif;
    ?>
  </div>
</div>
