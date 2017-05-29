<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} 
$article = get_field('post_type');?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
       <?php get_template_part('templates/background-header');?>
        <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer>
      <?php if($article == 'review'):?>
        <?php get_template_part('templates/review-scores');?>
      <?php endif;?>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
