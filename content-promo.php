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
						<?php the_field('phone', 'option'); ?>
					</span>
				</p>
			</div>
			<div class='col-md-4 col-lg-3'>
				<a class='btn btn-lg btn-light margin-top btn-block' href='<?php the_field('consultation_cta_link', 'option'); ?>'>
					<?php the_field('consultation_cta_text', 'option'); ?>
				</a>
			</div>
		</div>
	</div>
</section>