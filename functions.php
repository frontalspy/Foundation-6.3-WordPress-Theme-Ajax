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

// Update the jQuery version for soil plugin
function jQueryVersion() {
  wp_scripts()->registered['jquery']->ver = '3.2.1';
}

add_action('init', 'jQueryVersion');


// Add async to jquery and defer all other scripts to prevent
// render blocking.
function nonRenderBlockScript($tag, $handle) {
  // Scripts to load normally
  $scripts = array('jquery', 'modernizr');
  if (in_array($handle, $scripts) || is_admin())
    return $tag;
  return str_replace( ' src', ' defer src', $tag );
}

add_filter('script_loader_tag', 'nonRenderBlockScript', 10, 2);

set_post_thumbnail_size( 380, 214, array( 'center', 'center') );

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
}
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


function pagination($pages = '', $range = 2) {  
  global $paged;
  $showitems = ($range * 2)+1;  
  $_SERVER['REQUEST_URI'] = 'page/' . $paged . '/';
  if(empty($paged)) $paged = 1;

  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages) {
      $pages = 1;
    }
  }   

  if(1 != $pages) {
    echo "<ul class='pagination'>";
    if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
    if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";

    for ($i=1; $i <= $pages; $i++) {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
          echo ($paged == $i)? "<span class='current'>".$i."</span>":"<li><a href='".get_pagenum_link($i)."' class='inactive' data-paged='". $i ."'>".$i."</a></li>";
      }
    }

    if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";  
    if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
    echo "</ul>\n";
  }
}

add_action( 'wp_ajax_get_post_details', 'customTest' );
add_action( 'wp_ajax_nopriv_get_post_details', 'customTest' );

function customTest () {
  if(isset($_POST['post_slug']) && !empty($_POST['post_slug'])){
    $slug = $_POST['post_slug'];
    $postID = get_page_by_path($slug, OBJECT, 'post')->ID;
    $pageID = get_page_by_path($slug, OBJECT, 'page')->ID;
    echo $slug;
    if($pageID) {
      $page = get_page_template_slug( $pageID );
      $posts = new WP_Query( array('posts_per_page' => 1, "name" => $slug, "post_type" => 'page'));
      $GLOBALS['wp_query'] = $posts;
      ($page) ? get_template_part(substr($page, 0, -4)) : get_template_part('page');
    } else if($slug == substr(get_home_url(null, '', 'relative'), 1) || is_numeric($slug)) {
      if(isset($_POST['paged']) && !empty($_POST['paged'])) {
        $posts = new WP_Query( array('posts_per_page' => 12, 'paged' => $_POST['paged']) );
        $GLOBALS['paged']= $_POST['paged'];
      } else {
        $posts = new WP_Query( array('posts_per_page' => 12) );
      }
      $GLOBALS['wp_query'] = $posts;
      get_template_part('index');
    } else if ($postID){
      $posts = new WP_Query( array('posts_per_page' => 1, "name" => $slug) );
      $GLOBALS['wp_query'] = $posts;
      get_template_part('single');
    }
    wp_reset_query();
    wp_reset_postdata();
  }
  wp_die();
}

add_action( 'wp_ajax_ajax_search', 'ajaxSearch' );
add_action( 'wp_ajax_nopriv_ajax_search', 'ajaxSearch' );

function ajaxSearch () {
  if(isset($_GET['s']) && !empty($_GET['s'])){
    $posts = new WP_Query( array('posts_per_page' => 12, "s" => $_GET['s'], ));
    $GLOBALS['wp_query'] = $posts;
    var_dump(get_post_type());
    get_template_part('index');
  }
  wp_die();
}