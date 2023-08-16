<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

?>
</div><!--#content-->
<?php

if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'footer' ) ) {
	return;
}
?>
<footer>
	<div id="footer-<?php echo esc_attr( NeuzinTheme::$footer_style ); ?>" class="footer-area has-animation">
		<?php
			get_template_part( 'template-parts/footer/footer', NeuzinTheme::$footer_style );
		?>
	</div>
</footer>
</div>
<?php wp_footer();?>
</body>
</html>