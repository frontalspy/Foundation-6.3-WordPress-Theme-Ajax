<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>

<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>




<div class="row">
  <div class="small-12 medium-3 red-background"></div>
  <div class="small-12 medium-3 blue-background"></div>
  <div class="small-12 medium-3 yellow-background"></div>
  <div class="small-12 medium-3 row"><div class="small-12 medium-6 green-background"></div>
  <div class="small-12 medium-6 red-background"></div></div>
</div>


<div class="row">
  <?php $images = get_field('image_loop');
    if($images):
      foreach($images as $image):?>
       <div class="small-12">
        <img data-original="http://i0.wp.com<?php echo home_url() . $image['sizes']['medium'];?>" width="300px" <?php //echo responsiveImage($image['id'], $image['sizes']['medium'], "300px");?> alt="">      
       </div>
      <?php endforeach;
  endif;?>
</div>