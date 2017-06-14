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


// Add action to call ajaxSearch on admin-ajax when logged in and not logged in

add_action( 'wp_ajax_ajax_search', 'ajaxSearch' );
add_action( 'wp_ajax_nopriv_ajax_search', 'ajaxSearch' );

// Function to get the searchform from ajax call
function ajaxSearch () {
  check_ajax_referer( 'get-nonce', 'nonce');
  if(isset($_GET['s']) && !empty($_GET['s'])){
    $posts = new WP_Query( array('posts_per_page' => 12, "s" => $_GET['s'], ));
    $GLOBALS['wp_query'] = $posts;
    get_template_part('index');
  }
  wp_die();
}

// Add action to call getAdminBar on admin-ajax when logged in and not logged in
add_action( 'wp_ajax_get_admin_bar', 'getAdminBar' );
add_action( 'wp_ajax_nopriv_get_admin_bar', 'getAdminBar' );

// Function to update the Edit Posts button on the admin bar
function getAdminBar() {
  if(isset($_GET['post_slug']) && !empty($_GET['post_slug'])){
    $slug = $_GET['post_slug'];
    $postID = get_page_by_path($slug, OBJECT, 'post')->ID;
    $pageID = get_page_by_path($slug, OBJECT, 'page')->ID;
    echo '<a class="ab-item" href="';
    echo home_url();
    echo '/wp-admin/post.php?post=';
    echo $postID ? $postID : $pageID;
    echo '&action=edit';
    echo '">Edit Post</a>';
  }
  wp_die();
}

// The Search function on the website only searches through posts
add_filter('pre_get_posts','mySearchFilter');

function mySearchFilter($query) {
  if ($query->is_search) {
    $query->set('post_type', 'post');
  }
  return $query;
}