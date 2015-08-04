<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Resound Radio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info contentwidth aligncenter">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'resound-radio' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'resound-radio' ), 'WordPress' ); ?></a>
            <span class="sep">|</span>
            Resound Radio is operated by the students of <a href="http://www.cedarville.edu">Cedarville University</a>
            <div id="footer-links">
                <a href="http://cedars.cedarville.edu/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/cedars_logotype_transparent-1024x248.png' ?>" alt="Cedars"></a>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
