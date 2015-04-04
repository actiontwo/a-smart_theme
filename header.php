
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?= get_bloginfo('language') ?>" lang="<?= get_bloginfo('language') ?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= get_bloginfo('charset') ?>"/>
    <title><?= get_bloginfo('name') ?></title>
    <meta name="description" content="<?= get_bloginfo('description') ?>"/>
    <meta name="keywords" content="Varien, E-commerce"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link rel="icon" href="<?= SKIN ?>galabigshop/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?= SKIN ?>galabigshop/favicon.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript">
      //<![CDATA[
      var review = 'Write Your Own Review';
      var isMobile = /iPhone|iPod|iPad|Phone|Mobile|Android|hpwos/i.test(navigator.userAgent);
      var isPhone = /iPhone|iPod|Phone|Android/i.test(navigator.userAgent);
      var product_zoom = null;
      var urlsite = './';
      var PRODUCTSGRID_POSITION_ABSOLUTE = 'masonry';
      var AJAXCART_AUTOCLOSE = 0;
      var FREEZED_TOP_MENU = 1;
      var PRODUCTSGRID_ITEM_WIDTH = 200;
      var PRODUCTSGRID_ITEM_SPACING = 20;
      var CROSSSELL_ITEM_WIDTH = 210;
      var CROSSSELL_ITEM_SPACING = 30;
      var UPSELL_ITEM_WIDTH = 209;
      var UPSELL_ITEM_SPACING = 30;
      var DETAILS_TAB = 1;
      //]]>
    </script>
    <!--[if lt IE 7]>
    <script type="text/javascript">
      //<![CDATA[
               var BLANK_URL = '<?= JS ?>blank.html';
               var BLANK_IMG = '<?= JS ?>spacer.gif';
           //]]>
        </script>
        <![endif]-->


    <?php wp_head() ?>
  </head>
  <body class="cms-index-index cms-galabigshop-home adapt-3">
    <div class="wrapper">
      <div class="page one-column">
        <div class="wrapper_header">
          <div class="">
            <div class="header-container">
              <div class="header-bottom">
                <div class="container_24">
                  <div class="inner_bottom">
                    <div class="grid_24">
                      <?php
                      $topMenu     = array(
                          'theme_location' => 'topMenu',
                          'container' => 'div',
                          'container_id' => 'top-menu',
                          'container_class' => 'header-bottom-left em_nav menu-header-bottom menu-header-yellow',
                          'menu_class' => 'hnav',
                          'menu' => 'header_nav',
                          'walker' => new Top_Menu_Walker
                      );
                      wp_nav_menu($topMenu);
                      ?>
                      <a href="./index.html" title="GalaBigShop  Theme" class="logo">
                        <img src="<?= SKIN ?>galabigshop/images/logo.png" alt="GalaBigShop  Theme"/></a>

                      <?php get_search_form(); ?>

                      <div class="header-bottom-right header-contact-yellow">
                        <div class="dropdown-cart no_quickshop top-cart-inner">
                          <div class="summary block-title contact">
                            <span>204 Nguyễn Huy Hoàng Đà Nẵng</span>
                            <span>05113.583.286 - 0905.025.309</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p id="back-top" style="display: none;"><a title="Back to Top" href="#top">Back to Top</a></p>
          </div>
        </div>
        <div class="wrapper_menu_hoz menu_desktop">
          <div class="container_24 ">
            <div class="grid_24 em-area05">
              <div class="menu-wrapper wrapper-5_4864">
                <?php
                $primaryMenu = array(
                    'theme_location' => 'primaryMenu',
                    'container' => 'div',
                    'container_id' => 'primary-menu',
                    'container_class' => 'em_nav menu-header-yellow',
                    'menu_class' => 'hnav',
                    'menu' => 'header_nav',
                    'walker' => new Top_Menu_Walker
                );
                wp_nav_menu($primaryMenu);
                ?>             
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="wrapper_menu_hoz menu_mobile">
          <div class="container_24 ">
            <div class="grid_24">
              <div class="menu-wrapper wrapper-5_4864">
                <div class="em_nav menu-header-yellow">
                  <ul class="hnav" id="menu">
                    <li class="menu-item-link menu-item-depth-0">
                      <a href=""><span>Home</span></a>
                    </li>
                    <li class="menu-item-link menu-item-depth-0">
                      <a href=""><span>Danh mục sửa chữa</span></a>
                    </li>
                    <li class="menu-item-link menu-item-depth-0">
                      <a href=""><span>Phụ kiện</span></a>
                    </li>
                    <li class="menu-item-link menu-item-depth-0">
                      <a href=""><span>Unlock,Unbrick</span></a>
                    </li>
                    <li class="menu-item-link menu-item-depth-0">
                      <a href=""><span>Tin tức</span></a>
                    </li>
                    <li class="menu-item-link menu-item-depth-0">
                      <a href=""><span>Bảng giá</span></a>
                    </li>
                    <li class="menu-item-link menu-item-depth-0  ">
                      <a href=""><span>Giới thiệu</span>
                      </a>
                    </li>
                  </ul>
                  <div id="menu-mobile"></div>
                </div>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
