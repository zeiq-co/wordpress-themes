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

$locationImage =  get_field('location_image', 59);
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <div class="bg-image-index">
    <div class="columns">
      <div class="column is-half is-offset-one-quarter">
        <h1 class="headline has-text-weight-bold is-size-4">
	      <?php echo get_post_field('heading', 59); ?>
        </h1>
        <div class="columns">
          <div class="column">
            <p class="paragraph">
	          <?php echo get_post_field('heading_first_paragraph', 59); ?>
            </p>
          </div>
          <div class="column">
	        <?php echo get_post_field('heading_second_paragraph', 59); ?>
          </div>
        </div>
        <div class="container service-feature">
          <div class="is-flex">
            <div class="circle-bullet"></div>
            <h2 class="has-text-weight-semibold">
	          <?php echo get_post_field('feature_first', 59); ?>
            </h2>
          </div>
          <div class="is-flex">
            <div class="circle-bullet"></div>
            <h2 class="has-text-weight-semibold">
	          <?php echo get_post_field('feature_second', 59); ?>
            </h2>
          </div>
          <div class="is-flex">
            <div class="circle-bullet"></div>
            <h2 class="has-text-weight-semibold">
	          <?php echo get_post_field('feature_third', 59); ?>
            </h2>
          </div>
          <div class="is-flex">
            <div class="circle-bullet"></div>
            <h2 class="has-text-weight-semibold">
	          <?php echo get_post_field('feature_fourth', 59); ?>
            </h2>
          </div>
        </div>
        <h1 class="has-text-danger has-text-weight-semibold is-size-4 location-text">
	      <?php echo get_post_field('location_text', 59); ?>
        </h1>
        <div class="columns">
          <div class="column is-half is-offset-one-quarter">
            <img src="<?php echo $locationImage['url']; ?>" class="location-image" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column is-half is-offset-one-quarter">
      <div class="columns columns-border-bottom columns-margin-top">
        <div class="column">
          <p>
	        <?php echo get_post_field('location_paragraph_first', 59); ?>
          </p>
        </div>
        <div class="column">
          <p>
	        <?php echo get_post_field('location_paragraph_second', 59); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</article><!-- .post -->
