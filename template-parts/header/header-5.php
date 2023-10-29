<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */

$nav_menu_args = NeuzinTheme_Helper::nav_menu_args();
$neuzin_socials = NeuzinTheme_Helper::socials();
// Logo
$neuzin_light_logo = empty( NeuzinTheme::neuzin_options('logo_light')['id'] ) ? '<img width="138" height="59" alt="'.get_bloginfo( 'name' ).'" src="'.NEUZIN_IMG_URL . 'logo-light.png'.'">' : wp_get_attachment_image(NeuzinTheme::neuzin_options('logo_light')['id'],'full');
$neuzin_dark_logo = empty(  NeuzinTheme::neuzin_options('logo')['id'] ) ? '<img width="138" height="59" alt="'.get_bloginfo( 'name' ).'" src="'.NEUZIN_IMG_URL . 'logo-dark.png'.'">' :  wp_get_attachment_image(NeuzinTheme::neuzin_options('logo')['id'],'full'); 

?>

<div class="masthead-container header-controll" id="sticker">
	<div class="container">
		<div class="header-5-wrap">
			<?php if ( NeuzinTheme::neuzin_options('quick_contact') == '1' ) { ?>
			<div class="info-wrap">				
				<div class="icon-left">
				<i class="flaticon-phone-call"></i>
				</div>
				<div class="info"><span><?php $header_hotline_txt = NeuzinTheme::neuzin_options('header_hotline_txt');
				if ( !empty( $header_hotline_txt ) ){ echo esc_html( $header_hotline_txt ); } else { esc_html_e( 'Call Us Now', 'neuzin' ); } ?></span><a href="tel:<?php echo esc_attr( NeuzinTheme::neuzin_options('phone') );?>"><?php echo wp_kses( NeuzinTheme::neuzin_options('phone') , 'alltext_allow' );?></a></div>					
			</div>
			<?php } ?>	
			<div class="header-5-middle">
				<div class="site-branding">
				<a class="dark-logo" href="<?php echo esc_url( home_url( '/' ) );?>"><?php echo wp_kses_post($neuzin_dark_logo);?></a>
				<a class="light-logo" href="<?php echo esc_url( home_url( '/' ) );?>"><?php echo wp_kses_post($neuzin_light_logo);?></a>
				</div>
			</div>
			<?php if ( $neuzin_socials ) { ?>
				<ul class="tophead-social">
					<?php foreach ( $neuzin_socials as $neuzin_social ): ?>
						<li><a target="_blank" href="<?php echo esc_url( $neuzin_social['url'] );?>"><i class="fab <?php echo esc_attr( $neuzin_social['icon'] );?>"></i></a></li>
					<?php endforeach; ?>
				</ul>
			<?php } ?>
		</div>
	</div>
</div>
<div class="masthead-container header-menu-controll">
	<div class="container">
		<div class="menu-full-wrap">
			<div class="menu-wrap">
				<div id="site-navigation" class="main-navigation">
					<?php wp_nav_menu( $nav_menu_args );?>
				</div>
			</div>
			<?php get_template_part( 'template-parts/header/icon', 'area' );?>
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
			<div class="main-navigation">
				<?php wp_nav_menu( $nav_menu_args ); ?>
			</div>
			<?php get_template_part( 'template-parts/header/icon', 'area' );?>
		</div>
	</div>
</div>