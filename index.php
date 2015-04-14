<?php get_header() ?>

<div class="container">

  <div class="row">
    <div class="col-md-5">
      <?php
      piklist('module/slider', array());
      ?>
    </div>
    <div class='col-md-3'>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Hỗ trợ trực tuyến </h3>
        </div>
        <div class="panel-body">
          <ul class='list-unstyled'>

            <li><b>Kĩ Thuật:</b> 0966555576</li>
            <li><b>Bán Hàng:</b> 0966555576</li>
            <li><b>Thắc mắc khiếu nại:</b> 0966555576</li>
          </ul>
        </div>
      </div>
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
      <div class="fb-page" data-href="https://www.facebook.com/AsmartStore" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/AsmartStore"><a href="https://www.facebook.com/AsmartStore">Asmart Store</a></blockquote></div></div>
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
