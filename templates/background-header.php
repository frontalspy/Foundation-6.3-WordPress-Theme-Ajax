<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$image = get_post_thumbnail_id();?>
<div class="header-background anchor">
  <img <?php echo responsiveImage($image, 'large', '100%');?> alt="<?php the_title(); ?>">
  <div class="overlay black-background light"></div>
  <h1 class="entry-title anchor white-colour"><?php the_title(); ?></h1>
</div>