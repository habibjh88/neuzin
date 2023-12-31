<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
$nav_menu_args = Helper::nav_menu_args();
// Logo
$neuzin_light_logo = empty( Theme::neuzin_options('logo_light')['id'] ) ? '<img width="138" height="59" alt="'.get_bloginfo( 'name' ).'" src="'.NEUZIN_IMG_URL . 'logo-light.png'.'">' : wp_get_attachment_image(Theme::neuzin_options('logo_light')['id'],'full');
$neuzin_dark_logo = empty(  Theme::neuzin_options('logo')['id'] ) ? '<img width="138" height="59" alt="'.get_bloginfo( 'name' ).'" src="'.NEUZIN_IMG_URL . 'logo-dark.png'.'">' :  wp_get_attachment_image(Theme::neuzin_options('logo')['id'],'full');

?>
<div class="masthead-container header-controll" id="sticker">
	<div class="container">
		<div class="menu-full-wrap">
			<div class="site-branding">
				<a class="dark-logo" href="<?php echo esc_url( home_url( '/' ) );?>"><?php echo wp_kses_post($neuzin_dark_logo);?></a>
				<a class="light-logo" href="<?php echo esc_url( home_url( '/' ) );?>"><?php echo wp_kses_post($neuzin_light_logo);?></a>
			</div>
			<div class="menu-wrap">
				<div id="site-navigation" class="main-navigation">
					<?php wp_nav_menu( $nav_menu_args );?>
				</div>
			</div>
			<div class="menu-right-wrap header-icon-area">
				<?php if ( Theme::neuzin_options('search_icon') ) { ?>
					<?php get_template_part( 'template-parts/header/icon', 'search' );?>
				<?php } ?>
				<?php if ( Theme::neuzin_options('cart_icon') ) { ?>
					<?php get_template_part( 'template-parts/header/icon', 'cart' );?>
				<?php } ?>
				<?php if ( Theme::neuzin_options('online_button') == '1' ) { ?>
				<div class="header-button-wrap">
					<div class="header-button">
						<?php if ( Theme::neuzin_options('online_button_text') ) { ?><a class="btn-fill btn-gradient" target="_self" href="<?php echo esc_url( Theme::neuzin_options('online_button_link')  );?>"><?php echo esc_html( Theme::neuzin_options('online_button_text') );?></a><?php } ?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<div class="rt-sticky-menu-wrapper rt-sticky-menu">
	<div class="container">
		<div class="sticky-menu-align">
			<div class="site-branding">
				<a class="dark-logo" href="<?php echo esc_url( home_url( '/' ) );?>"><?php echo wp_kses_post($neuzin_dark_logo);?></a>
				<a class="light-logo" href="<?php echo esc_url( home_url( '/' ) );?>"><?php echo wp_kses_post($neuzin_light_logo);?></a>
			</div>
			<div id="site-navigation-onepage" class="main-navigation">
				<?php wp_nav_menu( $nav_menu_args ); ?>
			</div>
			<div class="menu-right-wrap header-icon-area">
				<?php if ( Theme::neuzin_options('search_icon') ) { ?>
					<?php get_template_part( 'template-parts/header/icon', 'search' );?>
				<?php } ?>
				<?php if ( Theme::neuzin_options('cart_icon') ) { ?>
					<?php get_template_part( 'template-parts/header/icon', 'cart' );?>
				<?php } ?>
				<?php if ( Theme::neuzin_options('online_button') == '1' ) { ?>
				<div class="header-button-wrap">
					<div class="header-button">
						<a class="btn-fill btn-gradient" target="_self" href="<?php echo esc_url( Theme::neuzin_options('online_button_link')  );?>"><?php echo esc_html( Theme::neuzin_options('online_button_text') );?></a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>