<?php

/**
 * Adds SEO fields to the Theme options page
 *
 * @package blockhaus
 */

function blockhaus_get_cpts() {
  $args = array(
    'public'   => true,
    '_builtin' => false
   );
  
  $output = 'names'; // 'names' or 'objects' (default: 'names')
  $operator = 'and'; // 'and' or 'or' (default: 'and')
    
  $post_types = get_post_types( $args, $output, $operator );

  return $post_types;
}

add_action('acf/init', 'blockhaus_get_cpts');



function blockhaus_acf_add_seo_field_groups() {

  if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
      'key' => 'group_62b17d61f1a29',
      'title' => 'Content Pages',
      'fields' => array(
        array(
          'key' => 'field_62b19e4993399',
          'label' => 'Default Page Settings',
          'name' => '',
          'type' => 'accordion',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'open' => 1,
          'multi_expand' => 1,
          'endpoint' => 0,
        ),
        array(
          'key' => 'field_62b17d9z6d6g8',
          'label' => 'Header',
          'name' => 'page_header',
          'type' => 'image',
          'instructions' => 'Set the default image that will be used for social media sharing of pages if a featured image is not set.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'array',
          'preview_size' => 'medium',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array(
          'key' => 'field_62b19ec8d2bb4',
          'label' => 'Posts / Blog Page Settings',
          'name' => '',
          'type' => 'accordion',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'open' => 1,
          'multi_expand' => 1,
          'endpoint' => 0,
        ),
        array(
          'key' => 'field_62b17d75c24f9',
          'label' => 'Header',
          'name' => 'post_header',
          'type' => 'image',
          'instructions' => 'Set the image that will display at the top of your main Blog page.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'array',
          'preview_size' => 'medium',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array(
          'key' => 'field_62b1a0ba1c8d3',
          'label' => 'Description',
          'name' => 'post_page_description',
          'type' => 'textarea',
          'instructions' => '<p>Add a short description for your Blog/Posts page. To use this in a theme template, use the following code:</p><code>$description = get_field("post_page_description", "options");</code>',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Add a short description for your Blog/Posts page',
          'maxlength' => '',
          'rows' => '',
          'new_lines' => '',
        ),
        array(
          'key' => 'field_62b1a61a126c9',
          'label' => 'Use transparent image layout',
          'name' => 'post_page_transparent_header',
          'type' => 'true_false',
          'instructions' => 'If you are using an image with a transparent background, you can turn this setting on to adapt the layout to show the header background colour behind the image.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'message' => '',
          'default_value' => 0,
          'ui' => 1,
          'ui_on_text' => '',
          'ui_off_text' => '',
        ),
        array(
          'key' => 'field_62c6ba072zx46',
          'label' => 'Background color',
          'name' => 'post_choose_background',
          'type' => 'radio',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => 'color-switcher',
            'id' => '',
          ),
          'choices' => array(
            'accent' => 'accent',
            'offset' => 'offset',
            'highlight' => 'highlight',
            'accent-secondary' => 'accent-secondary',
            'accent-tertiary' => 'accent-tertiary',
          ),
          'allow_null' => 1,
          'other_choice' => 0,
          'default_value' => '',
          'layout' => 'vertical',
          'return_format' => 'value',
          'save_other_choice' => 0,
        ),
        array(
          'key' => 'field_62b19e4443072',
          'label' => 'Publications Page Settings',
          'name' => '',
          'type' => 'accordion',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'open' => 1,
          'multi_expand' => 1,
          'endpoint' => 0,
        ),
        array(
          'key' => 'field_62b17d9a5d6a4',
          'label' => 'Header',
          'name' => 'resources_header',
          'type' => 'image',
          'instructions' => 'Set the image that will display at the top of your main Publications page.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'array',
          'preview_size' => 'medium',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array(
          'key' => 'field_62b1a13c12c4b',
          'label' => 'Description (copy)',
          'name' => 'resources_page_description',
          'type' => 'textarea',
          'instructions' => '<p>Add a short description for your Publications page. To use this in a theme template, use the following code:</p><code>$description = get_field("publication_page_description", "options");</code>',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Add a short description for your Publications page',
          'maxlength' => '',
          'rows' => '',
          'new_lines' => '',
        ),
        
        array(
          'key' => 'field_62b19f27e83e7',
          'label' => 'Books Page Settings',
          'name' => '',
          'type' => 'accordion',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'open' => 1,
          'multi_expand' => 1,
          'endpoint' => 0,
        ),
        array(
          'key' => 'field_62b17daf5d6a5',
          'label' => 'Header',
          'name' => 'books_header',
          'type' => 'image',
          'instructions' => 'Set the image that will display at the top of your main Books page.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => 'books-header',
          ),
          'return_format' => 'array',
          'preview_size' => 'medium',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array(
          'key' => 'field_62b1a112d50ae',
          'label' => 'Description',
          'name' => 'books_page_description',
          'type' => 'textarea',
          'instructions' => '<p>Add a short description for your Books page. To use this in a theme template, use the following code:</p><code>$description = get_field("books_page_description", "options");</code>',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Add a short description for your Books page',
          'maxlength' => '',
          'rows' => '',
          'new_lines' => '',
        ),
      array(
        'key' => 'field_62b19e4450901',
        'label' => 'Media Page Settings',
        'name' => '',
        'type' => 'accordion',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'open' => 1,
        'multi_expand' => 1,
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_62b17d9a60902',
        'label' => 'Header',
        'name' => 'articles_header',
        'type' => 'image',
        'instructions' => 'Set the image that will display at the top of your main Media page.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      array(
        'key' => 'field_62b1a13c70903',
        'label' => 'Description',
        'name' => 'articles_page_description',
        'type' => 'textarea',
        'instructions' => '<p>Add a short description for your Media page. To use this in a theme template, use the following code:</p><code>$description = get_field("articles_page_description", "options");</code>',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Add a short description for your Media page',
        'maxlength' => '',
        'rows' => '',
        'new_lines' => '',
      ),
   
      array(
        'key' => 'field_62b19e4490992',
        'label' => 'Search Page Settings',
        'name' => '',
        'type' => 'accordion',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'open' => 1,
        'multi_expand' => 1,
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_62b17d9a90993',
        'label' => 'Header',
        'name' => 'search_header',
        'type' => 'image',
        'instructions' => 'Set the image that will display at the top of your main Search page.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      array(
        'key' => 'field_62b1a46390994',
        'label' => 'Use transparent image layout',
        'name' => 'search_page_transparent_header',
        'type' => 'true_false',
        'instructions' => 'If you are using an image with a transparent background, you can turn this setting on to adapt the layout to show the header background colour behind the image.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 1,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_62c6ba033kk33',
        'label' => 'Background color',
        'name' => 'search_choose_background',
        'type' => 'radio',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => 'color-switcher',
          'id' => '',
        ),
        'choices' => array(
          'accent' => 'accent-default',
          'offset' => 'offset',
          'highlight' => 'highlight',
          'accent-secondary' => 'accent-secondary',
          'accent-tertiary' => 'accent-tertiary',
        ),
        'allow_null' => 1,
        'other_choice' => 0,
        'default_value' => '',
        'layout' => 'vertical',
        'return_format' => 'value',
        'save_other_choice' => 0,
      ),
    ),
      'location' => array(
        array(
          array(
            'param' => 'options_page',
            'operator' => '==',
            'value' => 'theme-options',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
      'show_in_rest' => 0,
    ));
    
    endif;		
    
// if( function_exists('acf_add_local_field_group') ):

//     // get registered public custom post types
//     // $args = array(
//     //   'public'   => true,
//     //   '_builtin' => false
//     //  );
    
//     // $output = 'names'; // 'names' or 'objects' (default: 'names')
//     // $operator = 'and'; // 'and' or 'or' (default: 'and')
      
//    // $post_types = get_post_types( $args, $output, $operator );

//    $post_types = blockhaus_get_cpts();

//   acf_add_local_field_group(array(
    
// 	'key' => 'group_62ab5d51368f9',
// 	'title' => 'SEO Settings',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_62ab5d5af11a8',
// 			'label' => 'Posts page description',
// 			'name' => 'post_page_description',
// 			'type' => 'textarea',
// 			'instructions' => '<p>Add a short description for your Blog/Posts page. To use this in a theme template, use the following code:</p><code>$description = get_field("post_page_description", "options");</code>',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => 'Add a short description for your Blog/Posts page',
// 			'maxlength' => 310,
// 			'rows' => '',
// 			'new_lines' => '',
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'options_page',
// 				'operator' => '==',
// 				'value' => 'theme-options',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// 	'show_in_rest' => 0,
//   ));

//   // $field_key_new = uniqid();
//   // acf_add_local_field(array(
//   //   'key' => 'field_' . $field_key_new,
//   //   'label' => 'Blog/posts page description',
//   //   'name' => 'post_page_description',
//   //   'type' => 'textarea',
//   //   'instructions' => '<p>Add a short description for your Blog/Posts page. To use this in a theme template, use the following code:</p><code>$description = get_field("post_page_description", "options");</code>',
//   //   'parent' => 'group_629de8ca1046c',
//   //   'maxlength' => 310,
//   // ));
//   $field_keys = ['field_62ab5d5af11c6', 'field_62ab5d5af11c7', 'field_62ab5d5af11c8', 'field_62ab5d5af11c9'];
//   $i = 0;
//   if ( $post_types ) { // If there are any custom public post types.
//     foreach ( $post_types  as $post_type ) { // loop through
//       $field_key = $field_keys[$i];
//       $instructions = '<p>Add a short description for your ' . ucwords($post_type) . ' page. To use this in a theme template, use the following code:</p><code>$description = get_field("' . $post_type . '_page_description", "options");</code>';
//       acf_add_local_field(array(
//         'key' => $field_key,
//         'label' => ucwords($post_type) . ' page description',
//         'name' => $post_type . '_page_description',
//         'type' => 'textarea',
//         'instructions' => $instructions,
//         'parent' => 'group_62ab5d51368f9',
//         'placeholder' => 'Add a short description for your ' . ucwords($post_type) . ' page',
//         'maxlength' => 310,
//       ));

//       $i++;
//     }
//   }

//   endif;		

}

  add_action('acf/init', 'blockhaus_acf_add_seo_field_groups');