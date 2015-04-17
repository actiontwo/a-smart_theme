<?php
/*
  Title: Socail
  Setting: page_info_setting
  Tab: Social
  Tab Order : 10
 */

// This field used to set Extranet's Blog ID
piklist('field',
    array(
    'type' => 'text'
    , 'field' => 'google_link'
    , 'label' => 'Google  Link'
    , 'description' => 'This is a your google link.'
    , 'attributes' => array(
        'class' => 'text'
    ),
    'columns' => 6
));
piklist('field',
    array(
    'type' => 'text'
    , 'field' => 'facebook_link'
    , 'label' => 'Facebook  Link'
    , 'description' => 'This is a your facebook link.'
    , 'attributes' => array(
        'class' => 'text'
    ),
    'columns' => 6
));

piklist('field',
    array(
    'type' => 'text'
    , 'field' => 'twitter_link'
    , 'label' => 'Twitter Link'
    , 'description' => 'This is a your twitter link.'
    , 'attributes' => array(
        'class' => 'text'
    ),
    'columns' => 6
));
piklist('field',
    array(
    'type' => 'textarea'
    , 'field' => 'fanpage_facebook'
    , 'label' => 'Fanpage facebook'
    , 'description' => 'This is a your twitter link.'
    , 'attributes' => array(
        'class' => 'text'
    ),
    'columns' => 12
));
