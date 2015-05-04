<?php 
$group = array (
  'id' => '5546d2f03de28',
  'title' => 'H1 Title',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_5546d1da343f4',
      'label' => 'H1 Title',
      'name' => 'h1_title',
      '_name' => 'h1_title',
      'type' => 'text',
      'order_no' => 0,
      'instructions' => 'This is the h1 tag on the page.',
      'required' => 0,
      'id' => 'acf-field-h1_title',
      'class' => 'text',
      'conditional_logic' => 
      array (
        'status' => 0,
        'rules' => 
        array (
          0 => 
          array (
            'field' => 'null',
            'operator' => '==',
          ),
        ),
        'allorany' => 'all',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'field_group' => 8,
    ),
  ),
  'location' => 
  array (
    0 => 
    array (
      0 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'post',
        'order_no' => 0,
        'group_no' => 0,
      ),
    ),
    1 => 
    array (
      0 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'page',
        'order_no' => 0,
        'group_no' => 1,
      ),
    ),
  ),
  'options' => 
  array (
    'position' => 'acf_after_title',
    'layout' => 'default',
    'hide_on_screen' => 
    array (
    ),
  ),
  'menu_order' => 0,
);