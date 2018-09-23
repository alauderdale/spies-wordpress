<?php
/*
Template Name: Resources
 */
?>

<?php get_header(); ?>

<div id='main'>
	<section class='double-padding-top'>
		<div class='container'>
			<div class='row double-margin-bottom'>
				<div class='col-lg-12'>
					<h1 class='bold-font text-center'>
						Resources
					</h1>
					<p class='text-center'>
						<?php the_field('lead_copy');?>
					</p>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12'>
					<div class='row justify-content-center'>
						<?php $resourceLoop = new WP_Query( array('post_type' => 'resources') ); ?>
						<?php while ( $resourceLoop->have_posts() ) : $resourceLoop->the_post(); ?>
							<div class='col-lg-3 col-md-4 col-sm-6'>
								<a href=' <?php the_permalink();?>'>
									<div class='card double-margin-bottom resource-card'>
										<?php if ( get_field( 'resource_banner_image' ) ): ?>
										<img alt='Card image cap' class='card-img-top' src='<?php the_field('resource_banner_image');?>'>
										<?php else: // field_name returned false ?>
											<img alt='Card image cap' class='card-img-top' src='<?php bloginfo('template_url'); ?>//images/resource-header.png'>
										<?php endif; // end of if field_name logic ?>
										<div class='card-body'>
											<div class='text-center'>
												<h4 class='card-title card-subtitle mb-2 text-muted'>
													<?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?>
												</h4>
												<p class='card-text'>
													 <?php the_title();?>
												</p>
											</div>
										</div>
										<div class='card-footer'>
											<button class='btn btn-link btn-block' type='button' onclick'window.location.href="<?php the_permalink();?>">
												View the post
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
		</div>
	</section>
	<section class='inverse-section primary-promo'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-8 col-lg-9'>
					<h2 class='bold-font'>
						Ready to chat?
					</h2>
					<p class='double-margin-bottom'>
						Request your consoltation now. Or call us at
						<span class='bold-font'>
							303.830.7090
						</span>
					</p>
				</div>
				<div class='col-md-4 col-lg-3'>
					<a class='btn btn-lg btn-light margin-top btn-block' href='/contact'>
						Request a consultation
					</a>
				</div>
			</div>
		</div>
	</section>


</div>

<?php get_footer(); ?>