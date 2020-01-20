<?php /* Template Name: Basic Template */ ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */
 $sideImage =  get_field('left_image');

get_header();
?>
<div class="container">
	<?php get_template_part( 'template-parts/hero-schools' ); ?>
      <div class="bg-image">
	    <div>
		  <?php if ( $sideImage ) { ?>
            <div class="is-hidden-desktop image-desktop">
              <figure class="image is-128x128">
                <img src="<?php echo $sideImage['url']; ?>" class="side-image" />
              </figure>
            </div>
		  <?php } ?>
	    </div>
        <div>
          <article class="media">
	        <?php if ( $sideImage ) { ?>
              <div class="is-hidden-mobile">
                <figure class="image is-64x64">
                  <img src="<?php echo $sideImage['url']; ?>" class="side-image" />
                </figure>
              </div>
			<?php } ?>
            
            <?php if ( get_post_field('head_title', $post->ID) ) { ?>
			 <div class="columns">	            
              <div class="column is-half is-offset-one-quarter">
                <h1 class="headline has-text-weight-normal is-size-4 is-size-5-mobile"><?php echo get_post_field('head_title', $post->ID); ?></h1>
                <div class="columns columns-border-bottom">
                  <div class="column">
                    <p class="paragraph">
                     <?php echo get_post_field('school_details_1'); ?>
                    </p>
                  </div>
                  <div class="column">
                    <p class="paragraph">
                      <?php echo get_post_field('school_details_2'); ?>
                    </p>
                  </div>
                </div>
               </div>
             </div>
			<?php } ?>
          </article>
          
           <?php if ( get_post_field('head_title_2', $post->ID) ) { ?>
			<div class="columns">	            
              <div class="column is-half is-offset-one-quarter">
                <h1 class="headline has-text-weight-normal is-size-4 is-size-5-mobile"><?php echo get_post_field('head_title_2', $post->ID); ?></h1>
                <div class="columns columns-border-bottom">
                  <div class="column">
                    <p class="paragraph">
                     <?php echo get_post_field('title_2_paragraph_1'); ?>
                    </p>
                  </div>
                  <div class="column">
                    <p class="paragraph">
                      <?php echo get_post_field('title_2_paragraph_2'); ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
		   <?php } ?>
			
            <?php if ( get_post_field('head_title_3', $post->ID) ) { ?>
			 <div class="columns">	            
              <div class="column is-half is-offset-one-quarter">
                <h1 class="headline has-text-weight-normal is-size-4 is-size-5-mobile"><?php echo get_post_field('head_title_3', $post->ID); ?></h1>
                <div class="columns columns-border-bottom">
                  <div class="column">
                    <p class="paragraph">
                     <?php echo get_post_field('title_3_paragraph_1'); ?>
                    </p>
                  </div>
                  <div class="column">
                    <p class="paragraph">
                      <?php echo get_post_field('titile_3_paragraph_2'); ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
		   <?php } ?>
            
           <?php if ( get_post_field('head_title_4', $post->ID) ) { ?>
			 <div class="columns">	            
              <div class="column is-half is-offset-one-quarter">
                <h1 class="headline has-text-weight-normal is-size-4 is-size-5-mobile"><?php echo get_post_field('head_title_4', $post->ID); ?></h1>
                <div class="columns columns-border-bottom">
                  <div class="column">
                    <p class="paragraph">
                     <?php echo get_post_field('title_4_paragraph_1'); ?>
                    </p>
                  </div>
                  <div class="column">
                    <p class="paragraph">
                      <?php echo get_post_field('title_4_paragraph_2'); ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
		   <?php } ?>
            
           <?php if ( get_post_field('head_title_5', $post->ID) ) { ?>
			 <div class="columns">	            
              <div class="column is-half is-offset-one-quarter">
                <h1 class="headline has-text-weight-normal is-size-4 is-size-5-mobile"><?php echo get_post_field('head_title_5', $post->ID); ?></h1>
                <div class="columns columns-border-bottom">
                  <div class="column">
                    <p class="paragraph">
                     <?php echo get_post_field('title_5_paragraph_1'); ?>
                    </p>
                  </div>
                  <div class="column">
                    <p class="paragraph">
                      <?php echo get_post_field('title_5_paragraph_2'); ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
		   <?php } ?>
            
           <?php if ( get_post_field('head_title_6', $post->ID)  ) { ?>
			<div class="columns">	            
              <div class="column is-half is-offset-one-quarter">
                <h1 class="headline has-text-weight-normal is-size-4 is-size-5-mobile"><?php echo get_post_field('head_title_6', $post->ID); ?></h1>
                <div class="columns columns-border-bottom">
                  <div class="column">
                    <p class="paragraph">
                     <?php echo get_post_field('title_6_paragraph_1'); ?>
                    </p>
                  </div>
                  <div class="column">
                    <p class="paragraph">
                      <?php echo get_post_field('title_6_paragraph_2'); ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
		   <?php } ?>            
        </div>
    </div>
    
	<?php get_template_part( 'template-parts/prospectus-policies' ); ?>
	<?php get_template_part( 'template-parts/quote-text' ); ?>
<?php
get_footer();
