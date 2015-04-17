<?php get_header() ;
$theme_options = get_option('page_info_setting');
?>
<div class="wrapper_content">
    <div class="container">
      <div class="row">
          <div class="col-md-6">
              <?php
              piklist('module/slider', array());
              ?>
          </div>
        <div class='col-md-6'>
           
          <div id="fb-root"></div>
          <script>(function (d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id))
                return;
              js = d.createElement(s);
              js.id = id;
              js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=176945742497367";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
         <?= $theme_options['fanpage_facebook']?>
        </div>
      </div>
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
                    'type' => 'sua_chua'
                ))
            );

            piklist('module/products-template',
                array('data' =>
                array(
                    'title' => 'Phụ kiện',
                    'type' => 'phu_kien'
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
