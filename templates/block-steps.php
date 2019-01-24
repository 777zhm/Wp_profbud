<section>
	<div class="box">
		<?php if( have_rows('steps') ): ?>
			<div class="work_steps">
				<?php while( have_rows('steps') ): the_row();
					$icon = get_sub_field('icon');
					?>
					<div class="one_work_step">
						<div class="one_work_step_image">
							<?php if($icon): ?>  
								<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
							<?php endif; ?>
						</div>
						<div class="one_work_step_title">
							<?php the_sub_field('heading'); ?>
						</div>
						<div class="one_work_step_description">
							<?php the_sub_field('editor'); ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div><!--work_steps-->
		<?php endif; ?>
	</div><!--box-->
</section>