<?php 
$group = array (
  'id' => '5546d2f039957',
  'title' => 'Custom JavaScript and CSS',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_5546d108a25a6',
      'label' => 'Additional CSS or JavaScript in Header',
      'name' => 'header_css_js_custom',
      '_name' => 'header_css_js_custom',
      'type' => 'textarea',
      'order_no' => 0,
      'instructions' => 'You can paste additioanl &lt;script&gt; tags here.  You can also input &lt;style&gt; tags.  This will be injected into the &lt;head&gt;.',
      'required' => 0,
      'id' => 'acf-field-header_css_js_custom',
      'class' => 'textarea',
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
      'maxlength' => '',
      'rows' => '',
      'formatting' => 'html',
      'field_group' => 7,
    ),
    1 => 
    array (
      'key' => 'field_5546d149fe1c8',
      'label' => 'Additional JavaScript in Footer',
      'name' => 'custom_js_footer',
      '_name' => 'custom_js_footer',
      'type' => 'textarea',
      'order_no' => 1,
      'instructions' => 'You can place additional &lt;script&gt; tags here that will be injected into the footer of the page, directly before the body tag.',
      'required' => 0,
      'id' => 'acf-field-custom_js_footer',
      'class' => 'textarea',
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
      'maxlength' => '',
      'rows' => '',
      'formatting' => 'html',
      'field_group' => 7,
    ),
  ),
  'location' => 
  array (
    0 => 
    array (
      0 => 
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'acf-options',
        'order_no' => 0,
        'group_no' => 0,
      ),
    ),
  ),
  'options' => 
  array (
    'position' => 'normal',
    'layout' => 'default',
    'hide_on_screen' => 
    array (
    ),
  ),
  'menu_order' => 0,
);