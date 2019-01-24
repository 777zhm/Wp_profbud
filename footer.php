</main>

<footer>
<div class="footer_bottom">
	<p><?php the_field('copyright', 'theme_settings'); ?></p>
	<?php if(get_field('link', 'theme_settings')): ?>  
	<p><a href="<?php the_field('link', 'theme_settings'); ?>"><?php the_field('link_text', 'theme_settings'); ?></a></p>
	<?php endif; ?>
</div><!--footer_bottom-->
</footer>


<div class="form_popup" id="form_popup">
	<div class="popup_bg">
		<div class="popup popup_form">
			<div class="close"></div>
			<div class="popup_form_title"><?php the_field('popup_title', 'theme_settings') ?></div>
			<form action='' class="ajax_send_form" method="post">
				<input type="text" class="popup_form_input" placeholder="Ваше имя" name="your_name">
				<input type="text" class="popup_form_input" placeholder="Email" name="your_email">
				<textarea class="popup_form_textarea" placeholder="Cообщение" name="your_message"></textarea>
				<?php global $wp; ?>
				<input type="hidden"  name="current_page_link" value="<?php echo home_url( $wp->request ); ?>">
				<input type="submit"  class="popup_form_submit red_button" value="Связаться с нами">
			</form>
		</div>
	</div>
</div>


<div class="success_popup" id="success_popup">
	<div class="popup_bg">
		<div class="popup">
			<div class="close"></div>
			<?php the_field('contact_form_success', 'theme_settings'); ?>
		</div>
	</div>
</div>

<div class="loading_popup" id="loading_popup">
	<div class="popup_bg">
		<img src="<?php assets_url('img/loading.gif'); ?>">
	</div>
</div>


<?php wp_footer(); ?>
</body>
</html>