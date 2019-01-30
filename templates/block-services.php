<section>
<div id="services_section" class="services_bg">
	<div class="red_triangle_top_left"></div>
	<div class="white_triangle_top_right"></div>	
	<div class="box">
		<?php if( have_rows('services') ): ?>
		<div class="services_list">
			<?php while( have_rows('services') ): the_row();
				$icon = get_sub_field('icon');
			?>
			<div class="one_service">
				<div class="one_service_image">
					<?php if($icon): ?>  
					<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
					<?php endif; ?>
				</div>
				<div class="one_service_title"><?php the_sub_field('heading'); ?></div>
				<div class="one_service_description"><?php the_sub_field('editor'); ?></div>
			</div><!--one_service-->
			<?php endwhile; ?>
		</div><!--services_list-->
		<?php endif; ?>
	</div><!--box-->
	<div class="white_triangle_bottom_right"></div>
</div><!--services_bg-->
</section>