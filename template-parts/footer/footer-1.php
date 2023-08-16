<?php
$neuzin_footer_column = NeuzinTheme::neuzin_options('footer_column_1');
switch ( $neuzin_footer_column ) {
	case '1':
	$neuzin_footer_class = 'col-lg-12 col-sm-12 col-12';
	break;
	case '2':
	$neuzin_footer_class = 'col-lg-6 col-sm-6 col-12';
	break;
	case '3':
	$neuzin_footer_class = 'col-lg-4 col-sm-4 col-12';
	break;		
	default:
	$neuzin_footer_class = 'col-lg-3 col-sm-6 col-12';
	break;
}
// Logo
$neuzin_light_logo = empty( NeuzinTheme::neuzin_options('footer_logo_light')['url'] ) ? NEUZIN_IMG_URL . 'logo-light.png' : NeuzinTheme::neuzin_options('footer_logo_light')['url'];
$neuzin_socials = NeuzinTheme_Helper::socials();

$footer_bg_img = empty( NeuzinTheme::neuzin_options('fbgimg')['url'] ) ? NEUZIN_IMG_URL . 'footer1_bg.png' : NeuzinTheme::neuzin_options('fbgimg')['url'];

if ( NeuzinTheme::neuzin_options('footer_bgtype') == 'fbgcolor' ) {
	$neuzin_bg = NeuzinTheme::neuzin_options('fbgcolor');
} else {
	$neuzin_bg = 'url(' . $footer_bg_img . ') no-repeat scroll center center / cover';
}

?>
<?php if ( is_active_sidebar( 'footer-style-1-1' ) ) { ?>
<?php if ( NeuzinTheme::$footer_area == 1 || NeuzinTheme::$footer_area == 'on' ) { ?>
	<div class="footer-top-area" style="background:<?php echo esc_html( $neuzin_bg ); ?>">
		<div class="container">
			<div class="row">
				<?php
				for ( $i = 1; $i <= $neuzin_footer_column; $i++ ) {
					echo '<div class="' . $neuzin_footer_class . '">';
					dynamic_sidebar( 'footer-style-1-'. $i );
					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>
<?php } ?>
<?php } ?>
<?php if ( NeuzinTheme::$copyright_area == 1 || NeuzinTheme::$copyright_area == 'on' ) { ?>
	<div class="footer-bottom-area">
		<div class="container">
			<div class="copyright_wrap">
				 <div class="copyright"><?php echo wp_kses( NeuzinTheme::neuzin_options('copyright_text') , 'alltext_allow' );?></div>
			</div>
		</div>
	</div>
<?php } ?>