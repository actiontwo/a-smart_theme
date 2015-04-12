<?php
/*
  Title: Left Menu
  Description: A description of what my widget does
 */
?>


<?php
$categories = get_terms($settings['type_side_menu'],
    array(
    'orderby' => 'id'
    , 'order' => 'ASC'
    , 'hide_empty' => false
    , 'parent' => 0
    ));
//debug($categories);
?>

<div class="widget widget-static-block menu">
  <div class="menu-title sub-title-header"><?= $settings['title_side_menu'] ?></div>
  <div class="menu-content">
    <div class="menu-wrapper wrapper-4_3959">
      <div class="em_nav menu-header-yellow">
        <ul class="vnav ">
          <?php
          foreach ($categories as $category):
            $sub_categories = get_terms($settings['type_side_menu'],
                array(
                'orderby' => 'id'
                , 'order' => 'ASC'
                , 'hide_empty' => false
                , 'parent' => $category->term_id
            ));
            ?>
            <li class="menu-item-link menu-item-depth-0 <?= !empty($sub_categories) ? 'menu-item-parent': ''?>">
              <a href="<?= get_permalink($category->term_id) ?>"><span><?= $category->name ?></span></a>
              <?php
//              debug(empty($sub_categories));
              if (!empty($sub_categories)) {

                echo '<a href="#" class="arrow"><span>&gt;</span></a>';
                echo '<ul class="menu-container">';
                echo "<li class='menu-item-hbox menu-item-depth-1 grid_6'>";
                echo "<ul class='menu-container menu-item-yellow'>";
                foreach ($sub_categories as $sub_category) {
                  echo "<li class='menu-item-text menu-item-depth-2'>";
                  echo "<a href=''>$sub_category->name</a>";
                  echo "</li>";
                }
                echo '</ul></li>';
                echo '</ul>';
              }
//debug($categories);
              ?>
            </li>
            <?php
          endforeach;
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>