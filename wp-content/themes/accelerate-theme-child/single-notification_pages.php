<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<body class = "alert-page">
  <?php while ( have_posts() ) : the_post();
    $background = get_field('background_image');
    $size = "full";
  ?>
  <?php if($background){
    echo wp_get_attachment_image( $background, $size );
  } ?>
    <div id="primary" class="site-content alert-container">
		<div class="main-content alert-content" role="main">
				<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->
<?php get_footer(); ?>
</body>
