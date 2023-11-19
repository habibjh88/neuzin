<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */

use devofwp\Neuzin\Theme;

?>
	<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="profile" href="https://gmpg.org/xfn/11"/>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php

if ( Theme::neuzin_options( 'preloader' ) == '1' ) {
	if ( ! empty( Theme::neuzin_options( 'preloader_image' )['url'] ) ) {
		$preloader_img = Theme::neuzin_options( 'preloader_image' )['url'];
		?>
		<div id="preloader" class="tlp-preloader">
			<div class="animation-preloader">
				<img width="70" height="70" src="<?php echo esc_url( $preloader_img ); ?>" alt="<?php echo esc_attr__( 'preloader', 'neuzin' ) ?>">
			</div>
		</div>
	<?php }
}

if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'header' ) ) {
	return;
}
var_dump(["header"=>Theme::$header_style]);
?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'neuzin' ); ?></a>

	<!--Start Header-->
	<header id="masthead" class="site-header">
		<div id="header-<?php echo esc_attr( Theme::$header_style ); ?>" class="header-area header-fixed ">
			<!-- Topbar -->
			<?php if ( Theme::$top_bar == 1 || Theme::$top_bar == 'on' ) { ?>
				<?php get_template_part( 'template-parts/header/header-top', Theme::$top_bar_style ); ?>
			<?php } ?>
			<!-- Main Menu -->
			<?php if ( Theme::$header_opt == 1 || Theme::$header_opt == 'on' ) { ?>
				<?php get_template_part( 'template-parts/header/header', Theme::$header_style ); ?>
			<?php } ?>
		</div>
	</header>
	<!--End Header-->


<?php
//Header Offscreen
get_template_part( 'template-parts/header/header', 'offscreen' );
?>
	<div id="header-area-space"></div>

	<div id="header-search" class="header-search">
		<button type="button" class="close">×</button>
		<?php get_search_form(); ?>
	</div>

	<!-- Start Content wrapper -->
	<div id="content" class="site-content">
<?php
if ( Theme::$has_banner == '1' || Theme::$has_banner == 'on' ) {
	get_template_part( 'template-parts/content', 'banner' );
}
?>