<?php

if (function_exists('acf_add_options_sub_page')) {
    acf_add_options_sub_page('Banner');
}

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_5846892ea7f02',
        'title' => 'Banner',
        'fields' => array(
            array(
                'key' => 'field_584689440d481',
                'label' => 'Show banner',
                'name' => 'show_banner',
                'type' => 'true_false',
                'instructions' => 'Show banner on this site',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 1,
            ),
            array(
              'key' => 'field_584689440d484',
              'label' => 'Title',
              'name' => 'banner_title',
              'type' => 'text',
              'column_width' => '',
              'default_value' => 'Tell us what you think of BLOG.GOV.UK',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '',
            ),
            array(
			'default_value' => '',
			'placeholder' => '',
			'key' => 'field_58ca7e9d5b50c',
			'label' => 'Link',
			'name' => 'banner_link',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
    			'wrapper' => array(
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
            ),
            array(
              'key' => 'field_584689440d482',
              'label' => 'Link text',
              'name' => 'banner_link_text',
              'type' => 'text',
              'column_width' => '',
              'default_value' => 'Your feedback will help us improve this website',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-banner',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));
}

if (function_exists("register_field_group")) {

  // Related posts

  register_field_group(array(
    'id' => 'acf_related-posts',
    'title' => 'Related posts',
    'fields' => array(
      array(
        'key' => 'field_53022510c191d',
        'label' => 'Related posts',
        'name' => 'related_posts',
        'type' => 'repeater',
        'sub_fields' => array(
          array(
            'key' => 'field_5302251ec191e',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_5302252ec191f',
            'label' => 'URL',
            'name' => 'url',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
        ),
        'row_min' => '',
        'row_limit' => '',
        'layout' => 'table',
        'button_label' => 'Add Row',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array(
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array(
      ),
    ),
    'menu_order' => 0,
  ));

  // Theme Options

  register_field_group(array(
    'id' => 'acf_theme-options',
    'title' => 'Theme Options',
    'fields' => array(
      array(
        'key' => 'field_53061c4e7dec9',
        'label' => 'Email Alerts link',
        'name' => 'gds_email_alerts',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_53061c717deca',
        'label' => 'Organisations',
        'name' => 'gds_organisations',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
      array(
        'key' => 'field_53061c9c7decc',
        'label' => 'Location',
        'name' => 'gds_location',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-theme-options',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array(
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array(
      ),
    ),
    'menu_order' => 0,
  ));

  // Featured video

  register_field_group(array(
    'id' => 'acf_featured-video',
    'title' => 'Featured video',
    'fields' => array(
      array(
        'key' => 'field_5328943e15f2c',
        'label' => 'Video URL',
        'name' => 'video_url',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array(
      'position' => 'side',
      'layout' => 'default',
      'priority' => 'low',
      'hide_on_screen' => array(
      ),
    ),
    'menu_order' => 0,
  ));

  // Fix priority for "Featured video"
  add_filter('acf/input/meta_box_priority', function ($priority, $acf) {
    if (isset($acf['options']['priority'])) {
        return $acf['options']['priority'];
    }

    return $priority;
  }, 10, 2);

    global $gds_image_licences;

    register_field_group(array(
    'id' => 'acf_image-licensing',
    'title' => 'Image licensing',
    'fields' => array(
      array(
        'key' => 'field_5463adf92808a',
        'label' => 'Licence',
        'name' => 'licence',
        'type' => 'select',
        'choices' => array_map(function ($licence) {return $licence['name'];}, $gds_image_licences),
        'default_value' => '',
        'allow_null' => 1,
        'multiple' => 0,
      ),
      array(
        'key' => 'field_5463b0f72808b',
        'label' => 'Copyright holder',
        'name' => 'copyright_holder',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5463b1152808c',
        'label' => 'Link to source',
        'name' => 'link_to_source',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'attachment',
          'operator' => '==',
          'value' => 'all',
        ),
      ),
    ),
    'options' => array(
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array(
      ),
    ),
    'menu_order' => 0,
  ));
}
