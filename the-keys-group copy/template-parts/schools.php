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

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="container container-padding">
        <div class="columns is-multiline">
	        
			<?php
			    $loop = new WP_Query( array( 'post_type' => 'school' ) );
			    if ( $loop->have_posts() ):
			        while ( $loop->have_posts() ) : $loop->the_post(); ?>
			            <div class="column is-3">
				            <div class="card">
					        <?php if ( has_post_thumbnail() ) { ?>
						        <div class="card-image">
					                <figure class="image is-4by3">
					                  <a href="<?php the_permalink(); ?>">
						                  <img src="<?php the_post_thumbnail(); ?>" alt="<?php echo get_the_title(); ?>">
						              </a>
					                </figure>
					            </div>
			                <?php } ?>
					        <a href="<?php the_permalink(); ?>">
				              <div class="card-content" style="background-color: <?php echo get_post_field('card_background_color'); ?>">
				                <h1 class="card-border has-text-weight-bold has-text-white-bis is-size-4"><?php echo get_the_title(); ?></h1>
				                <div class="school-content card-paragraph has-text-white-bis is-size-7">
				                  <?php the_content(); ?>
				                </div>
				              </div>
				        	</a>
				          </div>
				        </div>
			        <?php endwhile;
			        if (  $loop->max_num_pages > 1 ) : ?>
			            <div id="nav-below" class="navigation">
			                <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Previous', 'domain' ) ); ?></div>
			                <div class="nav-next"><?php previous_posts_link( __( 'Next <span class="meta-nav">&rarr;</span>', 'domain' ) ); ?></div>
			            </div>
			        <?php endif;
			    endif;
			    wp_reset_postdata();
			?>
	        
        </div>
      </div>
</article><!-- .post -->
