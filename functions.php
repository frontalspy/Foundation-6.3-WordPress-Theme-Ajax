<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */

if (!defined('ABSPATH') ) {
    exit; // Exit if accessed directly
}

$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
    }

    include_once $filepath;
}

// Add async to jquery and defer all other scripts to prevent
// render blocking.
function nonRenderBlockScript($tag, $handle) {
  // Scripts to load normally
  $scripts = array('jquery');
  if (in_array($handle, $scripts))
    return $tag;
  return str_replace( ' src', ' defer src', $tag );
}

add_filter('script_loader_tag', 'nonRenderBlockScript', 10, 2);

/* 

Recommeded if using Advanced Custom Fields

//add a options page in the admin panel
if (function_exists('acf_add_options_page') ) {
	acf_add_options_page((array(
      'page_title' => 'Website Options',
      'menu_title' => 'Website Options',
      'menu_slug' => 'website_options',
      'parent_slug' => '',
      'position' => 'false',
      'redirect' => 'false',    
    )));
} */


// Return this for ACF Images
function responsiveImage($image_id,$image_size,$max_width){
  $resp = "";
  // check the image ID is not blank
  if($image_id != '') {
    // set the default src image size
	$image_src = wp_get_attachment_image_url( $image_id, $image_size );
    
    // set the srcset with various image sizes
    $image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );
    // generate the markup for the responsive image
	$resp = 'data-original="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';
  }
  return $resp;
}
