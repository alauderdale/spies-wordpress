<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package boiler
 */

get_header(); ?>


<?php get_header(); ?>
<div id='main'>
    <?php if ( get_field( 'hero_image' ) ): ?>
    <section class='page-hero page-hero-offset mark-effect' style='background-image:url(<?php the_field('hero_image');?>);'>
    <?php else: // field_name returned false ?>
      <section class='page-hero page-hero-offset mark-effect' style='background-color:#6F0865;'>
    <?php endif; // end of if field_name logic ?>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-9'>
          <div class='hero-text-container'>
            <h1 class='margin-bottom bold-font'>
              <?php the_title();?>
            </h1>
            <h3>
              <?php the_field('lead_copy');?>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
           <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content();?>
          <?php endwhile; // end of the loop. ?>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part( 'content', 'promo' ); ?>
</div>




<?php get_footer(); ?>
