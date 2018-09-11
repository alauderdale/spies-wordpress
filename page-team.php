<?php
/*
Template Name: Team
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
								<a class='btn btn-dark btn-lg margin-top double-padding-left double-padding-right' href='<?php the_field('consultation_cta_link', 'option'); ?>'>
									Get in touch
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class='off-white-bg-color'>
				<div class='container'>
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
											<button class='btn btn-lg btn-outline-dark btn-block double-margin-top' type='button' onclick'window.location.href="<?php the_permalink();?>">
												View bio
											</button>
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
			<?php get_template_part( 'content', 'promo' ); ?>
		</div>

<?php get_footer(); ?>