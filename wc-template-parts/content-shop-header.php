<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
if ( Theme::$layout == 'full-width' ) {
	$neuzin_layout_class = 'col-sm-12 col-12';
} else {
	$neuzin_layout_class = Helper::has_active_widget();	
}
if( is_active_sidebar( 'shop-sidebar-1' )) {
	$fixedbar = 'fixed-bar-coloum';
}else {
	$fixedbar = '';
}
?>
<div id="primary" class="content-area shop-page">
	<div class="container">
		<div class="row">
			<?php if ( Theme::$layout == 'left-sidebar' ) { ?>
				<div class="col-lg-4 col-md-12 col-12 <?php echo esc_attr( $fixedbar ); ?>">
					<aside class="sidebar-widget-area">
						<?php if ( is_active_sidebar( 'shop-sidebar-1' ) ) dynamic_sidebar( 'shop-sidebar-1' ); ?>
					</aside>
				</div>
			<?php }	?>
			<div class="<?php echo esc_attr( $neuzin_layout_class );?>">
				<main id="main" class="site-main">