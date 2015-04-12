<?php get_header() ?>

<div class="wrapper_content">
  <div class="container_24 ">
    <div class="grid_24 em-area01">
      <div class="widget widget-static-block ">
        <div class="home-top-information">
          <div class="grid_8 alpha">
            <p><img src="<?= SKIN ?>galabigshop/images/icon_info_search.png" alt="sample-banner"></p>
            <p class="info-title">Hỗ trợ trực tuyến</p>
          </div>
          <div class="grid_8">
            <p><img src="<?= SKIN ?>galabigshop/images/icon_info_shipping.png" alt="sample-banner"></p>
            <p class="info-title">Uy tín, chất lượng, giá tốt</p>
          </div>
          <div class="grid_8 omega">
            <p><img src="<?= SKIN ?>galabigshop/images/icon_info_support.png" alt="sample-banner"></p>
            <p class="info-title">Fanpage</p>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="wrapper_content">
  <div class="wrapper_area0203">
    <div class="container_24">
      <div class="inner_slideshow">
        <div id="rev_slider_1_1490_wrapper" class="rev_slider_wrapper" style="margin:0px auto;background-color:#ffffff;padding:10px;margin-top:0px;margin-bottom:0px;">
          <div id="rev_slider_1_1490" class="rev_slider" style="display:none;">
            <ul>
              <!-- THE BOXSLIDE EFFECT EXAMPLES  WITH LINK ON THE MAIN SLIDE EXAMPLE -->
              <li data-transition="demo" data-slotamount="7" data-link="category.html" data-delay="5000">
                <img src="<?= MEDIA ?>em_slideshow/1380189275_0_slideshow1.jpg" alt=""/>

                <div class="caption lft bkg_color" data-x="0" data-y="250" data-speed="1000" data-start="500" data-easing="easeInOutExpo">
                  <p>bkg_color</p>
                </div>
                <div class="caption lfl " data-x="20" data-y="258" data-speed="1000" data-start="1500" data-easing="easeInOutQuint">
                  <p style="font-size:370%;color:#fff;font-family:Roboto;font-weight:200;line-height:1">Sony New 4K TV</p>
                </div>
                <div class="caption lfr " data-x="20" data-y="309" data-speed="1000" data-start="2000" data-easing="easeInOutCubic">
                  <p style="font-family:Roboto;color:#fff;font-size:130%;font-weight:300;font-style:italic;line-height:1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                </div>
                <div class="caption lfb btn" data-x="585" data-y="285" data-speed="1000" data-start="3000" data-easing="easeInOutBounce"><a href="#" style="line-height:1;font-weight:400;font-family:Roboto;">START AT $999.00</a></div>
              </li>
              <li data-transition="demo" data-slotamount="7" data-link="category.html" data-delay="5000">
                <img src="<?= MEDIA ?>em_slideshow/1380248952_0_slideshow3.jpg" alt=""/>

                <div class="caption sfl bkg_color" data-x="0" data-y="250" data-speed="1000" data-start="500" data-easing="easeOutBack">
                  <p>bkg_color</p>
                </div>
                <div class="caption randomrotate " data-x="20" data-y="258" data-speed="1000" data-start="1500" data-easing="easeInOutQuint">
                  <p style="font-size:370%;color:#fff;font-family:Roboto;font-weight:200;line-height:1">Sony New 4K TV</p>
                </div>
                <div class="caption lfb " data-x="20" data-y="309" data-speed="1000" data-start="2000" data-easing="easeInOutElastic">
                  <p style="font-family:Roboto;color:#fff;font-size:130%;font-weight:300;font-style:italic;line-height:1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                </div>
                <div class="caption lfr btn" data-x="585" data-y="285" data-speed="1000" data-start="2000" data-easing="easeInOutCirc"><a href="#" style="line-height:1;font-weight:400;font-family:Roboto;">START AT $999.00</a></div>
              </li>
              <li data-transition="demo" data-slotamount="7" data-link="category.html" data-delay="5000">
                <img src="<?= MEDIA ?>em_slideshow/1380248952_1_slideshow2.jpg" alt=""/>

                <div class="caption fade bkg_color" data-x="0" data-y="250" data-speed="1000" data-start="500" data-easing="easeInOutBack">
                  <p>bkg_color</p>
                </div>
                <div class="caption sfb " data-x="20" data-y="258" data-speed="1000" data-start="1500" data-easing="easeInOutCirc">
                  <p style="font-size:370%;color:#fff;font-family:Roboto;font-weight:200;line-height:1">Sony New 4K TV</p>
                </div>
                <div class="caption sfr " data-x="20" data-y="309" data-speed="1000" data-start="2000" data-easing="easeInOutQuad">
                  <p style="font-family:Roboto;color:#fff;font-size:130%;font-weight:300;font-style:italic;line-height:1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                </div>
                <div class="caption fade btn" data-x="585" data-y="285" data-speed="1000" data-start="3000" data-easing="easeInOutSine"><a href="#" style="line-height:1;font-weight:400;font-family:Roboto;">START AT $999.00</a></div>
              </li>
            </ul>
            <div class="tp-bannertimer"></div>
          </div>
        </div>
        <script type="text/javascript">
          jQuery('#menu').slicknav({prependTo: '#menu-mobile'});
          var tpj = jQuery;
          tpj.noConflict();

          var revapi1;

          tpj(window).load(function () {

            if (tpj.fn.cssOriginal != undefined)
              tpj.fn.css = tpj.fn.cssOriginal;

            if (tpj('#rev_slider_1_1490').revolution == undefined)
              revslider_showDoubleJqueryError('#rev_slider_1_1490');
            else
              revapi1 = tpj('#rev_slider_1_1490').show().revolution(
                      {
                        delay: 5000,
                        startwidth: 880,
                        startheight: 340,
                        hideThumbs: 200,
                        thumbWidth: 100,
                        thumbHeight: 50,
                        thumbAmount: 5,
                        navigationType: "bullet",
                        navigationArrows: "none",
                        navigationStyle: "round",
                        touchenabled: "on",
                        onHoverStop: "on",
                        navigationHAlign: "center",
                        navigationVAlign: "bottom",
                        navigationHOffset: 0,
                        navigationVOffset: 20,
                        soloArrowLeftHalign: "left",
                        soloArrowLeftValign: "center",
                        soloArrowLeftHOffset: "20",
                        soloArrowLeftVOffset: "0",
                        soloArrowRightHalign: "right",
                        soloArrowRightValign: "center",
                        soloArrowRightHOffset: "20",
                        soloArrowRightVOffset: "0",
                        shadow: 0,
                        fullWidth: "off",
                        stopLoop: "on",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0
                      });
          });
        </script>
      </div>
    </div>
  </div>
