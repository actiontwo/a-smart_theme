<?php get_header() ?>

<div class="container">

  <div class="row">
    <div class="col-md-5">
      <?php
      piklist('module/slider', array());
      ?>
    </div>
    <div class='col-md-3'>
      <h5>Hỗ trợ trực tuyến </h5>
      <ul>

        <li>Kĩ Thuật:</li>
        <li>Bán Hàng:</li>
        <li>Thắc mắc khiếu nại:</li>
      </ul>
    </div>
    <div class='col-md-4'>
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
      <div class="fb-page" data-href="https://www.facebook.com/AsmartStore" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
        <div class="fb-xfbml-parse-ignore">
          <blockquote cite="https://www.facebook.com/AsmartStore">
            <a href="https://www.facebook.com/AsmartStore">Asmart Store</a>
          </blockquote>
        </div>
      </div>
    </div>

  </div>
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
<?php
//piklist('module/top-intro', array());
?>





<?php
$theme_options = get_option('page_info_setting');
?>
<div class="container">
  <?= $theme_options['map'] ?>
</div>

<?php
get_footer();
