
<!DOCTYPE html>
<html lang="<?= get_bloginfo('language') ?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= get_bloginfo('charset') ?>"/>
    <title><?= get_bloginfo('name') ?></title>
    <meta name="description" content="<?= get_bloginfo('description') ?>"/>
    <meta name="keywords" content="Varien, E-commerce"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link rel="icon" href="<?= URL ?>/logo-asmart.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?= URL ?>/logo-asmart.png" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <?php wp_head() ?>
  </head>

  <body>
    <div class="wrapper_header">
        <div class="container">
          <?php
          $theme_options = get_option('page_info_setting');
          $logo_id       = $theme_options['logo'];
          ?>
          <div class='row'>
            <div class="col-md-4">
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
              <a class="logo" href='<?php home_url() ?>'>
                <img src="<?= wp_get_attachment_url($logo_id) ?>" alt="logo sua chua smartphone danang" width="50px"/>
              </a>
            </div>
            <div class="col-md-4">

              <?php get_search_form(); ?>

            </div>
            <div class="col-md-4">
              <p><?php echo $theme_options['address']; ?></p>
              <p><?php echo $theme_options['landline']; ?> - <?php echo $theme_options['cell_phone']; ?></p>
            </div>
          </div>
        </div>
    </div>
    <div class="wrapper_menu_privary">
        <div class="container">
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