<?php
/*
  Title: Left Menu
  Description: A description of what my widget does
 */
?>


<div class="widget widget-static-block menu">
  <div class="menu-title sub-title-header"><?= $settings['title_side_menu'] ?></div>
  <div class="menu-content">
    <div class="menu-wrapper wrapper-4_3959">
      <?php
      
      $topMenu    = array(
          'theme_location' => $settings['type_side_menu'][0],
          'container' => 'div',
          'container_id' => '',
          'container_class' => 'em_nav menu-header-yellow',
          'menu_class' => 'vnav',
          'menu' => 'header_nav',
          'walker' => new Left_Menu_Walker
      );
      wp_nav_menu($topMenu);
      ?>      
    </div>
  </div>
</div>