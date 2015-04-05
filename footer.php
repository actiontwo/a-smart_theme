 <?php
      $theme_options = get_option('page_info_setting');
      //echo '<pre>';
      //var_dump($theme_options);
      //echo '</pre>';
 ?>
<div class="wrapper_top_footer">
  <div>
    <div class="container_24 ">
      <div class="grid_24">
        <div class="widget widget-static-block ">
          <div class="footer_info" style="display: block">
            <div id="footer-information" class="box text container_24">
              <div class="grid_12 content">
                <p class="h5">Hệ thống cửa hàng</p>
                <ul>
                  <li><a href="#">Showroom 173 Nguyễn Hoàng</a></li>
                  <li><a href="#">Trung tâm 204 Nguyễn Hoàng</a></li>
                </ul>
              </div>
              <div class="grid_12 omega content">
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
            <div class="follow_news">
              <div class="follow">
                <p class="info-title">Network Socials</p>
                <ul class="none">
                  <li><a title="facebook" href="<?= $theme_options['google_link'] ?>"><span class="icon facebook">Facebook</span></a></li>
                  <li><a title="twitter" href="<?= $theme_options['facebook_link'] ?>"><span class="icon twitter">Twitter</span></a></li>
                  <li><a title="pinterest" href="<?= $theme_options['twitter_link'] ?>"><span class="icon pinterest">Pinterest</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<div class="wrapper_footer">
  <div class="container_24 ">
    <div class="grid_24 em-footer">
      <div class="footer-container">
        <div class="footer">
          <ul>
            <li><a href="./cmspage.html">About Us</a></li>
            <li><a href="./cmspage.html">Customer Service</a></li>
            <li class="last privacy"><a href="./cmspage.html">Privacy Policy</a></li>
          </ul>
          <div class="footer-address">
            <address>© 2013 BigShop. All Rights Reserved.</address>
            Themes by <a href="http://galathemes.com/magento-themes.html" title="Premium  Themes &amp; Premium  Templates">galathemes.com</a>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
  var ADAPT_CONFIG = {
    path: "<?= SKIN ?>galabigshop/css/",
    dynamic: true,
    range: [
      '0px    to 760px  = mobile.css',
      '760px  to 980px  = 720.css',
      '980px  to 1200px = 960.css',
      '1200px   		  = 1200.css'
    ]
  };
</script>
<script type="text/javascript" src="<?= SKIN ?>galabigshop/js/bigshop.js"></script>
<script type="text/javascript" src="<?= SKIN ?>galabigshop/js/adapt.js"></script>
<script type="text/javascript">
  //<![CDATA[
  Mage.Cookies.path = '';
  Mage.Cookies.domain = '';
  //]]>
</script>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="<?= SKIN ?>default/css/styles-ie.css" media="all"/>
<script type="text/javascript" src="<?= SKIN ?>galabigshop/em_megamenupro/js/ie7.js"></script>
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="<?= JS ?>lib/ds-sleight.js"></script>
<script type="text/javascript" src="<?= SKIN ?>galabigshop/js/ie6.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<script type="text/javascript">
  (function () {
    var el = document.getElementById('emcssvariation');
    el.parentNode.removeChild(el);
  })();
</script>
<link rel="stylesheet" id="emcssvariation" type="text/css" media="all" href="<?= SKIN ?>galabigshop/css/theme.css"/>
<![endif]-->
<link href="http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900,1000&amp;subset=latin,cyrillic-ext,cyrillic,greek-ext,greek,vietnamese,latin-ext" rel="stylesheet" type="text/css"/>
<style type="text/css"></style>
<script type="text/javascript">
  //<![CDATA[
  var urlSkinsite = '<?= SKIN ?>galabigshop/';
  LightboxOptions = Object.extend({
    fileLoadingImage: urlSkinsite + 'images/loading.gif',
    fileBottomNavCloseImage: urlSkinsite + 'images/closelabel.png',
    overlayOpacity: 0.8, // controls transparency of shadow overlay

    animate: true, // toggles resizing animations
    resizeSpeed: 7, // controls the speed of the image resizing animations (1=slowest and 10=fastest)

    borderSize: 10, //if you adjust the padding in the CSS, you will need to update this variable

    // When grouping images this is used to write: Image # of #.
    // Change it for non-english localization
    labelImage: "Image",
    labelOf: "of"
  }, window.LightboxOptions || {});
  //]]>
</script>
<script type="text/javascript">
  //<![CDATA[
  optionalZipCountries = ["HK", "IE", "MO", "PA"];
  //]]>
</script>
<script type="text/javascript">
  //<![CDATA[

  if (typeof EM == 'undefined')
    EM = {};
  EM.QuickShop = {
    BASE_URL: './',
    QS_FRM_TYPE: 1,
    QS_FRM_WIDTH: 900,
    QS_FRM_HEIGHT: 650,
    QS_TEXT: 'QUICK SHOP',
    QS_BTN_WIDTH: 96,
    QS_BTN_HEIGHT: 25
  };
  if (EM.QuickShop.QS_FRM_TYPE == 0) {
    EM.QuickShop.QS_FRM_WIDTH = EM.QuickShop.QS_FRM_WIDTH + "%";
    EM.QuickShop.QS_FRM_HEIGHT = EM.QuickShop.QS_FRM_HEIGHT + "%";
  }

  //]]
</script>
<script type="text/javascript">//<![CDATA[
  var Translator = new Translate([]);
  //]]>

</script>





<?php wp_footer() ?>
</body>
</html>