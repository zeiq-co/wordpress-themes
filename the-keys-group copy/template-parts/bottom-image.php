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
$bottomImage =  get_field('bottom_image', 59);

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <?php if ( $bottomImage ) { ?>
    <img src="<?php echo $bottomImage['url']; ?>" class="image-bottom" />			        
  <?php } ?>
  <div class="bottom-border bottom-border-margin"></div>
</article>