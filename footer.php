<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package purecss.io
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'purecss-io' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'purecss-io' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'purecss-io' ), 'purecss.io', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://purecss.io/combo/1.17.16?/js/track-downloads.js&/js/ui.js&/vendor/rainbow/rainbow.min.js&/vendor/rainbow/language/generic.js&/vendor/rainbow/language/html.js&/vendor/rainbow/language/css.js&/vendor/rainbow/language/javascript.js&/vendor/rainbow/language/shell.js"></script>
</body>
</html>
