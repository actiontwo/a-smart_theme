<?php
$theme_options = get_option('page_info_setting');
?>
<div class="wrapper_footer">
  <div class='container'>
    <div class='row'>
      <div class="col-md-3">
        <div class="stores-list">
          <p class="h5 text-primary">Hệ thống cửa hàng</p>
          <ul class='list-unstyled'>
            <li><a href="#">Showroom 173 Nguyễn Hoàng</a></li>
            <li><a href="#">Trung tâm 204 Nguyễn Hoàng</a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-3">
        <p class="h5 text-primary">Thông tin Asmart</p>
        <ul class='list-unstyled'>
          <li>Thống kê : </li>
          <li>Tổng số lượt truy cập :<?= wp_statistics_visitor('total') ?></li>
          <li>Đang online: <?= wp_statistics_useronline() ?></li>
          <li>Giờ làm việc: 8h-19h</li>
          <li>Chủ nhật: 9h-12h</li>
        </ul>
      </div>
      <div class='col-md-6'>
      <div class="row">
      <div class='col-md-7'>


      </div>
      <div class='col-md-5'>
        <p class="h5 text-primary">Follow Us</p>
        <ul class="list-inline">

          <li><a title="facebook" href="<?= $theme_options['google_link'] ?>"><span class="icon facebook"></span></a></li>
          <li><a title="twitter" href="<?= $theme_options['facebook_link'] ?>"><span class="icon twitter"></span></a></li>
          <li><a title="pinterest" href="<?= $theme_options['twitter_link'] ?>"><span class="icon pinterest"></span></a></li>
        </ul>
      </div>
      </div>
      </div>
      
    </div>
    <br>
    <br>

  </div>
</div>
<div class='show-detail-product'>
  adsfas
</div>
<?php wp_footer() ?>
</body>
</html>