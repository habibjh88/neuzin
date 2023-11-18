<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
if( is_active_sidebar( 'sidebar' )) {
	$fixedbar = 'fixed-bar-coloum';
}else {
	$fixedbar = '';
}

?>
<div class="col-lg-4 col-md-12 <?php echo esc_attr( $fixedbar ); ?>">
	<aside class="sidebar-widget-area">		
		<?php
			if ( Theme::$sidebar ) {
				if ( is_active_sidebar( Theme::$sidebar ) ) dynamic_sidebar( Theme::$sidebar );
			}
			else {
				if ( is_active_sidebar( 'sidebar' ) ) dynamic_sidebar( 'sidebar' );
			}
		?>
	</aside>
</div>