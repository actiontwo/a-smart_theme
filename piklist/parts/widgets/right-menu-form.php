<?php
piklist('field',
    array(
    'type' => 'text'
    , 'field' => 'title_side_menu'
    , 'label' => 'Name'
    , 'description' => 'Field Description'
    , 'value' => 'Sửa chữa'
));

piklist('field',
    array(
    'type' => 'radio'
    , 'field' => 'type_side_menu'
    , 'label' => 'Type'
    , 'description' => 'Field Description'
    , 'choices' => array(
        'productMenu' => 'Sửa chữa'
        , 'accessoryMenu' => 'Phụ kiện'

    )
));
