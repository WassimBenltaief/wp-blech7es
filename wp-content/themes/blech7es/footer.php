<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package blech7es
 */
?>


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="credit">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'blech7es' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'blech7es' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'blech7es' ), 'blech7es', '<a href="http://omar-karray.cu.cc/" rel="designer">Omar Karray</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
</div>

</body>
</html>
