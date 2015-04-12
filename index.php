<?php get_header() ?>


<?php
piklist('module/top-intro', array());
?>


<?php
piklist('module/slider', array());
?>

<div class="wrapper_content">
  <div class="container_24 ">

    <div class="grid_6">
      <?php dynamic_sidebar('home-sidebar'); ?>

    </div>
    <div class="grid_18 em-main-wrapper">
      <div class="tabs-widget ">
        <div class="tabs_wrapper" id="emtabs_9eb7b1ac299035218a7c9843074e5146">
          <div class="tab_content">
            <?php
            piklist('module/products-template',
                array('data' =>
                array(
                    'title' => 'Sửa chữa',
                    'type' =>'sua_chua'
                ))
            );

            piklist('module/products-template',
                array('data' =>
                array(
                    'title' => 'Phụ kiện',
                    'type' =>'phu_kien'
                ))
            );
            ?>
          </div>
        </div>
      </div>
    </div>

    <div class="clear"></div>
  </div>
</div>
<?php
$theme_options = get_option('page_info_setting');
?>
<div class="wrapper_map">
  <div class="container_24 ">
    <div class="grid_24">
      <?= $theme_options['map'] ?>
    </div>
    <div class="clear"></div>
  </div>
</div>

<?php
get_footer();
