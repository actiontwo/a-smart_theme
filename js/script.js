
jQuery(document).ready(function () {
//  jQuery('.product-slider').bxSlider({
//    slideWidth: 230,
//    minSlides: 4,
//    maxSlides: 4,
//    slideMargin: 0,
//    hideControlOnEnd: true,
//    pager: false,
////    mode:'favd'
//  });
  var show_product_detail = jQuery('.show-detail-product');
  jQuery('.product-slider-group > li').mouseenter(function (e) {
    var position = jQuery(this).offset();

    var po = {
      top: position.top,
      left: position.left + jQuery(this).outerWidth()
    };
    show_product_detail.css(po).show().html(jQuery(this).find('.content-detail').html());

  });
  jQuery('.product-slider-group > li').mouseleave(function () {
    show_product_detail.hide();
  });

  slider();
});

function slider() {
  var products = jQuery('.product-slider');
  var btnleft = jQuery('.ct-left');
  var btnright = jQuery('.ct-right');
  var current = {};
  jQuery('.product-list').each(function () {
    current[jQuery(this).index()] = 0;
  });


  btnright.click(function () {
    var productList = jQuery(this).parents('.product-list');
    var productGroups = productList.find('.product-slider-group');
    var index = productList.index();
    productGroups[current[index]].style.display = 'none';
    current[index]++;
    current[index] = current[index] % productGroups.length;
    productGroups[current[index]].style.display = 'block';
  });
  btnleft.click(function () {
    var productList = jQuery(this).parents('.product-list');
    var productGroups = productList.find('.product-slider-group');
    var index = productList.index();
    productGroups[current[index]].style.display = 'none';
    current[index]--;
    if (current[index] < 0) {
      current[index] = productGroups.length - 1;
    }
    current[index] = current[index] % productGroups.length;
    productGroups[current[index]].style.display = 'block';
  });
  products.each(function () {

    var productList = jQuery(this).parents('.product-list');
    var productGroups = jQuery(this).find('.product-slider-group');
    if (productGroups.length < 2) {
      return;
    }
    var index = productList.index();
    productGroups.hide();

    productGroups[current[index]].style.display = 'block';
    setInterval(function () {
//      console.log (index);
      productGroups[current[index]].style.display = 'none';
      current[index]++;
      current[index] = current[index] % productGroups.length;
      productGroups[current[index]].style.display = 'block';
    }, 10000);
  });
//  products.each(function () {
//    var thisProduct = jQuery(this);
//    var items = jQuery(this).find('> li');
//    var length = items.length;
//    if (length < 4) {
//      return
//    }
//    items.css({
//      display: 'none'
//    });
//    for (var i = 0; i < 4; i++) {
//      thisProduct.find('> li:eq(' + i + ')').show();
//    }
//    setTimeout(function () {
//      
//    }, 3000);
//
//    console.log(length);
//
//  });


}
