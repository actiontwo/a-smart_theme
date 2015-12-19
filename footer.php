<?php
$theme_options = get_option('page_info_setting');
?>
<div class="wrapper_footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-8">
        <div class="info-store">
          <p><b>Hệ thống cửa hàng:</b> <a href="http://www.a-smart.vn/">Showroom 173 Nguyễn Hoàng</a>, <a href="http://www.a-smart.vn/">Trung tâm bảo hành sữa chữa 204 Nguyễn Hoàng</a></p>

          <p><b>Giờ làm việc :</b> 8h-19h, <b>Chủ nhật: :</b> 9h-12h </p>
          <br>
          <p>Bản quyền ©2015 <a href="http://www.a-smart.vn/">a-smart</a></p>
       </div>
      </div>
      <div class="col-xs-4">
        <div class="follow-us pull-right">
          <ul class="list-unstyled list-inline">
            <li><a title="facebook" href="<?= $theme_options['facebook_link'] ?>"><i class="fa fa-facebook-square"></i></a></li>
            <li><a title="twitter" href="<?= $theme_options['twitter_link'] ?>"><i class="fa fa-twitter-square"></i></a></li>
            <li><a title="google" href="<?= $theme_options['google_link'] ?>"><i class="fa fa-google-plus-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class='container' style="display: none">
    <div class='row'>
      <div class="col-xs-3">
        <div class="stores-list">
          <p class="h5 text-primary">Hệ thống cửa hàng</p>
          <ul class='footer-list'>
            <li><a href="http://www.a-smart.vn/">Showroom 173 Nguyễn Hoàng</a></li>
            <li><a href="http://www.a-smart.vn/">Trung tâm 204 Nguyễn Hoàng</a></li>
          </ul>
        </div>
      </div>

      <div class="col-xs-3">
        <p class="h5 text-primary">Thông tin Asmart</p>
        <ul class='footer-list'>
          <!--          <li>Thống kê : </li>-->
          <!--          <li>Tổng số lượt truy cập : <b>--><? ////= wp_statistics_visitor('total') ?><!--</b></li>-->
          <!--          <li>Đang online: <b> --><? ////= wp_statistics_useronline() ?><!--</b></li>-->
          <li>Giờ làm việc: <b>8h-19h</b></li>
          <li>Chủ nhật: <b>9h-12h</b></li>
        </ul>
      </div>
      <div class='col-xs-6'>
        <div class="row">
          <div class='col-xs-7'>


          </div>
          <div class='col-xs-5'>
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
</div>
<?php wp_footer() ?>
</body>
</html>