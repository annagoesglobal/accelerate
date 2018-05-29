
<?php
/**
 * The template for displaying 404 errors
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
<section class="page-404">
  <div class="text-404">
    <h1>Whoops! Looks like you found Route 404.</h1>
      <div class="return-button"><a class="button" href="<?php echo site_url('/accelerate/') ?>">Head Home</a></div>
  </div>
</section><!-- #primary -->
<?php get_footer(); ?>
