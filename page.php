<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; else : ?>
	<h2><?php esc_html_e( '404', 'profbud' ); ?></h2>
		<p><?php esc_html_e( 'Sorry! No content found.', 'profbud' ); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>