<?php

function themeslug_enqueue_script()
{
    // Add script js to footer
    $scripts = array(
        array(
            'id' => 'jquery',
            'src' => "//code.jquery.com/jquery-1.11.2.min.js",
            'in_footer' => true),
        array(
            'id' => 'bootstrap',
            'src' => BOOTSTRAP . "js/bootstrap.min.js",
            'in_footer' => true),
//      array(
//          'id' => 'prototype',
//          'src' => JS."prototype/prototype.js",
//          'in_footer' => false),
//      array(
//          'id' => 'validation',
//          'src' => JS."prototype/validation.js",
//          'in_footer' => false),
//      array(
//          'id' => 'builder',
//          'src' => JS."scriptaculous/builder.js",
//          'in_footer' => false),
//      array(
//          'id' => 'effects',
//          'src' => JS."scriptaculous/effects.js",
//          'in_footer' => false),
//      array(
//          'id' => 'dragdrop',
//          'src' => JS."scriptaculous/dragdrop.js",
//          'in_footer' => false),
//      array(
//          'id' => 'controls',
//          'src' => JS."scriptaculous/controls.js",
//          'in_footer' => false),
//      array(
//          'id' => 'slider',
//          'src' => JS."scriptaculous/slider.js",
//          'in_footer' => false),
//      array(
//          'id' => 'js',
//          'src' => JS."varien/js.js",
//          'in_footer' => false),
//      array(
//          'id' => 'form',
//          'src' => JS."varien/form.js",
//          'in_footer' => false),
//      array(
//          'id' => 'menu',
//          'src' => JS."varien/menu.js",
//          'in_footer' => false),
//      array(
//          'id' => 'translate',
//          'src' => JS."mage/translate.js",
//          'in_footer' => false),
//      array(
//          'id' => 'cookies',
//          'src' => JS."mage/cookies.js",
//          'in_footer' => false),
//      array(
//          'id' => 'jquery-1.8.3.min',
//          'src' => JS."em/jquery-1.8.3.min.js",
//          'in_footer' => false),
//      array(
//          'id' => 'jquery-noconflict',
//          'src' => JS."em/jquery-noconflict.js",
//          'in_footer' => false),
//      array(
//          'id' => 'jquery.ba-hashchange.min.',
//          'src' => JS."em/jquery.ba-hashchange.min.js",
//          'in_footer' => false),
//      array(
//          'id' => 'jquery.hoverIntent',
//          'src' => JS."em/jquery.hoverIntent.js",
//          'in_footer' => false),
//      array(
//          'id' => 'colorpicker',
//          'src' => JS."em/colorpicker.js",
//          'in_footer' => false),
//      array(
//          'id' => 'jquery.social.share.2.2.min',
//          'src' => SKIN."galabigshop/js/jquery.social.share.2.2.min.js",
//          'in_footer' => false),
//      array(
//          'id' => 'jquery.isotope',
//          'src' => SKIN."galabigshop/ajaxproducts/jquery.isotope.js",
//          'in_footer' => false),
//      array(
//          'id' => 'jquery.infinitescroll',
//          'src' => SKIN."galabigshop/ajaxproducts/jquery.infinitescroll.js",
//          'in_footer' => false),
//      array(
//          'id' => 'manual-trigger',
//          'src' => SKIN."galabigshop/ajaxproducts/behaviors/manual-trigger.js",
//          'in_footer' => false),
//      array(
//          'id' => 'slide-up-down',
//          'src' => SKIN."galabigshop/js/slide-up-down.js",
//          'in_footer' => false),
//      array(
//          'id' => 'lightbox',
//          'src' => SKIN."galabigshop/js/lightbox.js",
//          'in_footer' => false),
//      array(
//          'id' => 'ios-orientationchange-fix',
//          'src' => SKIN."galabigshop/js/ios-orientationchange-fix.js",
//          'in_footer' => false),
//      array(
//          'id' => 'selectUl',
//          'src' => SKIN."galabigshop/js/selectUl.js",
//          'in_footer' => false),
//      array(
//          'id' => 'cloud-zoom.1.0.2',
//          'src' => SKIN."galabigshop/js/cloud-zoom.1.0.2.js",
//          'in_footer' => false),
//      array(
//          'id' => 'jquery.form',
//          'src' => SKIN."galabigshop/js/em_ajaxcart/jquery.form.js",
//          'in_footer' => false),
//      array(
//          'id' => 'lightbox',
//          'src' => SKIN."galabigshop/js/em_ajaxcart/lightbox.js",
//          'in_footer' => false),
//      array(
//          'id' => 'em_ajaxcart',
//          'src' => SKIN."galabigshop/js/em_ajaxcart/em_ajaxcart.js",
//          'in_footer' => false),
//      array(
//          'id' => 'menu-1',
//          'src' => SKIN."galabigshop/em_megamenupro/js/menu.js",
//          'in_footer' => false),
//      array(
//          'id' => 'jquery.fancybox',
//          'src' => SKIN."galabigshop/js/fancybox/jquery.fancybox.js",
//          'in_footer' => false),
//      array(
//          'id' => 'jquery.mousewheel-3.0.6.pack',
//          'src' => SKIN."galabigshop/js/fancybox/jquery.mousewheel-3.0.6.pack.js",
//          'in_footer' => false),
//      array(
//          'id' => 'em_quickshop',
//          'src' => SKIN."galabigshop/js/em_quickshop.js",
//          'in_footer' => false),
//      array(
//          'id' => 'hammer',
//          'src' => SKIN."galabigshop/sliderwidget/hammer.js",
//          'in_footer' => false),
//      array(
//          'id' => 'csslider_1.1',
//          'src' => SKIN."galabigshop/sliderwidget/csslider_1.1.js",
//          'in_footer' => false),
//      array(
//          'id' => 'jquery.themepunch.plugins.min',
//          'src' => SKIN."galabigshop/em_slideshow2/js/jquery.themepunch.plugins.min.js",
//          'in_footer' => false),
//      array(
//          'id' => 'jquery.themepunch.revolution.min',
//          'src' => SKIN."galabigshop/em_slideshow2/js/jquery.themepunch.revolution.min.js",
//          'in_footer' => false),
//      array(
//          'id' => 'emtabs',
//          'src' => SKIN."galabigshop/emtabs/js/emtabs.js",
//          'in_footer' => false),
//       array(
//          'id' => 'jquery.slicknav',
//          'src' => "http://slicknav.com/mobile-menu/jquery.slicknav.js",
//          'in_footer' => false),
    );

    foreach ($scripts as $script) {
        wp_enqueue_script($script['id'], $script['src'], array(), null,
            $script['in_footer']);
    }
    // Add style  js to header
    $styles = array(
        array(
            'id' => 'bootstrap',
            'src' => BOOTSTRAP . "css/bootstrap.min.css",
            'in_footer' => false),
        array(
            'id' => 'bootstrap-theme',
            'src' => BOOTSTRAP . "css/bootstrap-theme.min.css",
            'in_footer' => false),
        array(
            'id' => 'normalize-',
            'src' => "https://necolas.github.io/normalize.css/3.0.2/normalize.css",
            'in_footer' => false),

        array(
            'id' => 'widgets',
            'src' => CSS . "style.css",
            'in_footer' => false)
//      array(
//          'id' => 'em_cloudzoom',
//          'src' => SKIN."galabigshop/css/em_cloudzoom.css",
//          'in_footer' => false),
//      array(
//          'id' => 'em_variation',
//          'src' => SKIN."galabigshop/css/em_variation.css",
//          'in_footer' => false),
//      array(
//          'id' => 'lightbox',
//          'src' => SKIN."galabigshop/css/lightbox.css",
//          'in_footer' => false),
//      array(
//          'id' => 'social',
//          'src' => SKIN."galabigshop/css/social.css",
//          'in_footer' => false),
//      array(
//          'id' => 'isotope',
//          'src' => SKIN."galabigshop/ajaxproducts/isotope.css",
//          'in_footer' => false),
//      array(
//          'id' => 'styles',
//          'src' => SKIN."galabigshop/css/styles.css",
//          'in_footer' => false),
//      array(
//          'id' => 'em_ajaxcart',
//          'src' => SKIN."galabigshop/css/em_ajaxcart/em_ajaxcart.css",
//          'in_footer' => false),
//      array(
//          'id' => 'styles',
//          'src' => SKIN."galabigshop/em_blog/css/styles.css",
//          'in_footer' => false),
//      array(
//          'id' => 'menu',
//          'src' => SKIN."galabigshop/em_megamenupro/css/menu.css",
//          'in_footer' => false),
//      array(
//          'id' => 'em_productlabels',
//          'src' => SKIN."galabigshop/css/em_productlabels.css",
//          'in_footer' => false),
//      array(
//          'id' => 'em_quickshop',
//          'src' => SKIN."galabigshop/css/em_quickshop.css",
//          'in_footer' => false),
//      array(
//          'id' => 'jquery.fancybox',
//          'src' => SKIN."galabigshop/css/fancybox/jquery.fancybox.css",
//          'in_footer' => false),
//      array(
//          'id' => 'csslider',
//          'src' => SKIN."galabigshop/sliderwidget/csslider.css",
//          'in_footer' => false),
//      array(
//          'id' => 'settings',
//          'src' => SKIN."galabigshop/em_slideshow2/css/settings.css",
//          'in_footer' => false),
//      array(
//          'id' => 'captions',
//          'src' => SKIN."galabigshop/em_slideshow2/css/captions.css",
//          'in_footer' => false),
//      array(
//          'id' => 'emtabs',
//          'src' => SKIN."galabigshop/emtabs/css/emtabs.css",
//          'in_footer' => false),
//      array(
//          'id' => 'style',
//          'src' => CSS."/style.css",
//          'in_footer' => false),
//      array(
//          'id' => 'style',
//          'src' => URL."/style.css",
//          'in_footer' => false),
//      array(
//          'id' => 'emcssvariation',
//          'src' => SKIN."galabigshop/css/theme.css",
//          'in_footer' => false),
//      array(
//          'id' => 'slicknav',
//          'src' => "http://slicknav.com/mobile-menu/slicknav.css",
//          'in_footer' => false),
    );

    foreach ($styles as $style) {
        wp_enqueue_style($style['id'], $style['src'], array(), null,
            $style['in_footer']);
    }
}

add_action('wp_enqueue_scripts', 'themeslug_enqueue_script');
