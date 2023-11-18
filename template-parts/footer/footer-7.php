<?php
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
$neuzin_footer_column = Theme::neuzin_options('footer_column_7');
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
$neuzin_footer7_topshap = empty( Theme::neuzin_options('footer7_top_shape')['url'] ) ? NEUZIN_IMG_URL . 'element76.png' : Theme::neuzin_options('footer7_top_shape')['url'];
// Logo
$neuzin_light_logo = empty( Theme::neuzin_options('footer_logo_light')['url'] ) ? NEUZIN_IMG_URL . 'logo-light.png' : Theme::neuzin_options('footer_logo_light')['url'];
$neuzin_socials = Helper::socials();
?>
<?php if ( Theme::$footer_area == 1 || Theme::$footer_area == 'on' ) { ?>
	<img src="<?php echo esc_url($neuzin_footer7_topshap); ?>" alt="footershape">
	<div class="footer-top-area">
		<div class="container">
			<div class="row">
				<?php
				for ( $i = 1; $i <= $neuzin_footer_column; $i++ ) {
					echo '<div class="' . $neuzin_footer_class . '">';
					dynamic_sidebar( 'footer-style-7-'. $i );
					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>
<?php } ?>
<?php if ( Theme::$copyright_area == 1 || Theme::$copyright_area == 'on' ) { ?>
	<div class="footer-bottom-area">
		<div class="container">
			<div class="copyright_wrap">
				<div class="copyright"><?php echo wp_kses( Theme::neuzin_options('copyright_text') , 'alltext_allow' );?></div>
			</div>
		</div>
	</div>
<?php } ?>
