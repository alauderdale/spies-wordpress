<?php
/**
 * The Template for displaying all single posts.
 *
 * @package boiler
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div id='main'>
		<section class='double-padding-top'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-2'></div>
					<div class='col-md-8 blog-styles'>
						<h1 class='double-margin-bottom bold-font'>
							<?php the_title();?>
						</h1>
						<h4 class='margin-bottom'>
							<?php the_time('F j, Y') ?>
						</h4>
						<?php the_content();?>
					</div>
					<div class='col-md-2'></div>
				</div>
			</div>
		</section>
		<?php get_template_part( 'content', 'promo' ); ?>
	</div>
<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>