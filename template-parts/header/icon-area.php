<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
?>
<div class="header-icon-area">
	<?php
	if ( Theme::neuzin_options('search_icon') ) {
		get_template_part( 'template-parts/header/icon', 'search' );
	}
	if ( Theme::neuzin_options('cart_icon') && class_exists( 'WC_Widget_Cart' ) ){
		get_template_part( 'template-parts/header/icon', 'cart' );
	}
	if ( Theme::neuzin_options('vertical_menu_icon') && has_nav_menu( 'topright' ) ){
		get_template_part( 'template-parts/header/icon', 'menu' );
	}	
	?>
</div>