<?php
/**
 * Template part for displaying single posts.
 *
 * @package Resound Radio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('segment'); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php resound_radio_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'resound-radio' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php resound_radio_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

