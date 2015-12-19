<?php
get_header();
$theme_options = get_option('page_info_setting');
?>
<div class="wrapper_content">
  <div class="container">
    <br>
    <div class="row">
      <div class='col-md-3'>
        <aside class='sidebar'>
          <?php dynamic_sidebar('home-sidebar'); ?>
        </aside>
      </div>
      <div class='col-md-9'>
        <section class='main-content'>
          <?php
          piklist('module/products-template',
              array('data' =>
              array(
                  'title' => 'Sửa chữa',
                  'type' => 'sua_chua',
                  'filter' => array(
                      'meta_key' => 'tinh_trang_san_pham',
                      'meta_value' => array('is_home')
                  )
              ))
          );

          piklist('module/products-template',
              array('data' =>
              array(
                  'title' => 'Phụ kiện',
                  'type' => 'phu_kien',
                  'filter' => array(
                      'meta_key' => 'tinh_trang_san_pham',
                      'meta_value' => array('is_home')
                  )
              ))
          );
          piklist('module/products-template',
              array('data' =>
              array(
                  'title' => 'Sản phẩm HOT',
                  'type' => array('phu_kien', 'sua_chua'),
                  'filter' => array(
                      'meta_key' => 'tinh_trang_san_pham',
                      'meta_value' => array('hot')
                  )
              ))
          );
          piklist('module/products-template',
              array('data' =>
              array(
                  'title' => 'Sản phẩm mới',
                  'type' => array('phu_kien', 'sua_chua'),
                  'filter' => array(
                      'meta_key' => 'tinh_trang_san_pham',
                      'meta_value' => array('new')
                  )
              ))
          );
          ?>

        </section>
      </div>
    </div>
  </div>
</div>
<?php
//piklist('module/top-intro', array());
?>

<div class="wrapper_map">
  <div class="container">
    <?= $theme_options['map'] ?>
  </div>
</div>

<?php
get_footer();
