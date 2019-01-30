<?php $image = get_field('image'); ?>
<section>
	<div id="calltoaction_section" class="box text_with_big_image">
		<div class="text">
			<h2><?php the_field('heading_1');?><strong><?php the_field('heading_2');?></strong></h2>
			<div class="content"><?php the_field('editor');?></div>
			<div class="red_button call_form"><?php the_field('button_text');?></div>
		</div>
		<div class="image">
			<?php if($image): ?>  
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" >
			<?php endif; ?>
		</div>
	</div><!--box-->
</section>