<?php
/*
  Title: Page Details
  Setting: page_info_setting
  Tab: Page Details
  Tab Order : 20
 */
 piklist('field',
     array(
     'type' => 'text'
     , 'field' => 'address'
     , 'label' => 'Address'
     , 'description' => ''
     , 'attributes' => array(
         'class' => 'text'
     ),
     'columns' => 6
 ));

 piklist('field',
     array(
     'type' => 'text'
     , 'field' => 'landline'
     , 'label' => 'Landline'
     , 'description' => ''
     , 'attributes' => array(
         'class' => 'text'
     ),
     'columns' => 6
 ));

 piklist('field',
      array(
      'type' => 'text'
      , 'field' => 'cell_phone'
      , 'label' => 'Cel Phone'
      , 'description' => ''
      , 'attributes' => array(
          'class' => 'text'
      ),
      'columns' => 6
  ));

 piklist('field', array(
      'type' => 'textarea'
      ,'field' => 'map'
      ,'label' => 'Map'
      ,'description' => ''
      ,'attributes' => array(
        'rows' => 10
        ,'cols' => 50
        ,'class' => 'large-text'
      )
  ));

 piklist('field', array(
     'type' => 'file'
     ,'field' => 'logo'
     ,'scope' => 'post_meta'
     ,'label' => __('Logo','piklist')
     ,'description' => __('This is the uploader seen in the admin by default.','piklist')
     ,'options' => array(
       'modal_title' => __('Logo','piklist')
       ,'button' => __('Add Logo','piklist')
     )
 ));
 piklist('field', array(
   'type' => 'text'
   ,'field' => 'demo_text'
   ,'label' => 'Title'
   ,'description' => 'Field Description'
   ,'value' => 'Default text'
   ,'attributes' => array(
     'class' => 'text'
   )
 ));
