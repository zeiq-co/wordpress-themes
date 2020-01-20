<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

$firstImage =  get_field('footer_first_image', 99);
$secondImage =  get_field('footer_second_image', 99);
$thirdImage =  get_field('footer_third_image', 99);
$fourthImage =  get_field('footer_fourth_image', 99);
$twitter_url = get_field('twitter_link', 99)['url'];
$facebook_url = get_field('facebook_link', 99)['url'];
$linkedin_url = get_field('linkedin_link', 99)['url'];
?>
  <footer id="site-footer" role="contentinfo" class="header-footer-group">
	 <div class="container padding-provider">
	  <?php if ( get_post_field('school_address') ) { ?>
        <p class="has-text-light has-text-centered">
	      <span class="has-text-weight-bold">Address:</span> <?php echo get_post_field('school_address'); ?> 
	    </p>
	  <?php } ?>
    </div>
	<div class="container">
      <div class="columns footer-logo">
	    <?php if ( $firstImage ) { ?>
          <div class="column is-2">
            <img src="<?php echo $firstImage['url']; ?>" />
          </div>
	    <?php } ?>
	    <?php if ( $secondImage ) { ?>
          <div class="column is-2">
            <img src="<?php echo $secondImage['url']; ?>" />
          </div>
	    <?php } ?>
	    <?php if ( $thirdImage ) { ?>
          <div class="column is-2">
            <img src="<?php echo $thirdImage['url']; ?>" />
          </div>
	    <?php } ?>
	    <?php if ( $fourthImage ) { ?>
          <div class="column is-2">
            <img src="<?php echo $fourthImage['url']; ?>" />
          </div>
	    <?php } ?>
      </div>
      <div class="footer-paragraph">
	    <?php if ( get_post_field('footer_text', 99) ) { ?>
          <p class="has-text-light is-size-7">
            <?php echo get_post_field('footer_text', 99); ?>        
          </p>
	    <?php } ?>
      </div>
      <div class="has-text-centered padding-provider">
        <a class="privacy-policy has-text-light">Privacy Policy</a>
        <a class="has-text-light">Modern Slavery Act Statement</a>
      </div>
      <div class="has-text-centered padding-provider">
        <a class="icon has-text-info" href="<?php echo esc_url( $twitter_url ); ?>" target="_blank">
          <i class="fab fa-twitter-square"></i>
        </a>
        <a class="icon has-text-link" href="<?php echo esc_url( $facebook_url ); ?>" target="_blank">
          <i class="fab fa-facebook-square"></i>
        </a>
        <a class="icon has-text-info" href="<?php echo esc_url( $linkedin_url ); ?>" target="_blank">
	      <span class="has-text-black has-text-weight-bold linkedin">Linkedin</span>
	      <i class="fab fa-linkedin"></i>
        </a>
      </div>
      <div class="has-text-centered padding-provider">
	    <?php if ( get_post_field('copy_right_text', 99) ) { ?>
          <p class="has-text-light">
	        <?php echo get_post_field('copy_right_text', 99); ?>
          </p>
	    <?php } ?>
      </div>
    </div>
  </footer><!-- #site-footer -->
		<?php wp_footer(); ?>
	</body>
</html>
