<?php
/*
  Title:
  Setting: page_info_setting
 */


piklist('field', array(
    'type' => 'file'
    ,'field' => 'home_slider'

    ,'label' => __('Home Slider','piklist')
    ,'description' => __('This is the uploader seen in the admin by default.','piklist')
    ,'options' => array(
      'modal_title' => __('Add File(s)','piklist')
      ,'button' => __('Add','piklist')
    )
  ));