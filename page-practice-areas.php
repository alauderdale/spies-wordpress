<?php
/*
Template Name: Practice areas
 */
?>

<?php get_header(); ?>

		<div id='main'>
			<section class='page-hero page-hero-offset mark-effect' style='background-image:url(<?php the_field('hero_image');?>);'>
				<div class='container'>
					<div class='row'>
						<div class='col-lg-9'>
							<div class='hero-text-container'>
								<h1 class='margin-bottom medium-font'>
									<?php the_field('title_text');?>
								</h1>
								<h3>
									<?php the_field('lead_copy');?>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class='off-white-bg-color'>
				<div class='container'>
					<div class='practice-cards'>
						<div class='row'>
							<?php $practiceLoop = new WP_Query( array('post_type' => 'practice-areas') ); 
								$i = 0; // for counting
							?>
							<?php while ( $practiceLoop->have_posts() ) : $practiceLoop->the_post(); 
								$i++; // make sure this is @ the end of the while-loop
								$num_padded = sprintf("%02d", $i);
								?>
								<div class='col-lg-4 col-md-6'>
									<a class='display-block' href='<?php the_permalink();?>'>
										<div class='card practice-card position-relative card-grid-card shadowed-card-link'>
											<div class='card-body'>
												<h3 class='card-subtitle light-text-color margin-bottom'>
													<?php echo $num_padded ?>
												</h3>
												<h3 class='card-title text-color'>
													<?php the_title();?>
												</h3>
												<h5 class='card-text light-text-color'>
													<?php the_field('lead_copy');?>
												</h5>
												<button class='btn btn-lg btn-outline-dark btn-block double-margin-top' type='button' onclick'window.location.href="<?php the_permalink();?>">
													Learn more
												</button>
											</div>
										</div>
									</a>
								</div>
							<?php wp_reset_postdata(); ?>
							<?php endwhile; // end of the loop. 
								$i = 1;
							?>
						</div>
					</div>
				</div>
			</section>
			<?php get_template_part( 'content', 'promo' ); ?>
		</div>

<?php get_footer(); ?>