<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>

<div class="row small-12">

  <?php get_template_part('templates/page', 'header'); ?>

  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning small-12">
      <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/content', 'search'); ?>
  <?php endwhile; ?>

  <?php the_posts_navigation(); ?>
  
</div>