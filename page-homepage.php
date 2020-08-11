<?php
/*
Template Name: Home
 */
?>

<?php get_header(); ?>




<div id='main'>
	<section class='inverse-section home-hero mark-effect' style='background-image:url(<?php the_field('hero_image');?>);'>
		<div class='container'>
			<div class='row'>
				<div class='col-xl-6 col-lg-8'>
<!-- 					<h4 class='medium-font line-above position-relative'>
						Welcome
					</h4> -->
					<h1 class='margin-bottom bold-font'>
						
						<?php the_field('title_text');?>
					</h1>
					<h3>
						<?php the_field('lead_copy');?>
					</h3>
					<a class='btn btn-lg btn-outline-light double-margin-top' href='<?php the_field('consultation_cta_link', 'option'); ?>'>
						<?php the_field('consultation_cta_text', 'option'); ?>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class='no-padding-bottom'>
		<div class='container'>
			<div class='row justify-content-md-center'>
				<div class='col-lg-8'>
					<h4 class='bold-font text-center'>
						<?php the_field('practice_teaser_title'); ?>
					</h4>
					<h2 class='text-center'>
						<?php the_field('practice_teaser_text'); ?>
					</h2>
				</div>
			</div>
			<div class='industry-cards'>
				<div class='row'>
					<div class='col-lg-12'>
						<?php if( have_rows('feature_practices') ): ?>
							<div class='card-deck'>
								<?php 

								while( have_rows('feature_practices') ): the_row(); 

					// vars
								$icon = get_sub_field('icon');

								$title = get_sub_field('title');

								$text = get_sub_field('text');

								$pageLink = get_sub_field('page_link');

								?>
									<div class='card service-card position-relative double-padding-top'>
										<div class='card-icon'>
											<a href="<?php echo $pageLink; ?>">
												<img src='<?php echo $icon; ?>'>
											</a>
										</div>
										<div class='card-body'>
											<a href="<?php echo $pageLink; ?>">
												<h4 class='card-title bold-font'>
													<?php echo $title; ?>
												</h4>
												<p class='card-text light-text-color'>
													<?php echo $text; ?>
												</p>
											</a>
										</div>
										<div class='card-footer'>
											<a class='card-link' href='<?php echo $pageLink; ?>'>
												Learn more
											</a>
										</div>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
						<div class='text-center double-margin-top double-padding-top'>
							<a class='btn btn-lg btn-dark' href='<?php the_field('view_all_practices_link'); ?>'>
								View all practice areas
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<img class='full-width' src='<?php bloginfo('template_url'); ?>/images/people-bg-top.svg'>
	<section class='home-people no-padding-top no-padding-bottom'>
		<div class='container'>
			<div class='row justify-content-md-center double-margin-bottom'>
				<div class='col-lg-8'>
					<h4 class='bold-font text-center'>
						<?php the_field('legal_team_title'); ?>
					</h4>
					<h2 class='text-center'>
						<?php the_field('legal_team_text'); ?>
					</h2>
				</div>
			</div>
			<div class='people-cards'>
				<div class='row'>
					<?php $teamLoop = new WP_Query( array('post_type' => 'team') ); ?>
					<?php while ( $teamLoop->have_posts() ) : $teamLoop->the_post(); ?>
					<div class='col-lg-4 col-md-6'>
						<a href='<?php the_permalink();?>'>
							<div class='card person-card position-relative card-grid-card shadowed-card-link'>
								<div class='card-body'>
									<img class='double-margin-bottom' src='<?php the_field('avatar_small');?>' width='153px'>
									<h3 class='card-title text-color'>
										 <?php the_title();?>
									</h3>
									<h5 class='card-subtitle light-text-color half-margin-bottom'>
										<?php the_field('title');?>
									</h5>
									<i class='material-icons mail-link' onclick='document.location.href = &#39;mailto:<?php the_field('email');?>&#39;; return false'>
										email
									</i>
									<h5 class='card-text light-text-color'>
										<?php
										$content = get_the_content();
										echo substr($content, 0, 200);
										?>
									</h5>
								</div>
							</div>
						</a>
					</div>
					<?php wp_reset_postdata(); ?>
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class='container'>
			<div class='row'>
				<div class='col-md-6'>
					<img class='max-width' src='<?php the_field('about_image');?>'>
				</div>
				<div class='col-md-1'>
					<div class='d-none d-md-inline'>
						<div class='border-flourish'></div>
					</div>
				</div>
				<div class='col-md-5'>
					<div class='double-margin-top'>
						<h2>
							<?php the_field('about_title'); ?>
						</h2>
						<p>
							<?php the_field('about_text'); ?>
						</p>
						<h3>
							<a class='link-underline' href='<?php the_field('about_link'); ?>'>
								Learn more about us
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