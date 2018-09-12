<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package boiler
 */

get_header(); ?>


		<div id='main'>
			<section class='double-padding-top'>
				<div class='container'>
					<div class='row'>
						<div class='col-md-2'></div>
						<div class='col-md-8'>
							<h1 class='double-margin-bottom bold-font'>
								News
							</h1>
							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
							<div class='padding-bottom'>
								<h4>
									<?php the_time('F j, Y') ?>
								</h4>
								<h2>
									<a href='<?php the_permalink();?>'>
										<?php the_title();?>
									</a>
								</h2>
								<p>
									<?php the_excerpt();?>
								</p>
								<a class='btn btn-dark' href='<?php the_permalink();?>'>
									Read article
								</a>
								<div class='padding-top'></div>
								<hr>
							</div>
							<?php endwhile; // end of the loop. ?>
							<div class="navigation default-pagination">
							<?php
								global $wp_query;

								$big = 999999999; // need an unlikely integer

								echo paginate_links( array(
									'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
									'format' => '?paged=%#%',
									'prev_text'          => __('«'),
									'next_text'          => __('»'),
									'current' => max( 1, get_query_var('paged') ),
									'total' => $wp_query->max_num_pages
								) );
							?>
 							</div>
 							<?php endif; ?>
						</div>
						<div class='col-md-2'></div>
					</div>
				</div>
			</section>
			<?php get_template_part( 'content', 'promo' ); ?>


		</div>




<?php get_footer(); ?>