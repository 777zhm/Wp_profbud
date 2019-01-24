</main>

<footer>
<div class="footer_bottom">
	<p><?php the_field('copyright', 'theme_settings'); ?></p>
	<?php if(get_field('link', 'theme_settings')): ?>  
	<p><a href="<?php the_field('link', 'theme_settings'); ?>"><?php the_field('link_text', 'theme_settings'); ?></a></p>
	<?php endif; ?>
</div><!--footer_bottom-->
</footer>
<?php wp_footer(); ?>
</body>
</html>