<?php
$neuzin_footer_column = NeuzinTheme::neuzin_options('footer_column_5');
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
$neuzin_footer5_topshap = empty( NeuzinTheme::neuzin_options('footer5_top_shape')['url'] ) ? NEUZIN_IMG_URL . 'element57.png' : NeuzinTheme::neuzin_options('footer5_top_shape')['url'];
// Logo
$neuzin_light_logo = empty( NeuzinTheme::neuzin_options('footer_logo_light')['url'] ) ? NEUZIN_IMG_URL . 'logo-light.png' : NeuzinTheme::neuzin_options('footer_logo_light')['url'];
$neuzin_socials = NeuzinTheme_Helper::socials();
?>
<?php if ( NeuzinTheme::$footer_area == 1 || NeuzinTheme::$footer_area == 'on' ) { ?>
	<img src="<?php echo esc_url($neuzin_footer5_topshap); ?>" alt="footershape">
	<div class="footer-top-area">
		<div class="container">
			<div class="row">
				<?php
				for ( $i = 1; $i <= $neuzin_footer_column; $i++ ) {
					echo '<div class="' . $neuzin_footer_class . '">';
					dynamic_sidebar( 'footer-style-5-'. $i );
					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>
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
