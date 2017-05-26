<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
       <?php get_template_part('templates/background-header');?>
        <?php get_template_part('templates/entry-meta'); ?>
        <?php get_template_part('templates/mal-connect');?>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
