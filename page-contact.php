<?php
/*
Template Name: Contact
 */
?>

<?php

if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {

	wpcf7_enqueue_scripts();

}



if ( function_exists( 'wpcf7_enqueue_styles' ) ) {

	wpcf7_enqueue_styles();

}

?>


<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div id='main'>
	<section class='double-padding-bottom double-padding-top'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12 text-center'>
					<h1 class='bold-font margin-bottom'>
						<?php the_field('title_text');?>
					</h1>
					<h3>
						<?php the_field('lead_copy');?>
					</h3>
				</div>
			</div>
		</div>
	</section>
	<section class='double-padding-top'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-1'></div>
				<div class='col-lg-10'>
					<div class='row'>
						<div class='col-lg-6 order-md-3'>
							<?php the_field('contact_form_shortcode');?>
						</div>
						<div class='col-lg-1 order-md-2'></div>
						<div class='col-lg-5 order-md-1'>
							<div class='map'>
								<img class='max-width d-none d-lg-inline ml-auto' src='<?php the_field('map_image');?>'>
								<div class='contact-detils-panel margin-top'>
									<h4 class='bold-font'>
										Contact details
									</h4>
									<h5 class='margin-bottom'>
										<?php the_field('address', 'option'); ?>
									</h5>
									<h5>
										T: <?php the_field('phone', 'option'); ?>
										<br>
										F: <?php the_field('fax', 'option'); ?>
										<br>
										E: <?php the_field('email', 'option'); ?>
									</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='col-lg-1'></div>
			</div>
		</div>
	</section>

</div>

<?php endwhile; // end of the loop. ?>
<!-- end main content -->






<?php get_footer(); ?>