<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage W_Cloud
 * @since W Cloud 1.0
 */
?>

		</div><!-- #main --><div class="footerBg"></div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>
<div class="cfm_footer">
<?php accua_forms_include('2'); ?>
</div>
			<div class="site-info">
				<?php do_action( 'wcloud_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://livedesignstudios.com', 'wcloud' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'wcloud' ); ?>"><?php printf( __( '2013-2015 %s', 'wcloud' ), 'Wemagin' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>