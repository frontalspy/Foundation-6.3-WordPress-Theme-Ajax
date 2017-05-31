<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>

<article <?php post_class('column small-12 medium-6 large-4'); ?>>
  <div class="content">
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>" data-post-id="<?php echo get_the_ID();?>"><?php the_title(); ?></a></h2>
      <?php the_post_thumbnail();?>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
