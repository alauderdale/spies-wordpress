<?php
/*
Template Name: About
 */
?>


<?php get_header(); ?>


<div id='main'>
	<section class='page-hero page-hero-offset mark-effect' style='background-image:url(<?php the_field('hero_image');?>);'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-9'>
					<div class='hero-text-container'>
						<h1 class='margin-bottom bold-font'>
							<?php the_field('title_text');?>
						</h1>
						<h3>
							<?php the_field('lead_copy');?>
						</h3>
						<a class='btn btn-dark btn-lg margin-top double-padding-left double-padding-right' href='<?php the_field('consultation_cta_link', 'option'); ?>'>
							Work with us
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class='container'>
			<div class='row'>
				<div class='col-md-6'>
					<img class='max-width' src='<?php the_field('what_we_do_image'); ?>'>
				</div>
				<div class='col-md-1'></div>
				<div class='col-md-5'>
					<div class='double-margin-top'>
						<h2>
							<?php the_field('what_we_do_title'); ?>
						</h2>
						<div class='border-flourish-below'></div>
						<p>
							<?php the_field('what_we_do_text'); ?>
						</p>
						<h3>
							<a class='link-underline' href='<?php the_field('what_we_do_link'); ?>'>
								<?php the_field('what_we_do_link_text'); ?>
							</a>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class='no-padding-top-sm'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-6 order-md-3'>
					<img class='max-width' src='<?php the_field('why_image'); ?>'>
				</div>
				<div class='col-md-1 order-md-2'></div>
				<div class='col-md-5 order-md-1'>
					<div class='double-margin-top'>
						<h2>
							<?php the_field('why_title'); ?>
						</h2>
						<div class='border-flourish-below'></div>
						<p>
							<?php the_field('why_text'); ?>
						</p>
						<h3 class='margin-bottom'>
							<a class='link-underline' href='<?php the_field('why_page_link_1'); ?>'>
								<?php the_field('why_page_link_1_text'); ?>
							</a>
						</h3>
						<h3>
							<a class='link-underline' href='<?php the_field('why_page_link_2'); ?>'>
								<?php the_field('why_page_link_2_text'); ?>
							</a>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part( 'content', 'promo' ); ?>


</div>




<?php get_footer(); ?>