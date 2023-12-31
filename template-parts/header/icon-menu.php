<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
$neuzin_socials = Helper::socials();
// Logo
$neuzin_dark_logo = empty(  Theme::neuzin_options('logo')['id'] ) ? '<img width="138" height="59" alt="'.get_bloginfo( 'name' ).'" src="'.NEUZIN_IMG_URL . 'logo-dark.png'.'">' :  wp_get_attachment_image(Theme::neuzin_options('logo')['id'],'full');

$neuzin_addit_info  = ( Theme::neuzin_options('address') || Theme::neuzin_options('phone') || Theme::neuzin_options('email') ) ? true : false;

?>

<div class="additional-menu-area">
	<div class="sidenav">
		<a href="#" class="closebtn"><i class="fas fa-times"></i></a>
		<div class="additional-logo">
			<a class="dark-logo" href="<?php echo esc_url( home_url( '/' ) );?>"><?php echo wp_kses_post($neuzin_dark_logo);?></a>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'topright','container' => '' ) );?>
		<div class="sidenav-address">
		<?php if ( !empty ( $neuzin_addit_info ) || !empty ( $neuzin_socials ) ) { ?>
			<div class="sidenav-address-title"><?php esc_html_e( 'Follow Us', 'neuzin' );?></div>
		<?php } ?>
		<?php if ( $neuzin_addit_info ) { ?>
			<?php if ( Theme::neuzin_options('address') ) { ?>
			<span><?php echo wp_kses( Theme::neuzin_options('address') , 'alltext_allow' );?></span>
			<?php } ?>
			<?php if ( Theme::neuzin_options('phone') ) { ?>
			<span><a href="tel:<?php echo esc_attr( Theme::neuzin_options('phone') );?>"><?php echo esc_html( Theme::neuzin_options('phone') );?></a></span>
			<?php } ?>
			<?php if ( Theme::neuzin_options('email') ) { ?>
			<span><a href="mailto:<?php echo esc_attr( Theme::neuzin_options('email') );?>"><?php echo esc_html( Theme::neuzin_options('email') );?></a></span>
			<?php } ?>
		<?php } ?>
			<?php if ( $neuzin_socials ) { ?>
				<div class="sidenav-social">
					<?php foreach ( $neuzin_socials as $neuzin_social ): ?>
						<span><a target="_blank" href="<?php echo esc_url( $neuzin_social['url'] );?>"><i class="fab <?php echo esc_attr( $neuzin_social['icon'] );?>"></i></a></span>
					<?php endforeach; ?>					
				</div>						
			<?php } ?>
		</div>
	</div>
	<span class="side-menu-open side-menu-trigger">
		<span></span>
		<span></span>
		<span></span>
	</span>
</div>