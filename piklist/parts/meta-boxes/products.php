<?php
/*
  Title: Products Details
  Post Type: sua_chua,phu_kien
  Capability: manage_options
 */

piklist('field',
    array(
    'type' => 'text'
    , 'field' => 'ma_san_pham'
    , 'label' => 'Code Product'
));

piklist('field',
    array(
    'type' => 'text'
    , 'field' => 'trong_luong'
    , 'label' => 'Weight'
));

piklist('field',
    array(
    'type' => 'text'
    , 'field' => 'bao_hanh'
    , 'label' => 'Watarry'
));

piklist('field',
    array(
    'type' => 'text'
    , 'field' => 'tinh_trang'
    , 'label' => 'Status'
));

piklist('field',
    array(
    'type' => 'text'
    , 'field' => 'gia'
    , 'label' => 'Price'
));
//
//piklist('field',
//    array(
//    'type' => 'radio'
//    , 'field' => 'ban_chay_nhat'
//    , 'value' => 'no' // Sets default to Option 2
//    , 'label' => 'Bestseller'
//    , 'description' => 'This is a description of the field.'
//    , 'attributes' => array(
//        'class' => 'text'
//    )
//    , 'choices' => array(
//        'no' => 'No'
//        , 'yes' => 'Yes'
//    )
//));


piklist('field',
    array(
    'type' => 'checkbox'
    , 'field' => 'tinh_trang_san_pham'
    , 'label' => 'Product status'
    , 'description' => 'This is a description of the field.'
    , 'attributes' => array(
        'class' => 'text'
    )
    , 'choices' => array(
        'bestseller' => 'Bán chạy nhất'
        , 'hot' => 'Hàng hot'
        , 'new' => 'Hàng mới'
        , 'is_home' => 'Hiển thị ở trang chủ'
    )
));


piklist('field',
    array(
    'type' => 'editor'
    , 'field' => 'thong_so_ky_thuat'
    , 'label' => __('Specifications')
    , 'description' => __('This is a description of the field.')
    , 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
));
