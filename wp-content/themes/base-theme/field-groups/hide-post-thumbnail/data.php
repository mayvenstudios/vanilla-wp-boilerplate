<?php 
$group = array (
  'id' => '5546d2f03f16e',
  'title' => 'Hide Post Thumbnail',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_5546d203337c2',
      'label' => 'Hide Post Thumbnail',
      'name' => 'hide_post_thumbnail',
      '_name' => 'hide_post_thumbnail',
      'type' => 'true_false',
      'order_no' => 0,
      'instructions' => '',
      'required' => 0,
      'id' => 'acf-field-hide_post_thumbnail',
      'class' => 'true_false',
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
      'message' => 'Hide the post thumbnail?',
      'default_value' => 0,
      'field_group' => 9,
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
    'position' => 'side',
    'layout' => 'default',
    'hide_on_screen' => 
    array (
    ),
  ),
  'menu_order' => 0,
);