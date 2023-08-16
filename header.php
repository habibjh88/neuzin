<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php 
	
		if ( NeuzinTheme::neuzin_options('preloader') == '1' ){
			if ( !empty( NeuzinTheme::neuzin_options('preloader_image')['url'] ) ) {
				$preloader_img = NeuzinTheme::neuzin_options('preloader_image')['url'];				
			?>				
			<div id="preloader" class="tlp-preloader">
				<div class="animation-preloader">
					<img width="70" height="70" src="<?php echo esc_url( $preloader_img ); ?>" alt="<?php echo esc_attr__( 'preloader' , 'neuzin' ) ?>">
				</div> 
			</div>
			<?php }
		}

		if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'header' ) ) {
			return;
		}

	?>
	<div id="page" class="site">		
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'neuzin' ); ?></a>		
		<header id="masthead" class="site-header">			
			<div id="header-<?php echo esc_attr( NeuzinTheme::$header_style ); ?>" class="header-area header-fixed ">
				<?php if ( NeuzinTheme::$top_bar == 1 || NeuzinTheme::$top_bar == 'on' ){ ?>			
				<?php get_template_part( 'template-parts/header/header-top', NeuzinTheme::$top_bar_style ); ?>
				<?php } ?>				
				<?php if ( NeuzinTheme::$header_opt == 1 || NeuzinTheme::$header_opt == 'on' ){ ?>
				<?php get_template_part( 'template-parts/header/header', NeuzinTheme::$header_style ); ?>
				<?php } ?>
			</div>
		</header>
		<?php get_template_part('template-parts/header/header', 'offscreen');?>
		<div id="header-area-space"></div>
		<div id="header-search" class="header-search">
            <button type="button" class="close">×</button>
            <?php get_search_form(); ?>
        </div>
		<div id="content" class="site-content">	
			<?php
				if ( NeuzinTheme::$has_banner == '1' || NeuzinTheme::$has_banner == 'on' ) { 
					get_template_part('template-parts/content', 'banner');
				}
			?>