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

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php if ( $featuredImg1 ) { ?>
      <div class="container is-hidden-mobile">
        <div class="school-bottom-image" style="background-image: url('<?php echo $featuredImg1['url']; ?>')"></div>
      </div>
	<?php } ?>      
      <section class="section quote-image">
        <p class="is-flex quote">
	     <?php if ( $featuredImg2 && get_post_field('full_image_quote') ) { ?>
	       <div class="columns flex-end school-quote" style="background-image: url('<?php echo $featuredImg2['url']; ?>')"> 
		   <div class="column  is-2 is-pulled-right">
              <i class="fas fa-quote-left has-text-danger"></i>
              <span class="has-text-danger">
                <em class="quote-padding">
                  <?php echo get_post_field('full_image_quote'); ?>                
                </em>
              </span>
              <i class="fas fa-quote-right has-text-danger"></i>
		   </div>
	      </div>
		 <?php } ?>   
        </p>
      </section>
    </div>
    
    <div class="columns">
      <div class="column is-half is-offset-one-quarter">
          <div class="columns">
            <div class="column column-quote">
	          <?php if ( get_post_field('half_image_quote') ) { ?>
		        <section class="section quote-margin-top">
                  <p class="is-flex quote-position">
                    <i class="fas fa-quote-left has-text-success"></i>
                    <span class="has-line-height has-text-success quote-padding">
                      <em>
                       <?php echo get_post_field('half_image_quote'); ?>
                      </em>
                    </span>
                    <i class="fas fa-quote-right has-text-success quote-margin"></i>
                  </p>
                </section>
			  <?php } ?>   
            </div>
          </div>
      </div>
    </div>
    <div class="container">
	  <?php if ( $featuredImg3 ) { ?>
        <div class="school-bottom" style="background-image: url('<?php echo $featuredImg3['url']; ?>')"></div>
	  <?php } ?> 
    </div>
    
</article>