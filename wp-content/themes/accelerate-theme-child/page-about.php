<?php
/**
 * The template for the About Page
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
<div id="about-hero-container">
  <?php while ( have_posts() ) : the_post();
    $about_hero = get_field('about_hero_image');
    $size = 'full';
    ?>
<figure id="about-hero-img">
  <?php echo wp_get_attachment_image($about_hero, $size); ?>
</figure>
<div class="custom-page-header-text"><?php the_content(); ?></div>
<?php endwhile; // end of the loop. ?>
</div>
	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
        $about_page_title = get_field('about_page_title');
        $page_subheader_about = get_field('page_subheader_about');
        $icon_1 = get_field('icon_1');
        $icon_2 = get_field('icon_2');
        $icon_3 = get_field('icon_3');
        $icon_4 = get_field('icon_4');
        $service_1 = get_field('service_1');
        $service_2 = get_field('service_2');
        $service_3 = get_field('service_3');
        $service_4 = get_field('service_4');
        $desc_1 = get_field('service_1_description');
        $desc_2 = get_field('service_2_description');
        $desc_3 = get_field('service_3_description');
        $desc_4 = get_field('service_4_description');
        $size = 'full';
      ?>
      <section id="about-container">
				<h4><?php echo $about_page_title; ?></h4>
        <p id="service-pre-pitch"><?php echo $page_subheader_about; ?></p>
        <div class="service-block">
          <figure id='icon-1'>
            <?php echo wp_get_attachment_image($icon_1, $size); ?>
          </figure>
          <div id='service-1-text'>
            <h3 id='service-1'><?php echo $service_1; ?></h3>
            <p id='desc-1'><?php echo $desc_1; ?></p>
          </div>
        </div>
        <div class="service-block">
          <figure id='icon-2'>
            <?php echo wp_get_attachment_image($icon_2, $size); ?>
          </figure>
          <div id='service-2-text'>
            <h3 id='service-2'><?php echo $service_2; ?></h3>
            <p id='desc-2'><?php echo $desc_2; ?></p>
          </div>
        </div>
        <div class="service-block">
          <figure id='icon-3'>
            <?php echo wp_get_attachment_image($icon_3, $size); ?>
          </figure>
          <div id='service-3-text'>
            <h3 id='service-3'><?php echo $service_3; ?></h3>
            <p id='desc-3'><?php echo $desc_3; ?></p>
          </div>
        </div>
        <div class="service-block">
          <figure id='icon-4'>
            <?php echo wp_get_attachment_image($icon_4, $size); ?>
          </figure>
          <div id='service-4-text'>
            <h3 id='service-4'><?php echo $service_4; ?></h3>
            <p id='desc-4'><?php echo $desc_4; ?></p>
          </div>
        </div>
        <div class="work-with-us">
          <h3>Interested in working with us?</h3>
          <div>
          <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
          </div>
        </div>
			<?php endwhile; // end of the loop. ?>
      </section>
		</div><!-- .main-content -->

	</div><!-- #primary -->
<?php get_footer(); ?>
