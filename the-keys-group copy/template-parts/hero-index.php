<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */
$heroImage =  get_field('hero_image', 59);
$heroBackgroundImage =  get_field('hero_background_image', 59);

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <section class="hero index-hero is-large is-bold" style="background-image: url('<?php echo $heroBackgroundImage['url']; ?>')">
    <div class="hero-text">
	  <?php if ( get_post_field('welcome', 59) ) { ?>
	    <h1 class="title is-1 has-text-centered has-text-white-bis">
	      <?php echo get_post_field('welcome', 59); ?>
        </h1>			        
	  <?php } ?>
      <?php if ( $heroImage ) { ?>
	    <img src="<?php echo $heroImage['url']; ?>" class="hero-image" />			        
	  <?php } ?>
    </div>
  </section>
  <?php if ( get_post_field('our_schools', 59) ) { ?>
    <div class="bottom-border">
	  <div  class="is-size-4 has-text-weight-semibold has-text-white-bis">
		<?php echo get_post_field('our_schools', 59); ?>	
	  </div>	
    </div>		        
  <?php } ?>	  
</article>