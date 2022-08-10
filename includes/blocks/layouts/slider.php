<?php

/**
 * Front Page Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'statement';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
echo '<div class="blockquotes-slider">';
$title = get_field('blockquotes_title');
if($title):
    echo '<h2 class="text-huge text-center font-bold">' . $title . '</h2>';
    endif;
// Check rows exists.
if( have_rows('quotes') ):
    
    echo '<div class="block slider endorsements-alt wide">';

    
    // Loop through rows.
    while( have_rows('quotes') ) : the_row();
     // Load sub field value.
     $text = get_sub_field('quote_text');
     $author = get_sub_field('quote_author');
     // Do something...

      echo '<blockquote class="wp-block-quote">';

         echo '<p class="text-lg">' . $text . '</p>';

        if($author):
         echo '<cite>' . $author . '</cite>';
        endif;
    
      echo '</blockquote>';

    endwhile;
    echo '</div>';
// No value.
else :
    // Do something...
endif;
echo '</div>';