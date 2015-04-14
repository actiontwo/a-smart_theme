<?php

class Top_Menu_Walker extends Walker_Nav_Menu
{

// add classes to ul sub-menus
  function start_lvl(&$output, $depth = 0, $args = Array())
  {
    // depth dependent classes
    $indent        = ( $depth > 0 ? str_repeat("\t", $depth) : '' ); // code indent
    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
    $classes       = array(
        ( $display_depth <= 1 ? 'sub-menu' : '' ),
        ( $display_depth % 2 ? '' : '' ),
        ( $display_depth >= 2 ? 'sub-menu-'.$display_depth : '' )//,
        // 'menu-depth-' . $display_depth
    );
    $class_names   = implode(' ', $classes);

    // build html
    $output .= "\n".$indent.'<ul class="'.$class_names.'">'."\n";
  }

// add main/sub classes to li's and links
  function start_el(&$output, $item, $depth = 0, $args = Array(), $id = 0)
  {
//    global $wp_query;
    $indent       = ( $depth > 0 ? str_repeat("\t", $depth) : '' ); // code indent
    // depth dependent classes
//    $depth_classes = array(
//      ( $depth == 0 ? '' : '' ),
//      ( $depth >= 2 ? '' : '' ),
//      ( $depth % 2 ? '' : '' )//,
//        //'menu-item-depth-' . $depth
//    );
//    $depth_class_names = esc_attr(implode('', $depth_classes));
    // passed classes
    $classes      = empty($item->classes) ? array() : (array) $item->classes;
//        var_dump($classes);
    $class_names  = esc_attr(implode(' ',
            apply_filters('nav_menu_css_class', array_filter($classes), $item)));
//       echo $class_names;
    $class_namesa = str_replace("menu-item-has-children", "service-hover",
        $class_names);

    // build html
    //  $output .= $indent . '<li id="nav-menu-item-' . $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

    $output .= $indent.'<li class="'.$class_namesa.' menu-item-link menu-item-depth-0">';

    // link attributes
    $attributes = !empty($item->attr_title) ? ' title="'.esc_attr($item->attr_title).'"'
          : '';
    $attributes .=!empty($item->target) ? ' target="'.esc_attr($item->target).'"'
          : '';
    $attributes .=!empty($item->xfn) ? ' rel="'.esc_attr($item->xfn).'"' : '';
    $attributes .=!empty($item->url) ? ' href="'.esc_attr($item->url).'"' : '';
    // $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

    $item_output = sprintf('%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s', $args->before,
        $attributes, $args->link_before,
        apply_filters('the_title', $item->title, $item->ID), $args->link_after,
        $args->after
    );

    // build html
    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item,
        $depth, $args);
  }
}

class Left_Menu_Walker extends Walker_Nav_Menu
{

// add classes to ul sub-menus
  function start_lvl(&$output, $depth = 0, $args = Array())
  {
    // depth dependent classes
    $indent        = ( $depth > 0 ? str_repeat("\t", $depth) : '' ); // code indent
    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
    $classes       = array(
        ( $display_depth <= 1 ? 'list-unstyled menu-container' : '' ),
        ( $display_depth % 2 ? '' : '' ),
        ( $display_depth >= 2 ? 'list-unstyled sub-menu-'.$display_depth : '' )//,
        // 'menu-depth-' . $display_depth
    );
    $class_names   = implode(' ', $classes);

    // build html
    $output .= "\n".$indent.'<ul class="'.$class_names.'">'."\n";
  }

// add main/sub classes to li's and links
  function start_el(&$output, $item, $depth = 0, $args = Array(), $id = 0)
  {    
    $indent = ( $depth > 0 ? str_repeat("\t", $depth) : '' ); // code indent

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $class_names = esc_attr(implode(' ',
            apply_filters('nav_menu_css_class', array_filter($classes), $item)));

    $class_namesa = str_replace("menu-item-has-children", "menu-item-parent",
        $class_names);
    if ($depth == 0) {
      $output .= "$indent<li class='$class_namesa menu-item-link menu-item-depth-$depth'>";
    }else {
      $output .= "$indent<li class='$class_namesa menu-item-hbox menu-item-depth-$depth grid_6'>";
    }
    // link attributes
    $attributes = !empty($item->attr_title) ? ' title="'.esc_attr($item->attr_title).'"'
          : '';
    $attributes .=!empty($item->target) ? ' target="'.esc_attr($item->target).'"'
          : '';
    $attributes .=!empty($item->xfn) ? ' rel="'.esc_attr($item->xfn).'"' : '';
    $attributes .=!empty($item->url) ? ' href="'.esc_attr($item->url).'"' : '';
    // $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

    $item_output = sprintf('%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s', $args->before,
        $attributes, $args->link_before,
        apply_filters('the_title', $item->title, $item->ID), $args->link_after,
        $args->after
    );

    // build html
    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item,
        $depth, $args);
  }
}