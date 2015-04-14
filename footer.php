<?php
$theme_options = get_option('page_info_setting');
?>
<div class='container'>
  <div class='row'>
    <div class="col-md-6">
      <p class="h5">Hệ thống cửa hàng</p>
      <ul >
        <li><a href="#">Showroom 173 Nguyễn Hoàng</a></li>
        <li><a href="#">Trung tâm 204 Nguyễn Hoàng</a></li>
      </ul>
    </div>
    <div class="col-md-6">
      <p class="h5">Thông tin Asmart</p>
      <ul>
        <li>
          <span>Thống kê&nbsp;&nbsp;&nbsp;</span>
          <span>Tổng số lượt truy cập&nbsp;&nbsp;&nbsp;</span>
          <span>Đang online&nbsp;&nbsp;&nbsp;</span>
        </li>
        <li><a>Giờ làm việc</a></li>
      </ul>
    </div>
  </div>

  <ul class="list-inline">
    <li><a title="facebook" href="<?= $theme_options['google_link'] ?>"><span class="icon facebook">Facebook</span></a></li>
    <li><a title="twitter" href="<?= $theme_options['facebook_link'] ?>"><span class="icon twitter">Twitter</span></a></li>
    <li><a title="pinterest" href="<?= $theme_options['twitter_link'] ?>"><span class="icon pinterest">Pinterest</span></a></li>
  </ul>
</div>

<?php wp_footer() ?>
</body>
</html>