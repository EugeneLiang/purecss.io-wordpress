<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package purecss.io
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="header">
		<?php the_title( sprintf( '<h1><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<h2>
			<?php purecss_io_posted_on(); ?>
		</h2><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->

	<div class="content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'purecss-io' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php purecss_io_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
