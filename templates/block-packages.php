<section>
<div class="paсkages_bg">
	<div class="red_triangle_top_left"></div>
	<div class="white_triangle_top_right"></div>
	<div class="box">
		<h2><?php the_field('heading');?></h2>
		<div class="paсkages_box">
			<?php if( have_rows('packages') ): ?>
			<div class="paсkages_list">
				<?php $package_number = 1; while( have_rows('packages') ): the_row(); ?>
				<div class="one_paсkage_title" data-package_number='<?php echo $package_number; ?>'><div class="title"><?php the_sub_field('package_heading');?></div></div>
				<?php $package_number++; endwhile; ?>
			</div>
			<?php endif; ?>

			<?php if( have_rows('packages') ): ?>
			<div class="paсkages_content">
				<?php $package_number = 1; while( have_rows('packages') ): the_row(); ?>
				<div class="one_package_content <?php echo ('package_content_'.$package_number); ?>">

					<?php if( have_rows('package_elements') ): ?>
						<?php $package_element_numder = 1; while( have_rows('package_elements') ): the_row(); ?>
							<div class="one_package_item">						
								<div class="red_number"><?php echo ('0'.$package_element_numder); ?></div>
								<div class="one_package_item_description"><?php the_sub_field('package_element');?></div>
							</div>
						<?php $package_element_numder++; endwhile; ?>
					<?php endif; ?>

				</div><!--one_package_content-->
				<?php $package_number++; endwhile; ?>
			</div>
			<?php endif; ?>

		</div>
	</div><!--box-->
	<div class="white_triangle_bottom_right"></div>
</div><!--pakages_bg-->
</section>