</div>
<div class="wrapper_content">
  <div class="container_24 ">
   
    <div class="grid_6">
       <?php dynamic_sidebar('home-sidebar');?>
   
      <div class="no_quickshop">
        <div class="widget widget-recentreview-products">
          <div class="widget-title">
            <div class="menu-title sub-title-header">Sản phẩm bán chạy</div>
          </div>
          <div class="widget-products">
            <ul class="products-list">
              <li class="item" style="  ">
                <a href="./product.html" title="Sony Ericsson W810i" class="product-image">
                  <img src="<?= MEDIA ?>catalog/product/img_product_003.jpg" width="70" height="70" alt="Sony Ericsson W810i"></a>
                <div class="product-shop">
                  <div class="f-fix">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating" style="width:62%"></div>
                      </div>
                      <span class="amount"><a href="#" onclick="setLocation('./product.html')">3 Review(s)</a></span>
                    </div>
                    <h3 class="product-name"><a href="./product.html" title="Sony Ericsson W810i)">Sony Ericsson W810i</a></h3>
                    <div class="price-box">
                      <span class="regular-price" id="product-price-18-widget-new-list">
                        <span class="price price-yellow">$399.99</span>                                    </span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item" style="  ">
                <a href="./product.html" title="Acer Ferrari 3200 Notebook Computer PC" class="product-image">
                  <img src="<?= MEDIA ?>catalog/product/img_product_004.jpg" width="70" height="70" alt="Acer Ferrari 3200 Notebook Computer PC"></a>
                <div class="product-shop">
                  <div class="f-fix">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating" style="width:64%"></div>
                      </div>
                      <span class="amount"><a href="#" onclick="setLocation('./product.html')">6 Review(s)</a></span>
                    </div>
                    <h3 class="product-name"><a href="./product.html" title="Acer Ferrari 3200 Notebook Computer PC)">Acer Ferrari 3200 Notebook Computer PC</a></h3>
                    <div class="price-box">
                      <span class="regular-price" id="product-price-26-widget-new-list">
                        <span class="price price-yellow">$1,799.99</span>                                    </span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item last" style="  ">
                <a href="./product.html" title="CN Clogs Beach/Garden Clog" class="product-image">
                  <img src="<?= MEDIA ?>catalog/product/img_product_005.jpg" width="70" height="70" alt="CN Clogs Beach/Garden Clog"></a>
                <div class="product-shop">
                  <div class="f-fix">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating" style="width:62%"></div>
                      </div>
                      <span class="amount"><a href="#" onclick="setLocation('./product.html')">3 Review(s)</a></span>
                    </div>
                    <h3 class="product-name"><a href="./product.html" title="CN Clogs Beach/Garden Clog)">CN Clogs Beach/Garden Clog</a></h3>
                    <div class="price-box">
                      <span class="regular-price" id="product-price-83-widget-new-list">
                        <span class="price price-yellow">$15.99</span>                                    </span>
                      <a href="./product.html" class="minimal-price-link">
                        <span class="label">As low as:</span>
                        <span class="price price-yellow" id="product-minimal-price-83-widget-new-list">
                          $13.99            </span>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="widget widget-static-block menu">
        <div class="menu-title sub-title-header">Thông tin tuyển dụng</div>
        <div class="menu-content">
          <img src="<?= MEDIA ?>catalog/product/img_product_0016.jpg" alt="Apple MacBook Pro MA464LL/A 15.4&quot; Notebook PC" style="width: 100%;">
        </div>
      </div>
    </div>
    <div class="grid_18 em-main-wrapper">
      <div class="tabs-widget ">
        <div class="tabs_wrapper" id="emtabs_9eb7b1ac299035218a7c9843074e5146">
          <div class="tab_content">
            <div id="tab_emtabs_9eb7b1ac299035218a7c9843074e5146_1" class="tab-item content_tab_emtabs_9eb7b1ac299035218a7c9843074e5146_1">
              <div class="page-title title-header"><h1>Sửa chữa</h1></div>
              <div class="category-products">
                <div class="widget em-widget-products-grid custom" id="ajaxproducts-99">
                  <div class="widget-products">
                    <ul class="ajax-product products-grid last even">
                      <li class="box  item first" style=" width:205px; ">
                        <!--show label product - label extension is required-->
                        <span class="productlabels_icons">
                          <span class="label new">
                            <span>
                              New        </span>
                          </span>
                          <span class="label bestseller">
                            <span>
                              Best        </span>
                          </span>
                        </span>
                        <a href="./product.html" title=" Argus QC-2185 Quick Click 5MP Digital Camera" class="product-image">
                          <img src="<?= MEDIA ?>catalog/product/img_product_005.jpg" alt=" Argus QC-2185 Quick Click 5MP Digital Camera" style="width: 100%;"/></a>

                        <div class="product-shop">
                          <div class="f-fix">
                            <!--product name-->
                            <h3 class="product-name"><a href="./product.html" title=" Argus QC-2185 Quick Click 5MP Digital Camera"> Argus QC-2185 Quick Click 5MP Digital Camera</a></h3>
                            <!--product description-->
                            <div class="price_review">
                              <!--product price-->
                              <div class="price-box">
                                <span class="regular-price" id="product-price-45-widget-new-list">
                                  <span class="price price-yellow">$37.49</span>                                    </span>
                              </div>
                              <!--product reviews-->
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:67%"></div>
                                </div>
                                <span class="amount"><a href="#" onclick="setLocation('./product.html')">1 Review(s)</a></span>
                              </div>
                            </div>
                            <div class="actions js-addcart hover-slide" name="product_0" style="display: none;">
                              <!--product add to cart-->
                              <div class="actions-cart">
                                <button type="button" title="Add to Cart" class="button btn-cart btn-cart-yellow"><span><span>Add to Cart</span></span></button>
                              </div>
                              <!--product add to compare-wishlist-->
                              <ul class="add-to-links">
                                <li><a href="./login.html" class="link-wishlist" title="Add to Wishlist"><span class="text">Add to Wishlist</span></a></li>
                                <li><span class="separator">|</span><a href="#" class="link-compare" title="Add to Compare"><span class="text">Add to Compare</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="box  item" style=" width:205px; ">
                        <!--show label product - label extension is required-->
                        <a href="./product.html" title="Apevia Black X-Cruiser Case ATX Mid-Tower Case (Default)" class="product-image">
                          <img src="<?= MEDIA ?>catalog/product/img_product_0015.jpg" alt="Apevia Black X-Cruiser Case ATX Mid-Tower Case (Default)" style="width: 100%;"/></a>

                        <div class="product-shop">
                          <div class="f-fix">
                            <!--product name-->
                            <h3 class="product-name"><a href="./product.html" title="Apevia Black X-Cruiser Case ATX Mid-Tower Case (Default)">Apevia Black X-Cruiser Case ATX Mid-Tower Case (Default)</a></h3>
                            <!--product description-->
                            <div class="price_review">
                              <!--product price-->
                              <div class="price-box">
                                <span class="regular-price" id="product-price-138-widget-new-list">
                                  <span class="price price-yellow">$150.00</span>                                    </span>
                              </div>
                              <!--product reviews-->
                            </div>
                            <div class="actions js-addcart hover-slide" name="product_11" style="display: none;">
                              <!--product add to cart-->
                              <div class="actions-cart">
                                <button type="button" title="Add to Cart" class="button btn-cart btn-cart-yellow"><span><span>Add to Cart</span></span></button>
                              </div>
                              <!--product add to compare-wishlist-->
                              <ul class="add-to-links">
                                <li><a href="./login.html" class="link-wishlist" title="Add to Wishlist"><span class="text">Add to Wishlist</span></a></li>
                                <li><span class="separator">|</span><a href="#" class="link-compare" title="Add to Compare"><span class="text">Add to Compare</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="box  item" style=" width:205px; ">
                        <!--show label product - label extension is required-->
                        <span class="productlabels_icons">
                          <span class="label new">
                            <span>
                              New        </span>
                          </span>
                        </span>
                        <a href="./product.html" title="Apple MacBook Pro MA464LL/A 15.4&quot; Notebook PC" class="product-image">
                          <img src="<?= MEDIA ?>catalog/product/img_product_0016.jpg" alt="Apple MacBook Pro MA464LL/A 15.4&quot; Notebook PC" style="width: 100%;"/></a>

                        <div class="product-shop">
                          <div class="f-fix">
                            <!--product name-->
                            <h3 class="product-name"><a href="./product.html" title="Apple MacBook Pro MA464LL/A 15.4&quot; Notebook PC">Apple MacBook Pro MA464LL/A 15.4" Notebook PC</a></h3>
                            <!--product description-->
                            <div class="price_review">
                              <!--product price-->
                              <div class="price-box">
                                <span class="regular-price" id="product-price-25-widget-new-list">
                                  <span class="price price-yellow">$2,299.99</span>                                    </span>
                              </div>
                              <!--product reviews-->
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:87%"></div>
                                </div>
                                <span class="amount"><a href="#" onclick="setLocation('./product.html')">3 Review(s)</a></span>
                              </div>
                            </div>
                            <div class="actions js-addcart hover-slide" name="product_12" style="display: none;">
                              <!--product add to cart-->
                              <div class="actions-cart">
                                <button type="button" title="Add to Cart" class="button btn-cart btn-cart-yellow"><span><span>Add to Cart</span></span></button>
                              </div>
                              <!--product add to compare-wishlist-->
                              <ul class="add-to-links">
                                <li><a href="./login.html" class="link-wishlist" title="Add to Wishlist"><span class="text">Add to Wishlist</span></a></li>
                                <li><span class="separator">|</span><a href="#" class="link-compare" title="Add to Compare"><span class="text">Add to Compare</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="box  item" style=" width:205px; ">
                        <!--show label product - label extension is required-->
                        <a href="./product.html" title="ASICS® Men's GEL-Kayano® XII" class="product-image">
                          <img src="<?= MEDIA ?>catalog/product/img_product_0017.jpg" alt="ASICS® Men's GEL-Kayano® XII" style="width: 100%;"/></a>

                        <div class="product-shop">
                          <div class="f-fix">
                            <!--product name-->
                            <h3 class="product-name"><a href="./product.html" title="ASICS® Men's GEL-Kayano® XII">ASICS® Men's GEL-Kayano® XII</a></h3>
                            <!--product description-->
                            <div class="price_review">
                              <!--product price-->
                              <div class="price-box">
                                <span class="regular-price" id="product-price-93-widget-new-list">
                                  <span class="price price-yellow">$134.99</span>                                    </span>
                              </div>
                              <!--product reviews-->
                            </div>
                            <div class="actions js-addcart hover-slide" name="product_13" style="display: none;">
                              <!--product add to cart-->
                              <div class="actions-cart">
                                <button type="button" title="Add to Cart" class="button btn-cart btn-cart-yellow" onclick="setLocation('./product.html')"><span><span>Add to Cart</span></span></button>
                              </div>
                              <!--product add to compare-wishlist-->
                              <ul class="add-to-links">
                                <li><a href="./login.html" class="link-wishlist" title="Add to Wishlist"><span class="text">Add to Wishlist</span></a></li>
                                <li><span class="separator">|</span><a href="#" class="link-compare" title="Add to Compare"><span class="text">Add to Compare</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="box  item" style=" width:205px; ">
                        <!--show label product - label extension is required-->
                        <a href="./product.html" title="AT&amp;T 8525 PDA" class="product-image">
                          <img src="<?= MEDIA ?>catalog/product/img_product_0018.jpg" alt="AT&amp;T 8525 PDA" style="width: 100%;"/></a>

                        <div class="product-shop">
                          <div class="f-fix">
                            <!--product name-->
                            <h3 class="product-name"><a href="./product.html" title="AT&amp;T 8525 PDA">AT&amp;T 8525 PDA</a></h3>
                            <!--product description-->
                            <div class="price_review">
                              <!--product price-->
                              <div class="price-box">
                                <span class="regular-price" id="product-price-19-widget-new-list">
                                  <span class="price price-yellow">$199.99</span>                                    </span>
                              </div>
                              <!--product reviews-->
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:71%"></div>
                                </div>
                                <span class="amount"><a href="#" onclick="setLocation('./product.html')">3 Review(s)</a></span>
                              </div>
                            </div>
                            <div class="actions js-addcart hover-slide" name="product_14" style="display: none;">
                              <!--product add to cart-->
                              <div class="actions-cart">
                                <button type="button" title="Add to Cart" class="button btn-cart btn-cart-yellow"><span><span>Add to Cart</span></span></button>
                              </div>
                              <!--product add to compare-wishlist-->
                              <ul class="add-to-links">
                                <li><a href="./login.html" class="link-wishlist" title="Add to Wishlist"><span class="text">Add to Wishlist</span></a></li>
                                <li><span class="separator">|</span><a href="#" class="link-compare" title="Add to Compare"><span class="text">Add to Compare</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="box  item last" style=" width:205px; ">
                        <!--show label product - label extension is required-->
                        <a href="./product.html" title="Barcelona Bamboo Platform Bed" class="product-image">
                          <img src="<?= MEDIA ?>catalog/product/img_product_0019.jpg" alt="Barcelona Bamboo Platform Bed" style="width: 100%;"/></a>

                        <div class="product-shop">
                          <div class="f-fix">
                            <!--product name-->
                            <h3 class="product-name"><a href="./product.html" title="Barcelona Bamboo Platform Bed">Barcelona Bamboo Platform Bed</a></h3>
                            <!--product description-->
                            <div class="price_review">
                              <!--product price-->
                              <div class="price-box">
                                <span class="regular-price" id="product-price-42-widget-new-list">
                                  <span class="price price-yellow">$2,299.00</span>                                    </span>
                              </div>
                              <!--product reviews-->
                            </div>
                            <div class="actions js-addcart hover-slide" name="product_15" style="display: none;">
                              <!--product add to cart-->
                              <div class="actions-cart">
                                <button type="button" title="Add to Cart" class="button btn-cart btn-cart-yellow"><span><span>Add to Cart</span></span></button>
                              </div>
                              <!--product add to compare-wishlist-->
                              <ul class="add-to-links">
                                <li><a href="./login.html" class="link-wishlist" title="Add to Wishlist"><span class="text">Add to Wishlist</span></a></li>
                                <li><span class="separator">|</span><a href="#" class="link-compare" title="Add to Compare"><span class="text">Add to Compare</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <script type="text/javascript">
                  jQuery('#ajaxproducts-99 .widget-products ul.products-grid').infinitescroll({
                    navSelector: "#ajaxproducts-99-next:last",
                    nextSelector: "#ajaxproducts-99-next:last",
                    itemSelector: "#ajaxproducts-99 .widget-products ul.products-grid li.item",
                    dataType: 'html',
                    loading: {
                      img: "<?= SKIN ?>galabigshop/images/ajax-loader.gif",
                    },
                    maxPage: 4,
                    state: {
                      isPaused: true
                    },
                    path: function (index) {
                      return './ajaxproduct.html';
                    }
                  }, function (newElements, data, url) {
                    jQuery("#ajaxproducts-99-next:last").show();
                    setTimeout(function () {
                      afterLoadAjax('#ajaxproducts-99');
                    }, 500);
                  });
                  jQuery('#ajaxproducts-99-next').click(function () {
                    jQuery('#ajaxproducts-99 .widget-products ul.products-grid').infinitescroll('retrieve');
                    return false;
                  });

                </script>
              </div>
              <script type="text/javascript">
                decorateGeneric($$('ul.products-grid'), ['last', 'first', 'odd', 'even']);
              </script>
            </div>
            <div style="display: block !important" id="tab_emtabs_9eb7b1ac299035218a7c9843074e5146_2" class="tab-item content_tab_emtabs_9eb7b1ac299035218a7c9843074e5146_2">
              <div class="page-title title-header"><h1>Phụ kiện</h1></div>
              <div class="category-products">
                <div class="widget em-widget-products-grid custom" id="ajaxproducts-14">
                  <div class="widget-products">
                    <ul class="ajax-product products-grid last even">
                      <li class="box  item first" style=" width:205px; ">
                        <!--show label product - label extension is required-->
                        <span class="productlabels_icons">
                          <span class="label new">
                            <span>
                              New        </span>
                          </span>
                          <span class="label bestseller">
                            <span>
                              Best        </span>
                          </span>
                        </span>
                        <a href="./product.html" title=" Argus QC-2185 Quick Click 5MP Digital Camera" class="product-image">
                          <img src="<?= MEDIA ?>catalog/product/img_product_005.jpg" alt=" Argus QC-2185 Quick Click 5MP Digital Camera" style="width: 100%;"/></a>

                        <div class="product-shop">
                          <div class="f-fix">
                            <!--product name-->
                            <h3 class="product-name"><a href="./product.html" title=" Argus QC-2185 Quick Click 5MP Digital Camera"> Argus QC-2185 Quick Click 5MP Digital Camera</a></h3>
                            <!--product description-->
                            <div class="price_review">
                              <!--product price-->
                              <div class="price-box">
                                <span class="regular-price" id="product-price-45-widget-new-list">
                                  <span class="price price-yellow">$37.49</span>                                    </span>
                              </div>
                              <!--product reviews-->
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:67%"></div>
                                </div>
                                <span class="amount"><a href="#" onclick="setLocation('./product.html')">1 Review(s)</a></span>
                              </div>
                            </div>
                            <div class="actions js-addcart hover-slide" name="product_0" style="display: none;">
                              <!--product add to cart-->
                              <div class="actions-cart">
                                <button type="button" title="Add to Cart" class="button btn-cart btn-cart-yellow"><span><span>Add to Cart</span></span></button>
                              </div>
                              <!--product add to compare-wishlist-->
                              <ul class="add-to-links">
                                <li><a href="./login.html" class="link-wishlist" title="Add to Wishlist"><span class="text">Add to Wishlist</span></a></li>
                                <li><span class="separator">|</span><a href="#" class="link-compare" title="Add to Compare"><span class="text">Add to Compare</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="box  item" style=" width:205px; ">
                        <!--show label product - label extension is required-->
                        <a href="./product.html" title="Apevia Black X-Cruiser Case ATX Mid-Tower Case (Default)" class="product-image">
                          <img src="<?= MEDIA ?>catalog/product/img_product_0015.jpg" alt="Apevia Black X-Cruiser Case ATX Mid-Tower Case (Default)" style="width: 100%;"/></a>

                        <div class="product-shop">
                          <div class="f-fix">
                            <!--product name-->
                            <h3 class="product-name"><a href="./product.html" title="Apevia Black X-Cruiser Case ATX Mid-Tower Case (Default)">Apevia Black X-Cruiser Case ATX Mid-Tower Case (Default)</a></h3>
                            <!--product description-->
                            <div class="price_review">
                              <!--product price-->
                              <div class="price-box">
                                <span class="regular-price" id="product-price-138-widget-new-list">
                                  <span class="price price-yellow">$150.00</span>                                    </span>
                              </div>
                              <!--product reviews-->
                            </div>
                            <div class="actions js-addcart hover-slide" name="product_11" style="display: none;">
                              <!--product add to cart-->
                              <div class="actions-cart">
                                <button type="button" title="Add to Cart" class="button btn-cart btn-cart-yellow"><span><span>Add to Cart</span></span></button>
                              </div>
                              <!--product add to compare-wishlist-->
                              <ul class="add-to-links">
                                <li><a href="./login.html" class="link-wishlist" title="Add to Wishlist"><span class="text">Add to Wishlist</span></a></li>
                                <li><span class="separator">|</span><a href="#" class="link-compare" title="Add to Compare"><span class="text">Add to Compare</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="box  item" style=" width:205px; ">
                        <!--show label product - label extension is required-->
                        <span class="productlabels_icons">
                          <span class="label new">
                            <span>
                              New        </span>
                          </span>
                        </span>
                        <a href="./product.html" title="Apple MacBook Pro MA464LL/A 15.4&quot; Notebook PC" class="product-image">
                          <img src="<?= MEDIA ?>catalog/product/img_product_0016.jpg" alt="Apple MacBook Pro MA464LL/A 15.4&quot; Notebook PC" style="width: 100%;"/></a>

                        <div class="product-shop">
                          <div class="f-fix">
                            <!--product name-->
                            <h3 class="product-name"><a href="./product.html" title="Apple MacBook Pro MA464LL/A 15.4&quot; Notebook PC">Apple MacBook Pro MA464LL/A 15.4" Notebook PC</a></h3>
                            <!--product description-->
                            <div class="price_review">
                              <!--product price-->
                              <div class="price-box">
                                <span class="regular-price" id="product-price-25-widget-new-list">
                                  <span class="price price-yellow">$2,299.99</span>                                    </span>
                              </div>
                              <!--product reviews-->
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:87%"></div>
                                </div>
                                <span class="amount"><a href="#" onclick="setLocation('./product.html')">3 Review(s)</a></span>
                              </div>
                            </div>
                            <div class="actions js-addcart hover-slide" name="product_12" style="display: none;">
                              <!--product add to cart-->
                              <div class="actions-cart">
                                <button type="button" title="Add to Cart" class="button btn-cart btn-cart-yellow"><span><span>Add to Cart</span></span></button>
                              </div>
                              <!--product add to compare-wishlist-->
                              <ul class="add-to-links">
                                <li><a href="./login.html" class="link-wishlist" title="Add to Wishlist"><span class="text">Add to Wishlist</span></a></li>
                                <li><span class="separator">|</span><a href="#" class="link-compare" title="Add to Compare"><span class="text">Add to Compare</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="box  item" style=" width:205px; ">
                        <!--show label product - label extension is required-->
                        <a href="./product.html" title="ASICS® Men's GEL-Kayano® XII" class="product-image">
                          <img src="<?= MEDIA ?>catalog/product/img_product_0017.jpg" alt="ASICS® Men's GEL-Kayano® XII" style="width: 100%;"/></a>

                        <div class="product-shop">
                          <div class="f-fix">
                            <!--product name-->
                            <h3 class="product-name"><a href="./product.html" title="ASICS® Men's GEL-Kayano® XII">ASICS® Men's GEL-Kayano® XII</a></h3>
                            <!--product description-->
                            <div class="price_review">
                              <!--product price-->
                              <div class="price-box">
                                <span class="regular-price" id="product-price-93-widget-new-list">
                                  <span class="price price-yellow">$134.99</span>                                    </span>
                              </div>
                              <!--product reviews-->
                            </div>
                            <div class="actions js-addcart hover-slide" name="product_13" style="display: none;">
                              <!--product add to cart-->
                              <div class="actions-cart">
                                <button type="button" title="Add to Cart" class="button btn-cart btn-cart-yellow" onclick="setLocation('./product.html')"><span><span>Add to Cart</span></span></button>
                              </div>
                              <!--product add to compare-wishlist-->
                              <ul class="add-to-links">
                                <li><a href="./login.html" class="link-wishlist" title="Add to Wishlist"><span class="text">Add to Wishlist</span></a></li>
                                <li><span class="separator">|</span><a href="#" class="link-compare" title="Add to Compare"><span class="text">Add to Compare</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="box  item" style=" width:205px; ">
                        <!--show label product - label extension is required-->
                        <a href="./product.html" title="AT&amp;T 8525 PDA" class="product-image">
                          <img src="<?= MEDIA ?>catalog/product/img_product_0018.jpg" alt="AT&amp;T 8525 PDA" style="width: 100%;"/></a>

                        <div class="product-shop">
                          <div class="f-fix">
                            <!--product name-->
                            <h3 class="product-name"><a href="./product.html" title="AT&amp;T 8525 PDA">AT&amp;T 8525 PDA</a></h3>
                            <!--product description-->
                            <div class="price_review">
                              <!--product price-->
                              <div class="price-box">
                                <span class="regular-price" id="product-price-19-widget-new-list">
                                  <span class="price price-yellow">$199.99</span>                                    </span>
                              </div>
                              <!--product reviews-->
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:71%"></div>
                                </div>
                                <span class="amount"><a href="#" onclick="setLocation('./product.html')">3 Review(s)</a></span>
                              </div>
                            </div>
                            <div class="actions js-addcart hover-slide" name="product_14" style="display: none;">
                              <!--product add to cart-->
                              <div class="actions-cart">
                                <button type="button" title="Add to Cart" class="button btn-cart btn-cart-yellow"><span><span>Add to Cart</span></span></button>
                              </div>
                              <!--product add to compare-wishlist-->
                              <ul class="add-to-links">
                                <li><a href="./login.html" class="link-wishlist" title="Add to Wishlist"><span class="text">Add to Wishlist</span></a></li>
                                <li><span class="separator">|</span><a href="#" class="link-compare" title="Add to Compare"><span class="text">Add to Compare</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="box  item last" style=" width:205px; ">
                        <!--show label product - label extension is required-->
                        <a href="./product.html" title="Barcelona Bamboo Platform Bed" class="product-image">
                          <img src="<?= MEDIA ?>catalog/product/img_product_0019.jpg" alt="Barcelona Bamboo Platform Bed" style="width: 100%;"/></a>

                        <div class="product-shop">
                          <div class="f-fix">
                            <!--product name-->
                            <h3 class="product-name"><a href="./product.html" title="Barcelona Bamboo Platform Bed">Barcelona Bamboo Platform Bed</a></h3>
                            <!--product description-->
                            <div class="price_review">
                              <!--product price-->
                              <div class="price-box">
                                <span class="regular-price" id="product-price-42-widget-new-list">
                                  <span class="price price-yellow">$2,299.00</span>                                    </span>
                              </div>
                              <!--product reviews-->
                            </div>
                            <div class="actions js-addcart hover-slide" name="product_15" style="display: none;">
                              <!--product add to cart-->
                              <div class="actions-cart">
                                <button type="button" title="Add to Cart" class="button btn-cart btn-cart-yellow"><span><span>Add to Cart</span></span></button>
                              </div>
                              <!--product add to compare-wishlist-->
                              <ul class="add-to-links">
                                <li><a href="./login.html" class="link-wishlist" title="Add to Wishlist"><span class="text">Add to Wishlist</span></a></li>
                                <li><span class="separator">|</span><a href="#" class="link-compare" title="Add to Compare"><span class="text">Add to Compare</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <script type="text/javascript">
                  jQuery('#ajaxproducts-14 .widget-products ul.products-grid').infinitescroll({
                    navSelector: "#ajaxproducts-14-next:last",
                    nextSelector: "#ajaxproducts-14-next:last",
                    itemSelector: "#ajaxproducts-14 .widget-products ul.products-grid li.item",
                    dataType: 'html',
                    loading: {
                      img: "<?= SKIN ?>galabigshop/images/ajax-loader.gif",
                    },
                    maxPage: 3,
                    state: {
                      isPaused: true
                    },
                    path: function (index) {
                      return './ajaxproduct.html';
                    }
                  }, function (newElements, data, url) {
                    jQuery("#ajaxproducts-14-next:last").show();
                    setTimeout(function () {
                      afterLoadAjax('#ajaxproducts-14');
                    }, 500);
                  });
                  jQuery('#ajaxproducts-14-next').click(function () {
                    jQuery('#ajaxproducts-14 .widget-products ul.products-grid').infinitescroll('retrieve');
                    return false;
                  });

                </script>
              </div>
              <script type="text/javascript">
                decorateGeneric($$('ul.products-grid'), ['last', 'first', 'odd', 'even']);
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php
  $theme_options = get_option('page_info_setting');
?>
<div class="wrapper_map">
  <div class="container_24 ">
    <div class="grid_24">
        <?= $theme_options['map'] ?>
    </div>
    <div class="clear"></div>
  </div>
</div>

<?php
get_footer();
