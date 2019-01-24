<section>
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
</section>