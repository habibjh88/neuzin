<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
?>
</div><!--#content-->
<?php

if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'footer' ) ) {
	return;
}
?>
<footer>
	<div id="footer-<?php echo esc_attr( Theme::$footer_style ); ?>" class="footer-area has-animation">
		<?php get_template_part( 'template-parts/footer/footer', Theme::$footer_style ); ?>
	</div>
</footer>
</div><!-- End Content wrapper -->
<?php wp_footer();?>
</body>
</html>