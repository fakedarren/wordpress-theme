<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package fakedarren
 * @subpackage fakedarren
 * @since 1982
 */
?>
		</div>
		
	</div>

	<footer id="colophon" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<?php do_action( 'fakedarren_credits' ); ?>
Another <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'fakedarren' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'fakedarren' ); ?>">
WordPress
</a> blog. 
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>