<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<?php if(!check_ajax_referer( 'get-nonce', 'nonce' , false)):?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container" role="document">
      <div class="content row" id="content">
        <main class="main column small-12 medium-8 large-9" data-equalizer data-equalize-by-row="true">
         <?php endif;?>
            <?php include Wrapper\template_path(); ?>
        <?php if(!check_ajax_referer( 'get-nonce', 'nonce' , false)):?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar small-12 medium-4 large-3 column">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    <div id="loader">
      <div class="progress transparent" role="progressbar" tabindex="0" aria-valuenow="0" aria-valuemin="0" aria-valuetext="0 percent" aria-valuemax="100">
          <div class="progress-meter primary-background" style="max-width:100%"></div>
      </div>
    </div>
  </body>
</html>
<?php endif;?>
