<!DOCTYPE html>
<html lang="<?= get_bloginfo('language') ?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= get_bloginfo('charset') ?>" />
    <title><?= (!is_home() ? get_the_title().'-' : '').get_bloginfo('name') ?></title>
    <meta name="description" content="<?= get_bloginfo('description') ?>" />
    <meta name="keywords" content="Varien, E-commerce" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="icon" href="<?= URL ?>/logo-asmart.png" type="image/x-icon" />
    <link rel="shortcut icon" href="<?= URL ?>/logo-asmart.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <?php wp_head() ?>
  </head>

  <body>
    <script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
          return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=176945742497367";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
    <div class="wrapper_header">
      <div class="container">
        <?php
        $theme_options = get_option('page_info_setting');
        $logo_id       = $theme_options['logo'];
        ?>
        <div class='row'>
          <div class="col-md-3">
            <?php
            $topMenu       = array(
                'theme_location' => 'topMenu',
                'container' => 'nav',
                'container_id' => 'top-menu',
                'container_class' => '',
                'menu_class' => 'list-unstyled list-inline',
                'menu' => 'header_nav',
                'walker' => new Top_Menu_Walker
            );
            wp_nav_menu($topMenu);
            ?>
            <a class="logo" href='<?= home_url() ?>'>
              <img src="<?= wp_get_attachment_url($logo_id) ?>" alt="logo sua chua smartphone danang" width="50px" />
            </a>
          </div>
          <div class="col-md-5">
            <!--<p class="text-center">Uy Tín, Chất Lượng, Giá Tốt Nhất</p>-->
            <?php get_search_form(); ?>

          </div>
          <div class="col-md-4">
            <div class="text-center">
              <p><i class='glyphicon glyphicon-map-marker'></i> <?php echo $theme_options['address']; ?></p>
              <p><?php echo $theme_options['landline']; ?></p>
              <p><i class='glyphicon glyphicon-phone'></i> <?php echo $theme_options['cell_phone']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="wrapper_menu_privary">
        <div class='row'>
          <div class='col-md-12'>
            <?php
            $primaryMenu   = array(
                'theme_location' => 'primaryMenu',
                'container' => 'nav',
                'container_id' => 'primary-menu',
                'container_class' => '',
                'menu_class' => 'list-unstyled list-inline',
                'menu' => 'header_nav',
                'walker' => new Top_Menu_Walker
            );
            wp_nav_menu($primaryMenu);
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php if (is_home()): ?>
      <div class="wrapper-slider">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <?php
              piklist('module/slider', array());
              ?>
            </div>
            <div class="col-md-3">
              <div class="row">
                <div class="col-md-12">
                  <div class="text-center support-online">
                    <p class="h5 text-primary">Hỗ trợ trực tuyến </p>
                    <table class='table'>
                      <tbody>
                        <tr>
                          <th><b>Kĩ Thuật:</b></th>
                          <td>
                            <a href="ymsgr:sendIM?<?= $theme_options['yh_techical'] ?>">
                              <img src="http://opi.yahoo.com/online?u=<?= $theme_options['yh_techical'] ?>&amp;m=g&amp;t=1">
                            </a>
                            <span>0905.035.309</span>
                          </td>

                        </tr>
                        <tr>
                          <th><b>Bán Hàng:</b></th>
                          <td><a href="ymsgr:sendIM?<?= $theme_options['yh_seller'] ?>">
                              <img src="http://opi.yahoo.com/online?u=<?= $theme_options['yh_seller'] ?>&amp;m=g&amp;t=1"></a>
                            <span>05113.583.286</span>
                          </td>

                        </tr>
                        <tr>
                          <th><b>Thắc mắc khiếu nại:</b></th>
                          <td>
                            <a href="ymsgr:sendIM?<?= $theme_options['yh_complaint'] ?>">
                              <img src="http://opi.yahoo.com/online?u=<?= $theme_options['yh_complaint'] ?>&amp;m=g&amp;t=1"></a>
                            <span>0905.035.628</span>
                          </td>

                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="facebook-page">
                    <div id="fb-root"></div>
                    <?= $theme_options['fanpage_facebook'] ?>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    <?php endif; ?>

