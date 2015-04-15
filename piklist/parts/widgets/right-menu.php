<?php
/*
  Title: Left Menu
  Description: A description of what my widget does
 */
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> <?= $settings['title_side_menu'] ?></h3>
  </div>
  <div class="panel-body">
   <?php
  $topMenu = array(
      'theme_location' => $settings['type_side_menu'][0],
      'container' => 'div',
      'container_id' => '',
      'container_class' => 'em_nav menu-header-yellow',
      'menu_class' => 'list-unstyled',
      'menu' => 'header_nav',
      'walker' => new Left_Menu_Walker
  );
  wp_nav_menu($topMenu);
  ?>
  </div>
</div>
