<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
    <?php get_search_form(); ?>
<?php endif; ?>

<div class="row small-12">
  <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php endwhile; ?>
</div>

<div class="page-navigation" role="navigation" aria-label="Pagination">
    <?php pagination(); ?>
</div>


<div class="row no-margin">
  <div class="small-12 medium-3 red-background"></div>
  <div class="small-12 medium-3 blue-background"></div>
  <div class="small-12 medium-3 yellow-background"></div>
  <div class="small-12 medium-3 row"><div class="small-12 medium-6 green-background"></div>
  <div class="small-12 medium-6 red-background"></div></div>
</div>