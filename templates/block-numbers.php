<section>
	<div id="numbers_section" class="results_bg" style="background-image:url('<?php the_field('image');?>')">
		<div class="white_triangle_top_right"></div>
		<div class="box">
			<h2 class="white"><?php the_field('heading');?></h2>
			<?php if( have_rows('numbers') ): ?>
				<div class="resutls_list">
					<?php while( have_rows('numbers') ): the_row(); ?>
						<div class="one_result">
							<div class="one_result_number">
								<div class="number"><?php the_sub_field('number');?></div>
							</div>
							<div class="one_result_description"><?php the_sub_field('editor');?></div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div><!--box-->
		<div class="white_triangle_bottom_right"></div>
	</div><!--results_bg-->
</section>