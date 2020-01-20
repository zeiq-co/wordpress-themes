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
 
$featuredImg1 =  get_field('featured_image_1');
$featuredImg2 =  get_field('featured_image_2');
$featuredImg3 =  get_field('featured_image_3');


/*
echo '<pre>';
print_r($featuredImg1['url']);
echo '</pre>';
*/

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <div class="columns">
        <div class="column column-index is-half is-offset-one-quarter">
          <div class="columns">
	        <?php if ( $featuredImg1 ) { ?>
	          <div class="column column-padding">
                <img src="<?php echo $featuredImg1['url']; ?>" class="image-bottom" />
                <div class="border-bottom-image">
                  <p class="is-size-5	has-text-weight-semibold has-text-white-bis has-text-centered">
	                <?php echo get_post_field('featured_text_1'); ?>
	              </p>
                </div>
              </div>
	        <?php } ?>
            
            <?php if ( $featuredImg2 ) { ?>
	          <div class="column column-padding">
                <img src="<?php echo $featuredImg2['url']; ?>" class="image-bottom" />
                <div class="border-bottom-image">
                  <p class="is-size-5	has-text-weight-semibold has-text-white-bis has-text-centered "> 
	                <?php echo get_post_field('featured_text_2'); ?>
                  </p>
                </div>
              </div>
	        <?php } ?>
	        
	        <?php if ( $featuredImg3 ) { ?>
	          <div class="column column-padding">
                <img src="<?php echo $featuredImg3['url']; ?>" class="image-bottom" />
                <div class="border-bottom-image">
                  <p class="is-size-5	has-text-weight-semibold has-text-white-bis has-text-centered">
	                <?php echo get_post_field('featured_text_3'); ?>
                  </p>
                </div>
              </div>
	        <?php } ?>
          </div>
        </div>
      </div>
</article>
