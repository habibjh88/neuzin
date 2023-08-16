<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

if( is_active_sidebar( 'sidebar' )) {
	$fixedbar = 'fixed-bar-coloum';
}else {
	$fixedbar = '';
}

?>
<div class="col-lg-4 col-md-12 <?php echo esc_attr( $fixedbar ); ?>">
	<aside class="sidebar-widget-area">		
		<?php
			if ( NeuzinTheme::$sidebar ) {
				if ( is_active_sidebar( NeuzinTheme::$sidebar ) ) dynamic_sidebar( NeuzinTheme::$sidebar );
			}
			else {
				if ( is_active_sidebar( 'sidebar' ) ) dynamic_sidebar( 'sidebar' );
			}
		?>
	</aside>
</div>